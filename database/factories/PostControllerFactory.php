<?php

namespace Database\Factories;

use App\Models\PostController; // Assurez-vous d'importer le bon modèle
use Illuminate\Database\Eloquent\Factories\Factory;

class PostControllerFactory extends Factory
{
    /**
     * Le modèle associé à la factory.
     *
     * @var string
     */
    protected $model = PostController::class;

    /**
     * Définissez l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6, true),
            'photo' => null,
            'description' => $this->faker->sentences(5, true), // Utilisez `sentences` au lieu de `sentences()`
            'lieux' => $this->faker->sentence(1, 2),
            'agent' => $this->faker->sentence(1, 2),
            'surface' => $this->faker->randomNumber(2),
            'pieces' => $this->faker->randomNumber(1),
            'disponible' => true,
            'prix' => $this->faker->randomNumber(5),
            'energie'=>'A',
            'type_de_bien'=>'appartment',
            'type_de_vente'=>'Neuf',
            'exterieur'=>true,
            'surface_exterieur'=>$this->faker->randomNumber()
        ];
    }
}

