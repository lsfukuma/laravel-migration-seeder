<?php

use Illuminate\Database\Seeder;
use App\Product; //model
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dati_prodotti = config('products');
        foreach ($dati_prodotti as $dati_prodotto) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $dati_prodotto['name'];
            $nuovo_prodotto->description = $dati_prodotto['description'];
            $nuovo_prodotto->price = $dati_prodotto['price'];
            $nuovo_prodotto->save();
        }

        //compilazione con Faker
        for ($i=0; $i <10; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $faker->word;
            $nuovo_prodotto->description = $faker->sentence(4);
            $nuovo_prodotto->price = $faker->randomFloat(2 ,0 , 99);
            $nuovo_prodotto->save();
        }
    }
}
