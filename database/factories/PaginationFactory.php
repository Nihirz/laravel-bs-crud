<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Pagination;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaginationFactory extends Factory
{
    protected $model = Pagination::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'desc' => $this->faker->email(),
        ];
    }
}
