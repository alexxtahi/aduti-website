<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::insert([
            ['name' => 'FUTUR AFRIC', 'activity' => 'Computer Science, Artificial Intelligence', 'logo_path' => 'img/logos/partners/logo-futurafric.png', 'created_at' => now()],
            ['name' => 'SaH Analytics', 'activity' => 'Computer Science, Data Science, Big Data, Artificial Intelligence', 'logo_path' => 'img/logos/partners/logo-sah.png', 'created_at' => now()],
        ]);
    }
}
