<?php

namespace Database\Seeders;

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            [
                'list' => 'Laravel',
                'slug' => 'Laravel',
                'created_at' => Carbon::now('asia/jakarta'),
                'updated_at' => Carbon::now('asia/jakarta'),
            ],
            [
                'list' => 'Codeigniter',
                'slug' => 'Codeigniter',
                'created_at' => Carbon::now('asia/jakarta'),
                'updated_at' => Carbon::now('asia/jakarta'),
            ],
            [
                'name' => 'Vue.js',
                'slug' => 'Vue.js',
                'created_at' => Carbon::now('asia/jakarta'),
                'updated_at' => Carbon::now('asia/jakarta'),
            ]
            ]);
    }
}
