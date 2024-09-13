<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'contact_name', 'phone', 'email', 'website', 'ico', 'vat', 'street', 'town', 'zip', 'state', 'country', 'billing_street', 'billing_town', 'billing_zip', 'billing_state', 'billing_country', 'note',
    ];

    protected $casts = [

    ];

    public function contactName(): BelongsTo
    {
        return $this->belongsTo(ContactName::class, 'contactname_id');
    }
}
