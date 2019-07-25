<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'shipmentNum','type','weight','width','quantity','paymentMethod','price','pickupDate','state_id','recevier_id','customer_id','updated_at', 'created_at'
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function driver()
    {
        return $this->belongsTo(User::class);
    }
    public function recevier()
    {
        return $this->belongsTo(Recevier::class);
    }
    public function state()
    {
        return $this->belongsTo(ShipmentState::class);
    }
    
}
