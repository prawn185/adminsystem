<?php

namespace App;

use App\Models\Task\Task;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [

        'created_at',
        'updated_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function notes(){
        return $this->hasMany(Notes::class);
    }

}
