<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pagination;
class PaginationSeeder extends Seeder
{
    public function run()
    {
        Pagination::factory(100)->create();
    }
}
