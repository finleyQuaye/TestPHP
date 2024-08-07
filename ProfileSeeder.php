<?php

namespace Database\Seeders; 
use App\Models\Profile; 
use Illuminate\Database\Seeder; 

				class ProfileSeeder extends Seeder { 
				
						public function run() { Profile::factory()->count(50)->create(); } } 





?>