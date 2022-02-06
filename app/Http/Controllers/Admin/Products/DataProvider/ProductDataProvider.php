<?php

namespace App\Http\Controllers\Admin\Products\DataProvider;

use App\Http\Controllers\Admin\Products\Entity\ProductDTO;
use App\Http\Controllers\Admin\Products\Interfaces\IProductDataProvider;
use App\Http\Controllers\Admin\Products\Interfaces\IProductRepository;

use Illuminate\Http\Request;

class ProductDataProvider implements IProductDataProvider
{
    /**
     * @var IProductRepository
     */
    private IProductRepository $repository;

    public function __construct(IProductRepository $repository) {

        $this->repository = $repository;
    }

    /**
     * @param int $num
     * 
     * @return ProductDTO[]
     */
    public function getLatestProducts(int $num): array {

        return $this->repository->getLatest($num);
    }
}
