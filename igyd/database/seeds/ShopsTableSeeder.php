<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = $this->getShops();
        foreach ($shops as $shop) {
            factory(App\Shop::class)->create([
                'name' => $shop['name'],
                'img_src' => $shop['img_src']
            ]);
        }
    }

    private function getShops()
    {
        $shops = array(
            ['name' => 'Coffee Project', 'img_src' => '~/images/shops/cp/cp_bg.jpg'],
            ['name' => 'Dunkin\' Donuts', 'img_src' => '~/images/shops/dd/dd_bg.jpg'],
            ['name' => 'J.CO Donuts & Coffee', 'img_src' => '~/images/shops/jco/jco_bg.jpg'],
            ['name' => 'Starbucks', 'img_src' => '~/images/shops/sb/sb_bg.jpg']
        );

        return $shops;
    }
}
