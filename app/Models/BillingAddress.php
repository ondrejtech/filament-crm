<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BillingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id', 'billing_street', 'billing_town', 'billing_zip', 'billing_state', 'billing_country',
    ];

    protected $casts = [

    ];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
