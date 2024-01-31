<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('sites')->exists()) {
            $this->command->getOutput()->writeln('<question>Skipping: ' . __CLASS__ . '</question>');

            return;
        }

        DB::table('sites')->insert([
            [
                'id'                => 1,
                'socialite_user_id' => 1,
                'name'              => 'Bai Junyao\'s blog',
                'description'       => 'Bai Junyao\'s personal blog',
                'url'               => 'https://baijunyao.com',
                'audit'             => 0,
                'sort'              => 1,
                'created_at'        => '2018-11-15 20:35:12',
                'updated_at'        => '2018-11-15 20:35:12',
                'deleted_at'        => null,
            ],
            [
                'id'                => 2,
                'socialite_user_id' => 1,
                'name'              => 'deleted',
                'description'       => 'for testing',
                'url'               => 'https://deleted.com',
                'audit'             => 1,
                'sort'              => 1,
                'created_at'        => '2019-01-04 16:35:12',
                'updated_at'        => '2019-01-04 16:35:12',
                'deleted_at'        => '2019-01-04 16:35:12',
            ],
        ]);
    }
}
