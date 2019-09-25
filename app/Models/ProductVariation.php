<?php



namespace App\Models;
use App\Scoping\Scoper;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;


class ProductVariation extends Model
{

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

 
}
