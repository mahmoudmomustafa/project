<?php

namespace App\Exports;

use App\Shipment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ShipmentExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Shipment::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'shipmentNum',
            'type',            
            'weight',
            'width',
            'quantity',
            'paymentMethod',
            'price ',
            'pickupDate',
            'Comments'
        ];
    }
}
