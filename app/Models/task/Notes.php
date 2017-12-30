<?php

namespace App\Models\Task;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Notes extends Model
{

    protected $table = "notes";

    /** @var array */
    protected $fillable = [
        'id',
        'task_id',
        'description',
        'time',
        'user_id',
    ];

    /**
     * @return HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);

    }

    /**
     * @return BelongsTo
     */
    public function task(){

        return $this->belongsTo(Task::class);

    }

}
