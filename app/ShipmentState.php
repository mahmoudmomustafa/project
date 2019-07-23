<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipmentState extends Model
{
    public function shipments()
    {
        return $this->hasMany(Shipment::class, 'state_id');
    }
}
