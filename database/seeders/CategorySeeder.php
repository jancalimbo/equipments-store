<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        $categories = [
            [
                'category' => 'Adventure', 
                'remarks' => 'A'
            ],
            [
                'category' => 'Business',
                'remarks' => 'B'
            ],
            [
                'category' => 'Comedy',
                'remarks' => 'C'
            ],
            [
                'category' => 'Drama',
                'remarks' => 'D'
            ],
            [
                'category' => 'Horror',
                'remarks' => 'H'
            ],
            [
                'category' => 'Politics',
                'remarks' => 'P'
            ],
            [
                'category' => 'Religion',
                'remarks' => 'R'
            ],
            [
                'category' => 'Romance',
                'remarks' => 'Rom'
            ]

        ];

        foreach($categories as $category) {
            Category::create($category);
        }
    }
}
