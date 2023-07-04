<?php

namespace Database\Seeders;

use App\Models\BlogTag;
use Illuminate\Database\Seeder;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name' => 'Education',
            ],
            [
                'name' => 'Life Style',
            ],
            [
                'name' => 'Pen',
            ],
            [
                'name' => 'Polish',
            ],
            [
                'name' => 'Publish',
            ],
            [
                'name' => 'Promote',
            ],
            [
                'name' => 'Collaborators',
            ],
            [
                'name' => 'Illuminators',
            ],
            [
                'name' => 'Trailblazers',
            ],
        ];
        foreach ($tags as $tag) {
            BlogTag::create($tag);
        }
    }
}
