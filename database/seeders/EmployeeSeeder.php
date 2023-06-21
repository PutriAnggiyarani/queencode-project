<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Farras',
                'lastname' => 'Hanun',
                'email' => 'farras.hanun@gmail.com',
                'age' => '20',
                'position_id' => 1
            ],
            [
                'firstname' => 'Arreta',
                'lastname' => 'Azahra',
                'email' => 'arreta.azahra@gmail.com',
                'age' => '21',
                'position_id' => 2
            ],
            [
                'firstname' => 'Agatha',
                'lastname' => 'Xaviera',
                'email' => 'agatha.xaviera@gmail.com',
                'age' => '22',
                'position_id' => 3
            ],
        ]);
    }
}
