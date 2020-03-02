<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'Laptop-1',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);Product::create([
            'name' => 'Laptop 2',
            'slug' => 'Laptop-2',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'Laptop-3',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'Laptop-4',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'Laptop-5',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'Laptop-6',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'Laptop-7',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'Laptop-8',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 9',
            'slug' => 'Laptop-9',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 149999,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
        Product::create([
            'name' => 'Laptop 10',
            'slug' => 'Laptop-10',
            'details' => '15 inch, 1TB SSD, 16GB RAM',
            'price' => 1499,
            'description' => 'The MacBook is carved out of solid aluminum, thus giving it a distinctive look and a grayish-white hue. The MacBook Air in particular has a thin and light design. There are two versions of the MacBook Air: the 11-inch, with an 11.6-inch screen and the 13-inch, with a 13.3-inch screen.',
        ]);
    }
}