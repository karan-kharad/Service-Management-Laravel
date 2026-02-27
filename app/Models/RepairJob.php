<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


Class RepairJob extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'assigned_to',
        'title',
        'description',
        'status'
    ];

    // Job belongs to creator
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Job assigned to employee
    public function assignedEmployee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'');
    }

}