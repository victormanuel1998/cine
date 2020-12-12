<?php

namespace App\Exports;

use App\Functions;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class FunctionsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array
    {
        return
        [
           'start',
            'end',
            'available',
            'type'
        ];
    }
    public function collection()
    {
       
        $functions =DB::table('functions')->select('start',
        'end',
        'available',
        'type' )->get();
         return $functions;
    }
   
}


