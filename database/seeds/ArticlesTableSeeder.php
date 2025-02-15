<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('articles')->exists()) {
            $this->command->getOutput()->writeln('<question>Skipping: ' . __CLASS__ . '</question>');

            return;
        }

        DB::table('articles')->insert([
            [
                'id'          => 1,
                'category_id' => 1,
                'title'       => 'Welcome to laravel-bjyblog',
                'slug'        => 'welcome-to-laravel-bjyblog',
                'author'      => 'Bai Junyao',
                'markdown'    => '1. [switch language](https://baijunyao.com/docs/laravel-bjyblog/其他配置.html)
![](/images/default/article.png)
2. [Clear test data](https://baijunyao.com/docs/laravel-bjyblog/清空测试数据.html)
3. [updated version](https://baijunyao.com/docs/laravel-bjyblog/升级版本.html)',
                'html'        => '<ol>
<li>
<a href="https://baijunyao.com/docs/laravel-bjyblog/%E5%85%B6%E4%BB%96%E9%85%8D%E7%BD%AE.html">switch language</a>
<img src="/images/default/article.png" alt="" />
</li>
<li>
<a href="https://baijunyao.com/docs/laravel-bjyblog/%E6%B8%85%E7%A9%BA%E6%B5%8B%E8%AF%95%E6%95%B0%E6%8D%AE.html">Clear test data</a>
</li>
<li>
<a href="https://baijunyao.com/docs/laravel-bjyblog/%E5%8D%87%E7%BA%A7%E7%89%88%E6%9C%AC.html">updated version</a>
</li>
</ol>
',
                'description' => 'Welcome to laravel-bjyblog',
                'keywords'    => 'laravel',
                'cover'       => '/images/default/article.png',
                'is_top'      => 1,
                'views'       => 666,
                'created_at'  => '2017-7-16 07:35:12',
                'updated_at'  => '2016-7-16 07:35:12',
                'deleted_at'  => null,
            ],
            [
                'id'          => 2,
                'category_id' => 1,
                'title'       => 'Deleted',
                'slug'        => 'deleted',
                'author'      => 'Bai Junyao',
                'markdown'    => 'content',
                'html'        => 'content',
                'description' => 'describe',
                'keywords'    => 'test',
                'cover'       => '/images/default/article.png',
                'is_top'      => 0,
                'views'       => 222,
                'created_at'  => '2019-01-04 16:35:12',
                'updated_at'  => '2019-01-04 16:35:12',
                'deleted_at'  => '2019-01-04 16:35:12',
            ],
            [
                'id'          => 3,
                'category_id' => 1,
                'title'       => 'Welcome to laravel-bjyblog',
                'slug'        => 'welcome-to-laravel-bjyblog',
                'author'      => 'baijunyao',
                'markdown'    => '1. [Switch language](https://baijunyao.com/docs/laravel-bjyblog/en/OtherConfig.html)
![](/images/default/article.png)
2. [Clear test data](https://baijunyao.com/docs/laravel-bjyblog/en/ClearTestData.html)
3. [Upgrade version](https://baijunyao.com/docs/laravel-bjyblog/en/Upgrade.html)',
                'html'        => '<ol>
<li>
<a href="https://baijunyao.com/docs/laravel-bjyblog/en/OtherConfig.html">Switch language</a>
<img src="/images/default/article.png" alt="" />
</li>
<li>
<a href="https://baijunyao.com/docs/laravel-bjyblog/en/ClearTestData.html">Clear test data</a>
</li>
<li>
<a href="https://baijunyao.com/docs/laravel-bjyblog/en/Upgrade.html">Upgrade version</a>
</li>
</ol>
',
                'description' => 'welcome to laravel-bjyblog',
                'keywords'    => 'laravel-bjyblog',
                'cover'       => '/images/default/article.png',
                'is_top'      => 0,
                'views'       => 333,
                'created_at'  => '2019-10-05 14:35:12',
                'updated_at'  => '2019-10-05 14:35:12',
                'deleted_at'  => null,
            ],
        ]);
    }
}
