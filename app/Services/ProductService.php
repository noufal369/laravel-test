<?php


namespace App\Services;

use App\Models\DownloadSpeedGreaterThan5000AndDialUp;
use App\Models\Product;
use App\Models\UploadSpeedLessThan500AndFiberAndStaticIp;

class ProductService
{

    /**
     * @return UploadSpeedLessThan500AndFiberAndStaticIp[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $product['categoryOne'] = DownloadSpeedGreaterThan5000AndDialUp::all();
        $product['categoryTwo'] = UploadSpeedLessThan500AndFiberAndStaticIp::all();

        return $product;
    }

    /**
     * @return Product
     * @throws \Exception
     */
    public function store()
    {
        try {
            $product = new Product();
            $product->name = 'Product Name';
            $product->upload_speed = 10;
            $product->download_speed = 100;
            $product->technology = 'dialup';
            $product->static_ip = true;
            $product->save();
        } catch (\Exception $exception) {
            throw $exception;
        }
        return $product;
    }
}
