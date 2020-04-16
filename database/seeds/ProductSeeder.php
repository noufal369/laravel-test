<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $uploadSpeeds = [100, 200, 300, 400, 500, 600, 700, 800];
    private $downloadSpeeds = [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000];
    private $technology = ['fibre', 'dialup'];
    private $bit = [true, false];

    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Product - ' . $i,
                'upload_speed' => $this->uploadSpeeds[rand(0, 7)],
                'download_speed' => $this->downloadSpeeds[rand(0, 7)],
                'technology' => $this->technology[rand(0, 1)],
                'static_ip' => $this->bit[rand(0, 1)],
            ]);

        }

    }
}
