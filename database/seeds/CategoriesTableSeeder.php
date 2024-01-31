<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('categories')->exists()) {
            $this->command->getOutput()->writeln('<question>Skipping: ' . __CLASS__ . '</question>');

            return;
        }

        DB::table('categories')->insert([
            [
                'id'          => 1,
                'name'        => 'php',
                'slug'        => 'php',
                'keywords'    => 'php',
                'description' => 'php related articles',
                'sort'        => 1,
                'pid'         => 0,
                'created_at'  => '2017-7-16 07:35:12',
                'updated_at'  => '2016-7-16 07:35:12',
                'deleted_at'  => null,
            ],
            [
                'id'          => 2,
                'name'        => 'for deletion',
                'slug'        => 'for-deletion',
                'keywords'    => 'for deletion',
                'description' => 'for deletion',
                'sort'        => 2,
                'pid'         => 0,
                'created_at'  => '2019-01-04 16:35:12',
                'updated_at'  => '2019-01-04 16:35:12',
                'deleted_at'  => null,
            ],
            [
                'id'          => 3,
                'name'        => 'deleted',
                'slug'        => 'deleted',
                'keywords'    => 'deleted',
                'description' => 'deleted',
                'sort'        => 3,
                'pid'         => 0,
                'created_at'  => '2019-01-04 16:35:12',
                'updated_at'  => '2019-01-04 16:35:12',
                'deleted_at'  => '2019-01-04 16:35:12',
            ],
        ]);
    }
}
