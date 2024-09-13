<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject', 'user_id', 'dell_id', 'project_id', 'start', 'due', 'company_id', 'contact_id', 'reminder_date', 'reminder_time', 'note',
    ];

    protected $casts = [

    ];

    public function solver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'solver_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function dell(): BelongsTo
    {
        return $this->belongsTo(Dell::class, 'dell_id');
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
