<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'company_id', 'contact_id', 'email', 'phone', 'street', 'town', 'zip', 'state', 'country', 'est_revenue', 'currency_name', 'est_close_date', 'probability', 'referral_source', 'marketing_id', 'note',
    ];

    protected $casts = [

    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Curency::class, 'currency_id');
    }

    public function marketing(): BelongsTo
    {
        return $this->belongsTo(Marketing::class, 'marketing_id');
    }
}
