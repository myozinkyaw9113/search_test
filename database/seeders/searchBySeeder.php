<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class searchBySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('search_by')->insert([
            'search_by' => 'Title',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'Subject',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'ISSN',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'ISBN',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'DOIs',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'Author',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'Language',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'StartDate',
        ]);
        DB::table('search_by')->insert([
            'search_by' => 'EndDate',
        ]);
    }
}
