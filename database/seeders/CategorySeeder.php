<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    private $categories = [
        [
            "id" => 1,
            "name" => "Uomo"
        ],
        [
            "id" => 2,
            "name" => "Donna"
        ],
        [
            "id" => 3,
            "name" => "Bambino"
        ],
    ];    
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->categories as $category)
        {
            Category::create([
                "id" => $category['id'],
                "name" => $category['name']
            ]);
        }
    }
}

