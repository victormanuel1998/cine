<?php

namespace App\Exports;

use App\Entrance;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EntranceExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function headings(): array
    {
        return
        [
            'price',
            'hourEntrance'
        
        ];
    }
       
    public function collection ()
    {
        $entrances= DB::table('entrances')->select('price','hourEntrance')->get();
        return $entrances;
    }
}
