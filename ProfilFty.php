<?php
namespace Database\Factories; 
use App\Models\Profile; 
use Illuminate\Database\Eloquent\Factories\Factory; 

			class ProfileFactory extends Factory { 
			
					protected $model = Profile::class; public function definition() { 
					
						return [ 'nom' => $this->faker->lastName, 
								 'prenom' => $this->faker->firstName, 
								 'image' => 'default.png', 
								 
								 // Chemin par défaut ou utilisez Faker pour générer des images 'statut' => $this->faker->randomElement(['inactif', 'en attente', 'actif']), ]; } } 


?>