<?php

namespace App\Http\Controllers\Profile\Product;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductFavorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __invoke()
    {
        $products_favorite = ProductFavorite::where('user_id', auth()->user()->id)->get();
        $products = [];
        foreach ($products_favorite as $favorite) {
            $products[] = Product::where('id', $favorite->product_id)->first();
        }

        $categories = ProductCategory::all();
        $banners = Banner::where('status', 2)->inRandomOrder()->limit(10)->get();
        foreach ($categories as $category) {
            $category['count'] = Product::where('active', 1)->where('status', 2)->where('category_id', $category->id)->count();
        }
        foreach ($products as $product) {
            $product['regions'] = explode(',', $product->regions);


            $star5 = 0;
            $star4 = 0;
            $star3 = 0;
            $star2 = 0;
            $star1 = 0;
            foreach ($product->comments as $comment) {
                $comment->rating == 5 ? $star5++ : 0;
                $comment->rating == 4 ? $star4++ : 0;
                $comment->rating == 3 ? $star3++ : 0;
                $comment->rating == 2 ? $star2++ : 0;
                $comment->rating == 1 ? $star1++ : 0;
            }
            $count = count($product->comments);


            $rating = rating(['5' => $star5, '4' => $star4, '3' => $star3, '2' => $star2, '1' => $star1], $count);
            if ($rating >= 4.50) {
                $rating = '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                            </div>';
            } elseif ($rating >= 3.50) {
                $rating = '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                            </div>';
            } elseif ($rating >= 2.50) {
                $rating = '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>

                            </div>';
            } elseif ($rating >= 1.50) {
                $rating = '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>

                            </div>';
            } else {
                $rating = '<div class="star-rating">
                                <i class="twi-star"></i>

                            </div>';
            }
            $product['rating'] = $rating;
        }
        return view('profile.product.favorite', compact('products', 'categories', 'banners'));
    }
}
