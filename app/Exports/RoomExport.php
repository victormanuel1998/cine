<?php

namespace App\Exports;

use App\Room;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class RoomExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function headings():array {
        return [
            'chairs',
            'location',
            'capacity'

        ];
    }
    public function collection()
    {
        $rooms =DB::table('rooms')->select('chairs',
        'location',
        'capacity')->get();
        return $rooms;
    }
}
