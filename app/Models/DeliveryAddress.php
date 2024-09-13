<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeliveryAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id', 'delivery_address', 'delivery_town', 'delivery_zip', 'delivery_state', 'delivery_country',
    ];

    protected $casts = [

    ];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
