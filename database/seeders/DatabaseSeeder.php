<?php
namespace Database\Seeders;
use App\Models\Vacancy;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (Vacancy::count() > 0) return;
        Vacancy::insert([
            [
                'title' => 'Chief Officer',
                'vessel_type' => 'Cargo Vessel',
                'location' => 'International',
                'employment_type' => 'Contract',
                'description' => 'Sample vacancy for demonstration. Confirm the real job details with Ayar Shipping Services before publishing.',
                'requirements' => "Valid relevant Certificate of Competency\nCurrent medical certificate\nRelevant sea service and experience",
                'is_active' => true,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'title' => 'Able Seafarer / AB',
                'vessel_type' => 'Merchant Vessel',
                'location' => 'International',
                'employment_type' => 'Contract',
                'description' => 'Sample vacancy for demonstration. Replace this with a verified opening before accepting applications.',
                'requirements' => "Valid seafarer documents\nRelevant training certificates\nSea service record",
                'is_active' => true,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'title' => 'Marine Engineer',
                'vessel_type' => 'Cargo Vessel',
                'location' => 'International',
                'employment_type' => 'Contract',
                'description' => 'Sample vacancy for demonstration. The role, salary and joining date need confirmation.',
                'requirements' => "Relevant engineering certification\nValid medical certificate\nRelevant vessel experience",
                'is_active' => true,
                'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }
}
