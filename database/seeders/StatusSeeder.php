<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{

    public static $statuses = [
        'Принят',
        'В обработке',
        'Выполнен'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$statuses as $status){
            DB::table('statuses')->insert([
                'title'=>$status
            ]);
        }
    }
}
