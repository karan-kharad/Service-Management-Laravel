<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RepairJob;
use Illuminate\Http\Request;

class RepairJobController extends Controller
{
     public function store(request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $job = RepairJob::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return response()->json($job,201);

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
