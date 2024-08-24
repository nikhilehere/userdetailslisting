<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;

class UserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name' => 'Application  Development']);
        Department::create(['name' => 'Sales and Marketing']);
        Department::create(['name' => 'Training']);

        Designation::create(['name' => 'Marketing Manager']);
        Designation::create(['name' => 'Mobile App Developer']);
        Designation::create(['name' => 'Mobile App Designer']);
        Designation::create(['name' => 'Tester']);
        Designation::create(['name' => 'Trainer']);
        Designation::create(['name' => 'Intern']);
        Designation::create(['name' => 'Project Manager']);

        User::create([
            'name' => 'Nikhil E',
            'fk_department' => 1,
            'fk_designation' => 2,
            'phone_number' => '9632587412'
        ]);

        User::create([
            'name' => 'Mohanlal',
            'fk_department' => 2,
            'fk_designation' => 1,
            'phone_number' => '0987654321'
        ]);

        User::create([
            'name' => 'Mammootty',
            'fk_department' => 1,
            'fk_designation' => 7,
            'phone_number' => '0987654321'
        ]);

        User::create([
            'name' => 'Jayaram',
            'fk_department' => 1,
            'fk_designation' => 3,
            'phone_number' => '0987654321'
        ]);

        User::create([
            'name' => 'Suresh gopi',
            'fk_department' => 1,
            'fk_designation' => 4,
            'phone_number' => '0987654321'
        ]);

        User::create([
            'name' => 'Dileep',
            'fk_department' => 3,
            'fk_designation' => 6,
            'phone_number' => '0987654321'
        ]);

        User::create([
            'name' => 'Prithvi Raj',
            'fk_department' => 1,
            'fk_designation' => 3,
            'phone_number' => '0987654321'
        ]);

        User::create([
            'name' => 'Fahad Fasil',
            'fk_department' => 1,
            'fk_designation' => 2,
            'phone_number' => '0987654321'
        ]);

        User::create([
            'name' => 'Nivin Pauly',
            'fk_department' => 1,
            'fk_designation' => 7,
            'phone_number' => '0987654321'
        ]);
    }
}
