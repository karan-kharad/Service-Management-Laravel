<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\RepairJob;
use Illuminate\Http\Request;

class RepairJobController extends Controller
{
     public function store(request $request)
    {
        $request->validate([
            'customer_name'=>'required|string',
            'phone'=>'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        //check if customer extists

        $customer = Customer::firstOrCreate(
            ['phone'=>$request->phone],
            [
                'name' => $request->customer_name,
                'email' => $request->customer_email,
                'address' => $request->customer_address 
            ]
        );

        //create repair job
        
        $job = RepairJob::create([
            'customer_id' => $customer->id,
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'pending'
        ]);
        return response()->json([
            'message' => 'Repair job created successfully',
            'customer'=> $customer,
            'job' => $job->id
        ]);

    }

    public function index()
    {
        return RepairJob::with(['owner','employee'])->get();
    }

    public function assigendJob()
    {
        return RepairJob::with('assinged_to',auth()->id())->get();
    }

    public function updataStatus(Request $request, $id)
    {
        $request ->validate([
            'status' => 'requided|in:pending, in_progress, completed'
        ]);

        $job = RepairJob::findOrFail($id);

        if($job->assiged_to !== auth()->id()){
            return response()->json(['error'=>['message'=> 'Unauthorized']],403);
        }

        $job->update([
            'status'=> $request->status
        ]);

        return response()->json($job,200);
    }

}
