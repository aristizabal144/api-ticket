<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(1, 1000),
            'usuario' => $this->faker->name,
            'estatus' => 'abierto',
            'created_at' =>  $this->faker->dateTimeThisDecade,
            'updated_at' => $this->faker->dateTimeThisDecade,
        ];
    }
}