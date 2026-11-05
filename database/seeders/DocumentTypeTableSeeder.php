<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocumentType::create(['name' => 'Passport']);
        DocumentType::create(['name' => 'Driver\'s License']);
        DocumentType::create(['name' => 'National ID']);
        DocumentType::create(['name' => 'Social Security Card']);
        DocumentType::create(['name' => 'Birth Certificate']);
    }
}
