<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeSheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject', 'time_sheet_type', 'date', 'start_time', 'end_time', 'project_id', 'deal_id', 'task_id', 'user_id',
    ];

    protected $casts = [

    ];

    public function time_sheet_type(): BelongsTo
    {
        return $this->belongsTo(TimeSheetType::class, 'time_sheet_type_id');
    }

    public function deal(): BelongsTo
    {
        return $this->belongsTo(Deal::class, 'deal_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
