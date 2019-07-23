<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'accountName', 'accountNum', 'name','phone','company','postal','address','updated_at', 'created_at'
    ];
    public function shipments()
    {
        return $this->hasMany(Shipment::class, 'customer_id');
    }
}
