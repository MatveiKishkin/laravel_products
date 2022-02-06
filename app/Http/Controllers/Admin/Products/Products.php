<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Products\Products as ProductsModel;
use App\Http\Controllers\Admin\Products\Service\ProductService;

use Illuminate\Http\Request;

class Products extends Controller
{

    private $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function show_product() {
        $products = ProductsModel::latest()->get();

        return view('admin.products.add', compact('products'));
    }

    public function add_product() {
        $products = new ProductsModel();

        $products->title = 'Продукт';
        $products->slug = 'product';
        $products->name = 'Название продукта';
        $products->content = 'Описание';

        $products->save();

        return 'Запись сохранена';
    }

    public function get_product(Request $request, $id) {
        $product = $this->productService->getById($id);
        
        
        return view('admin.products.add', compact('product'));
    }
}
