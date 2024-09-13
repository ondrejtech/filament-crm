<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject', 'journal_type_id', 'deal_id', 'project_id', 'start_date', 'start_time', 'company_id', 'contact_id',
    ];

    protected $casts = [

    ];

    public function journal_type(): BelongsTo
    {
        return $this->belongsTo(JournalType::class, 'journal_type_id');
    }

    public function deal(): BelongsTo
    {
        return $this->belongsTo(Deal::class, 'deal_id');
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
