<?php

namespace App\Models\Task;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{

    protected $table = "task";

    /** @var array */
    protected $fillable = [
        'id',
        'title',
        'assignedTo',
        'assignedby',
        'status',
        'priority',
        'created_at',
        'name',
        'description',
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function priority(){

        return $this->hasOne(Priority::class);

    }



//Get all tasks assigned to one user

//View a single task

//Create, Update, Delete, Complete

}
