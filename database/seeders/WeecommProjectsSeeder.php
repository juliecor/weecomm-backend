<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Realty;
use Illuminate\Database\Seeder;

/**
 * Wee Comm's 16 communities as weecomm.ph lists them (data/weecomm-projects.json: name,
 * place, status, the one-line description and the photos from their own site), each with
 * its public page on. No units, models or prices: those come from Wee Comm's price list.
 * Safe to run again: it updates by slug and never touches units, plans or photos added since.
 */
class WeecommProjectsSeeder extends Seeder
{
    public function run(): void
    {
        $realty = Realty::where('slug', 'weecomm')->first();
        if (! $realty) {
            $this->command->error('Seed the realty first (DatabaseSeeder).');

            return;
        }
        $rows = json_decode(file_get_contents(__DIR__.'/data/weecomm-projects.json'), true, 512, JSON_THROW_ON_ERROR);

        foreach ($rows as $row) {
            $project = Project::firstOrNew(['realty_id' => $realty->id, 'slug' => $row['slug']]);
            $fresh = ! $project->exists;
            $project->fill([
                'name' => $row['name'],
                'location' => $row['location'],
                'region' => $row['region'],
                'stage' => $row['stage'],
                'description' => $row['description'],
                'official_url' => $row['source'],
                'status' => 'active',
            ]);
            // Photos only the first time, so ones uploaded on the dashboard since stay.
            if ($fresh || ! $project->cover_path) {
                $project->fill(['cover_path' => $row['cover'], 'hero_paths' => $row['hero'], 'is_public' => true]);
            }
            $project->save();
        }
        $this->command->info(count($rows).' Wee Comm communities seeded.');
    }
}
