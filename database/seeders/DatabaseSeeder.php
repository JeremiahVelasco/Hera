<?php

namespace Database\Seeders;

use App\Models\Child;
use App\Models\Guardian;
use App\Models\RecordsVaccine;
use App\Models\Timeline;
use App\Models\User;
use App\Models\Vaccine;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@hera.com',
        ]);

        // Guardian
        Guardian::create([
            'given_name' => 'Divina',
            'middle_name' => 'Daligues',
            'last_name' => 'Velasco',
            'email' => 'jimov666@gmail.com',
            'contact' => '09458236715',
            'children' => json_encode([1])
        ]);

        // Child
        Child::create([
            'guardian' => json_encode([1]),
            'given_name' => 'Jeremiah',
            'middle_name' => 'Daligues',
            'last_name' => 'Velasco',
            'date_of_birth' => '10-27-1998',
            'height' => 48.2,
            'weight' => 2.9
        ]);

        // Timeline event
        Timeline::create([
            'child_id' => 1,
            'event_type' => 1,
            'event_id' => 1,
        ]);

        // Vaccine 
        Vaccine::create([
            'name' => 'Engerix-B',
            'description' => 'Prevents hepatitis B.',
            'recommended_age' => '12 Hours',
            'doses' => 3,
            'manufacturer' => 'GlaxoSmithKline'
        ]);

        // Vaccination Record
        RecordsVaccine::create([
            'child_id' => 1,
            'vaccine_id' => 1,
            'date' => '10-27-1998',
            'dose_number' => 1,
            'dosage' => 0.5,
            'injection_site' => 'Intramuscular - anterolateral aspect of the thigh',
            'details' => 'No complications'
        ]);
    }
}
