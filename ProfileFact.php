<?php
namespace Database\Factories; 
use App\Models\Profile; 
use Illuminate\Database\Eloquent\Factories\Factory; 

				class ProfileFactory extends Factory { 
					protected $model = Profile::class; 
							
							public function definition() { 
					
									return [ 'nom' => $this->faker->lastName, 'prenom' => $this->faker->firstName, 
											 'image' => 'default.png', 
							 
											// Vous pouvez utiliser un chemin par défaut ou gérer les images autrement 'statut' => $this->faker->randomElement(['inactif', 'en attente', 'actif']), ]; } } 
?>