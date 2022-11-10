<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'empFirstName' => 'John',
            'empLastName' => 'Doe',
            'deptID' => 1,
            'empPicture' => '',
            'empContactNo' => rand(1000000,9999999),
            'empEmail' => 'johndoe@sebione.com',
        ]);
    }
}
