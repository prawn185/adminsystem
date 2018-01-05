<?php

namespace App\Models;

use App\Models\Task\Task;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{

    protected $table = "customer";

    /** @var array */
    protected $fillable = [
        'id',
        'name',
        'email',
        'tasks',
        'time_per_month',
        'billing_rate',
        'paid_this_month',
        'account_manager',
        'project_manager',
    ];

    /**
     * @return HasMany
     */
    public function tasks(){

        return $this->hasMany(Task::class);

    }


}
