<?php

use Illuminate\Database\Seeder;

class DrinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drinks = $this->getDrinks();
        foreach ($drinks as $drink) {
            factory(App\Drink::class)->create([
                'name' => $drink['name'],
                'img_src' => $drink['img_src'],
                'shop_id' => $drink['shop_id']
            ]);
        }
    }

    private function getDrinks()
    {
        $drinks = array(
            ['name' => 'Candied Orange Mocha Swirl', 'img_src' => '/img/drinks/cp/Candied Orange Mocha Swirl.jpg', 'shop_id' => 1],
            ['name' => 'Hazelnut Latte (Hot)', 'img_src' => '/img/drinks/cp/Hazelnut Latte (Hot).jpg', 'shop_id' => 1],
            ['name' => 'Hot Chai Tea Latte', 'img_src' => '/img/drinks/cp/Hot Chai Tea Latte.jpg', 'shop_id' => 1],
            ['name' => 'Ice blended Chocolate Cookie', 'img_src' => '/img/drinks/cp/Ice blended Chocolate Cookie.jpg', 'shop_id' => 1],
            ['name' => 'Iced Chai Tea Latte', 'img_src' => '/img/drinks/cp/Iced Chai Tea Latte.jpg', 'shop_id' => 1],
            ['name' => 'Praline Crunch Latte', 'img_src' => '/img/drinks/cp/Praline Crunch Latte.jpg', 'shop_id' => 1],
            ['name' => 'Vanilla Pumpkin Spice', 'img_src' => '/img/drinks/cp/Vanilla Pumpkin Spice.jpg', 'shop_id' => 1],
            ['name' => 'Apple-Coolatta', 'img_src' => '/img/drinks/dd/Apple-Coolatta.png', 'shop_id' => 2],
            ['name' => 'Caffe Mocha (Hot)', 'img_src' => '/img/drinks/dd/Caffe Mocha (Hot).png', 'shop_id' => 2],
            ['name' => 'Dark Dunkaccino', 'img_src' => '/img/drinks/dd/Dark Dunkaccino.jpg', 'shop_id' => 2],
            ['name' => 'Dark Roast (Hot', 'img_src' => '/img/drinks/dd/Dark Roast (Hot.png', 'shop_id' => 2],
            ['name' => 'Iced-Americano', 'img_src' => '/img/drinks/dd/Iced-Americano.png', 'shop_id' => 2],
            ['name' => 'Iced-Latte', 'img_src' => '/img/drinks/dd/Iced-Latte.png', 'shop_id' => 2],
            ['name' => 'Roasted Coffee (Hot)', 'img_src' => '/img/drinks/dd/Roasted Coffee (Hot).png', 'shop_id' => 2],
            ['name' => 'Strawberry-Coolatta', 'img_src' => '/img/drinks/dd/Strawberry-Coolatta.png', 'shop_id' => 2],
            ['name' => 'Avocado Frappe', 'img_src' => '/img/drinks/jco/Avocado Frappe.jpg', 'shop_id' => 3],
            ['name' => 'Blueberry Yogurt', 'img_src' => '/img/drinks/jco/Blueberry Yogurt.jpg', 'shop_id' => 3],
            ['name' => 'Caramel Frappe', 'img_src' => '/img/drinks/jco/Caramel Frappe.jpg', 'shop_id' => 3],
            ['name' => 'Choco Forest Frappe', 'img_src' => '/img/drinks/jco/Choco Forest Frappe.jpg', 'shop_id' => 3],
            ['name' => 'Chocomint Frappe', 'img_src' => '/img/drinks/jco/Chocomint Frappe.jpg', 'shop_id' => 3],
            ['name' => 'Hazelnut Coffee', 'img_src' => '/img/drinks/jco/Hazelnut Coffee.jpg', 'shop_id' => 3],
            ['name' => 'Hot Chocolate', 'img_src' => '/img/drinks/jco/Hot Chocolate.jpg', 'shop_id' => 3],
            ['name' => 'Jcocino Frappe', 'img_src' => '/img/drinks/jco/Jcocino Frappe.jpg', 'shop_id' => 3],
            ['name' => 'Jcocino', 'img_src' => '/img/drinks/jco/Jcocino.jpg', 'shop_id' => 3],
            ['name' => 'Machiato', 'img_src' => '/img/drinks/jco/Machiato.jpg', 'shop_id' => 3],
            ['name' => 'Almond Protein Blended Cold Brew', 'img_src' => '/img/drinks/sb/Almond Protein Blended Cold Brew.jpg', 'shop_id' => 4],
            ['name' => 'Cacao Protein Blended Cold Brew', 'img_src' => '/img/drinks/sb/Cacao Protein Blended Cold Brew.jpg', 'shop_id' => 4],
            ['name' => 'Coffee Frappuccino Blended Coffee', 'img_src' => '/img/drinks/sb/Coffee Frappuccino Blended Coffee.jpg', 'shop_id' => 4],
            ['name' => 'Double Chocolaty Chip Crème Frappuccino Blended Crème', 'img_src' => '/img/drinks/sb/Double Chocolaty Chip Crème Frappuccino Blended Crème.jpg', 'shop_id' => 4],
            ['name' => 'Java Chip Frappuccino Blended Coffee', 'img_src' => '/img/drinks/sb/Java Chip Frappuccino Blended Coffee.jpg', 'shop_id' => 4],
            ['name' => 'Peppermint Mocha Frappuccino Blended Crème', 'img_src' => '/img/drinks/sb/Peppermint Mocha Frappuccino Blended Crème.jpg', 'shop_id' => 4],
            ['name' => 'Toasted White Chocolate Cocoa', 'img_src' => '/img/drinks/sb/Toasted White Chocolate Cocoa.jpg', 'shop_id' => 4],
            ['name' => 'Toasted White Chocolate Crème Frappuccino', 'img_src' => '/img/drinks/sb/Toasted White Chocolate Crème Frappuccino.jpg', 'shop_id' => 4],
        );

        return $drinks;
    }
}
