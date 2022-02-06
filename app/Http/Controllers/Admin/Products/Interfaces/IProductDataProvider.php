<?php

namespace App\Http\Controllers\Admin\Products\Interfaces;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

interface IProductDataProvider
{
    public function getLatestProducts(int $num);
}
