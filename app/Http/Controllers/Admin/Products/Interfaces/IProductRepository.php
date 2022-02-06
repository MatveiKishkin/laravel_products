<?php

namespace App\Http\Controllers\Admin\Products\Interfaces;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

interface IProductRepository
{
    public function getLatest(int $count);
}
