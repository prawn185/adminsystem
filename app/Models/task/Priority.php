<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Priority extends Model
{

    protected $table = "priority";

    /** @var array */
    protected $guarded = [
        'updated_by',
        'created_at',
    ];


    /**
     * @return BelongsTo
     */
    public function task()
    {

        return $this->belongsTo(Task::class);

    }
}