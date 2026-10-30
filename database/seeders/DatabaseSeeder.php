<?php

namespace Database\Seeders;

use App\Models\Realty;
use App\Models\RequirementType;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * The first admin (from ADMIN_* in .env, so no password sits in the repo),
     * Wee Comm, realty #1 — the site is theirs, its landing is at / — with its
     * staff login (from WEECOMM_ADMIN_* in .env) and its 16 communities, and the
     * owner's super admin, who can view any realty's dashboard as any role.
     * Safe to run again: it updates rather than duplicates.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASSWORD');
        if (! $email || ! $password) {
            $this->command->error('Set ADMIN_EMAIL and ADMIN_PASSWORD in .env first.');

            return;
        }

        User::updateOrCreate(
            ['email' => $email],
            ['name' => env('ADMIN_NAME', 'Platform admin'), 'password' => $password, 'role' => User::ROLE_ADMIN, 'realty_id' => null],
        );
        $this->command->info("Admin: {$email}");

        $this->call(SuperAdminSeeder::class);

        // Everything here is from weecomm.ph: the company's own details and words.
        $weecomm = Realty::updateOrCreate(
            ['slug' => 'weecomm'],
            [
                'name' => 'Wee Community Developers, Inc.',
                'status' => Realty::STATUS_ACTIVE,
                'registered_at' => now(),
                'logo_path' => '/weecomm/logo-wide.png',
                'accent_color' => '#e84030',
                'email' => 'inquiries@weecomm.ph',
                'phone' => '(02) 866 16794',
                'address' => '166 A. Mabini St., Addition Hills, San Juan 1500 Metro Manila',
                'about' => 'At Wee Comm, we transform spaces into vibrant, sustainable communities designed for a lifetime of comfort and connection. Our commitment goes beyond building homes, we create environments where families thrive and neighborhoods flourish.',
            ],
        );
        // What buyers send with their offer (ID, proof of income…); left alone once Wee Comm has its own list.
        RequirementType::seedDefaults($weecomm);
        $this->command->info('Realty: Wee Community Developers, Inc. (/weecomm)');

        // Wee Comm's own staff login (signs in at /weecomm/login, not /admin/login).
        $staffEmail = env('WEECOMM_ADMIN_EMAIL');
        $staffPassword = env('WEECOMM_ADMIN_PASSWORD');
        if ($staffEmail && $staffPassword) {
            User::updateOrCreate(
                ['email' => $staffEmail],
                ['name' => env('WEECOMM_ADMIN_NAME', 'Wee Comm Admin'), 'password' => $staffPassword, 'role' => User::ROLE_REALTY, 'realty_id' => $weecomm->id],
            );
            $this->command->info("Wee Comm staff: {$staffEmail}");
        } else {
            $this->command->warn('Skipped the Wee Comm staff login: set WEECOMM_ADMIN_EMAIL and WEECOMM_ADMIN_PASSWORD in .env.');
        }

        $this->call(WeecommProjectsSeeder::class);
    }
}
