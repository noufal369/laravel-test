<?php

namespace App\Http\Controllers;

use App\Services\ProductService as Service;

class ProductController extends Controller
{

    /**
     * @var Service Service
     */
    private $service;

    /**
     * ProductController constructor.
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        try {
            $data = $this->service->index();
            return view('products', $data);
        } catch (\Exception $exception){
            throw $exception;
        }
    }
}
