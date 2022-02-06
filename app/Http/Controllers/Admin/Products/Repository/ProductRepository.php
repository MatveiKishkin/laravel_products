<?php

namespace App\Http\Controllers\Admin\Products\Repository;

use App\Models\Products\Products;
use App\Http\Controllers\Admin\Products\Interfaces\IProductRepository;
use App\Http\Controllers\Admin\Products\Entity\ProductDTO;

/**
 * 
 * В классе ProductRepository вызывается класс модели Products,
 * чтобы использовать ее методы и получать данные из базы.
 *
 */
class ProductRepository implements IProductRepository
{
    /**
     * Получение id товара из модели Products
     * 
     * @param int $id
     * 
     * @return Products Products::findOrFail($id)
     * 
     */
    public function get_by_id(int $id): Products {

        return Products::findOrFail($id);
    }

    /**
     * Получение n последних товаров из модели Products
     * 
     * @param int $count
     * 
     * @return Products Products::latest()->pagination($count)
     * 
     */
    public function get_latest(int $count) {

        return Products::latest()->paginate($count); // paginate необходим для формирования страниц
    }

    /**
     * @param int $count
     * 
     * @return ProductDTO[]
     */
    public function getLatest(int $count): array {

        $products = Products::latest()->paginate($count);
        $data = [];

        foreach ($products as $product) {
            $itemProduct = new ProductDTO($product);
            $data[] = $itemProduct;
        }

        return $data;
    }
}
