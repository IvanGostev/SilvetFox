<?php

namespace App\Http\Controllers\Market\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;
use Illuminate\Http\Request;

class IndexAllController extends Controller
{
    public function __invoke()
    {
        $stores = Store::where('status', 2)->where('active', 1)->paginate(12);

        foreach ($stores as $store) {
            $star5 = 0;
            $star4 = 0;
            $star3 = 0;
            $star2 = 0;
            $star1 = 0;
            $count = 0;
            $products = Product::where('store_id', $store->id)->get();
            foreach ($products as $product) {

                foreach ($product->comments as $comment) {
                    $comment->rating == 5 ? $star5++ : 0;
                    $comment->rating == 4 ? $star4++ : 0;
                    $comment->rating == 3 ? $star3++ : 0;
                    $comment->rating == 2 ? $star2++ : 0;
                    $comment->rating == 1 ? $star1++ : 0;
                }
                $count += count($product->comments);

            }


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
            $store['rating'] = $rating;
        }

        return view('market.store.index', compact('stores'));
    }
}
