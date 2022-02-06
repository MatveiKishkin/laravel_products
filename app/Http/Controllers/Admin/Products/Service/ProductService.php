<?php

namespace App\Http\Controllers\Admin\Products\Service;

use App\Http\Controllers\Admin\Products\Repository\ProductRepository;
use App\Http\Controllers\Admin\Products\DataProvider\ProductDataProvider;
use App\Http\Controllers\Admin\Products\Interfaces\IProductDataProvider;
use App\Http\Controllers\Admin\Products\Utils\CommonBody;
use App\Http\Controllers\Admin\Products\Utils\ListBody;


class ProductService
{

    public static function factory(): IProductDataProvider {

        $repository = new ProductRepository();

        return new ProductDataProvider($repository);
    }

    // private $productRepository;
    // private $productCreateBody;
    // private $productsListBody;

    // public function __construct(ProductRepository $productRepository,
    //                             CommonBody $productCreateBody,
    //                             ListBody $productsListBody) {

    //     $this->productRepository = $productRepository;
    //     $this->productCreateBody = $productCreateBody;
    //     $this->productsListBody = $productsListBody;

    // }

    // /**
    //  * Получение id товара
    //  * 
    //  * @param int $id
    //  * 
    //  * @return array $this->productCreateBody->create($product) //object
    //  * 
    //  */
    // public function getById(int $id): array {
    //     $product = $this->productRepository->get_by_id($id);

    //     return $this->productCreateBody->create($product);
    // }

    // /**
    //  * Получение последних товаров
    //  * 
    //  * @param int $numLatest
    //  * 
    //  * @return array $this->productsListBody->create($product) //array
    //  * 
    //  */
    // public function latest(int $numLatest):array {
    //     $product = $this->productRepository->get_latest($numLatest);
        
    //     return $this->productsListBody->create($product);
    // }
}
