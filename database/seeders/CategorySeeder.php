<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name'=> 'Web Development',
            'slug'=> 'web-development',
            'color'=> 'blue'
        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-design',
            'color'=> 'green'
        ]);

        Category::create([
            'name'=> 'UI UX',
            'slug'=> 'ui-ux',
            'color'=> 'red'
        ]);

        Category::create([
            'name'=> 'Machine Learning',
            'slug'=> 'machine-learning',
            'color'=> 'yellow'
        ]);

        Category::create([
            'name'=> 'Data Structure & Algorithm',
            'slug'=> 'data-structure-algorithm',
            'color'=> 'pink'
        ]);
    }
}
