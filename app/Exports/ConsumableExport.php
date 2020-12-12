<?php

namespace App\Exports;

use App\Consumable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class ConsumableExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
*/
public function collection()
    {
        $consumables =\Illuminate\Support\Facades\DB::table('consumables')->select('name',
        'price',
        'quantity'
        )->get();
        return $consumables;
    }
    public function headings():array
    {
        return
        [
            'name',
        'price',
        'quantity'
        
        ];
    }
}
