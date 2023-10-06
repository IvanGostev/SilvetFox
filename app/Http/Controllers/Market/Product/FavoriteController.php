<?php

namespace App\Http\Controllers\Market\Product;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductFavorite;

class FavoriteController extends Controller
{
    public function __invoke(Product $product)
    {
        if (ProductFavorite::where('user_id', auth()->user()->id)->where('product_id', $product->id)->count() > 0) {
            ProductFavorite::where('user_id', auth()->user()->id)->where('product_id', $product->id)->first()->delete();
        } else {
            ProductFavorite::create(['user_id' => auth()->user()->id, 'product_id' => $product->id]);
        }
        return redirect()->route('market.product.show', $product->id);
    }
}
