<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('tags')->exists()) {
            $this->command->getOutput()->writeln('<question>Skipping: ' . __CLASS__ . '</question>');

            return;
        }

        DB::table('tags')->insert([
            [
                'id'          => 1,
                'name'        => 'laravel',
                'slug'        => 'laravel',
                'keywords'    => 'laravel',
                'description' => 'Laravel is a simple and elegant PHP Web development framework (PHP Web Framework). It can free you from messy codes like noodles; it can help you build a perfect network APP, and every line of code can be concise and expressive.',
                'created_at'  => '2017-7-16 07:35:12',
                'updated_at'  => '2016-7-16 07:35:12',
                'deleted_at'  => null,
            ],
            [
                'id'          => 2,
                'name'        => 'test',
                'slug'        => 'test',
                'keywords'    => 'test',
                'description' => 'Test description',
                'created_at'  => '2019-01-04 15:35:12',
                'updated_at'  => '2019-01-04 15:35:12',
                'deleted_at'  => null,
            ],
            [
                'id'          => 3,
                'name'        => 'deleted',
                'slug'        => 'deleted',
                'keywords'    => 'delete',
                'description' => 'deleted tags',
                'created_at'  => '2019-01-04 15:35:12',
                'updated_at'  => '2019-01-04 15:35:12',
                'deleted_at'  => '2019-01-04 15:35:12',
            ],
        ]);
    }
}
