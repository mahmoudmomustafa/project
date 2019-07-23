<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recevier extends Model
{
    protected $fillable = [
        'accountNum', 'name','mobile','companyName','postal','address','updated_at', 'created_at'
    ];
    public function shipments()
    {
        return $this->hasMany(Shipment::class, 'recevier_id');
    }
}
