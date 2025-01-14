<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['work_group_id', 'name', 'position'];

    public function workGroup(): BelongsTo
    {
        return $this->belongsTo(WorkGroup::class);
    }
}
