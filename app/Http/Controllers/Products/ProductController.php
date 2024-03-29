<?php

namespace App\Http\Controllers\Products;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductResource;
use App\Http\Controllers\Controller;
use App\Scoping\Scopes\CategoryScope;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::withScopes($this->scopes())->paginate(10);

    	return ProductIndexResource::collection($products);
    }
    public function show(Product $product)
    {
    
    	return new ProductResource(
            $product
        );
    }
    protected function scopes()
    {
    	return [
    		'category' => new CategoryScope()
    	];
    }

}
