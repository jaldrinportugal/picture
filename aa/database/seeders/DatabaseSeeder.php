<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelPatients;

use App\Models\Admin;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {


        \App\Models\Admin::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
        ]);



        Patient::truncate();

        Patient::create([
            'name' => 'Patient 1',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 2',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 3',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 4',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 5',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 6',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 7',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 8',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 9',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 10',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 10',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 11',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 12',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 13',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 14',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 15',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 16',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 17',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 18',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 19',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 20',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Patient::create([
            'name' => 'Patient 21',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);
    }
}
