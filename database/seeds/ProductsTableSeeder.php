<?php

use Illuminate\Database\Seeder;
use App\Product; //model

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dati_prodotti = [
            [ 'name' => 'pen',
              'description' => 'color red',
              'price' => 2.55
            ],
            [ 'name' => 'pencil',
              'description' => 'color dark mate',
              'price' => 1.05
            ],
            [ 'name' => 'stickers',
              'description' => 'heart color pink',
              'price' => 3.99
            ],
            [ 'name' => 'paper',
              'description' => '50 units color yellow',
              'price' => 4.00
            ],
        ];
        foreach ($dati_prodotti as $dati_prodotto) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $dati_prodotto['name'];
            $nuovo_prodotto->description = $dati_prodotto['description'];
            $nuovo_prodotto->price = $dati_prodotto['price'];
            $nuovo_prodotto->save();

        }
    }
}
