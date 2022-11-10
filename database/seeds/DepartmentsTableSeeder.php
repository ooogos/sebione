<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
        DB::table('departments')->insert([
            'deptCode' => '001',
            'deptName' => 'Department 1',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);

        DB::table('departments')->insert([
            'deptCode' => '002',
            'deptName' => 'Department 2',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);

        DB::table('departments')->insert([
            'deptCode' => '003',
            'deptName' => 'Department 3',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '004',
            'deptName' => 'Department 4',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '005',
            'deptName' => 'Department 5',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '006',
            'deptName' => 'Department 6',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '007',
            'deptName' => 'Department 7',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '008',
            'deptName' => 'Department 8',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '009',
            'deptName' => 'Department 9',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '010',
            'deptName' => 'Department 10',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
        DB::table('departments')->insert([
            'deptCode' => '011',
            'deptName' => 'Department 11',
            'deptNo' => rand(1000000,9999999),
            'deptEmail' => Str::random(5).'@sebione.com',
        ]);
    }
    
}
