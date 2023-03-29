<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Background;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $colours = ["#52003a", "#ff6630", "#e9c89e"];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!Background::count()) {
            $this->populateColours();
        }
    }
    public function populateColours()
    {
        foreach ($this->colours as $colour) {
            DB::table('backgrounds')->insert([
                "colour" => $colour
            ]);
        }
    }
}
