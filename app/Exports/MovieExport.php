<?php

namespace App\Exports;

use App\Movie;
use FontLib\Table\Type\name;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;


class MovieExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $movies =\Illuminate\Support\Facades\DB::table('movies')->select('name',
        'synopsis', 'category', 'director', 'duration', 'actors', 'genre')->get();
        return $movies;
    }
    public function headings():array {
        return [
            'name',
        'synopsis',
        'category',
        'director',
        'duration',
        'actors',
        'genre'

        ];
    }
}
