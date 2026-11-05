<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::create([
            'name' => 'John Doe',
            'gender_id' => 1, // Assuming 1 corresponds to 'Hombre'
            'country_id' => 1, // Assuming 1 corresponds to 'United States'
            'document_type_id' => 1, // Assuming 1 corresponds to 'Passport'
        ]);

        Users::create([
            'name' => 'Jane Smith',
            'gender_id' => 2, // Assuming 2 corresponds to 'Mujer'
            'country_id' => 2, // Assuming 2 corresponds to 'Canada'
            'document_type_id' => 2, // Assuming 2 corresponds to 'Driver\'s License'
        ]);   
    }
}
