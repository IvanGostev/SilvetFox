<?php

namespace App\Http\Controllers\Market\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\ProductFavorite;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ShowController extends Controller
{
  public function __invoke(Product $product)
  {
      if (Product::where('category_id', $product->category_id)->count() >= 3) {
          $products =  Product::where('category_id', $product->category_id)->where('status', '2')->take(3)->get();
      } else {
          $products =  Product::where('category_id', $product->category_id)->where('status', '2')->get();
      }
      $countComments = ProductComment::where('product_id', $product->id)->count();
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
      function rating(array $arr, $count)
      {
          if ($count != 0) {
              return ((5 * $arr['5']) + (4 * $arr['4']) + (3 * $arr['3']) + (2 * $arr['2']) + (1 * $arr['1'])) / $count;
          }
          return 0;

      }

      $rating = rating(['5' => $star5, '4' => $star4, '3' => $star3, '2' => $star2, '1' => $star1], $count);
        if ($rating >= 4.50)  {
            $rating =   '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                            </div>';
        } elseif ($rating >= 3.50) {
            $rating =   '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <span><i class="twi-star"></i></span>
                            </div>';
        } elseif($rating >= 2.50) {
            $rating =   '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <span><i class="twi-star"></i></span>
                                <span><i class="twi-star"></i></span>
                            </div>';
        } elseif ($rating >= 1.50) {
            $rating =   '<div class="star-rating">
                                <i class="twi-star"></i>
                                <i class="twi-star"></i>
                                <span><i class="twi-star"></i></span>
                                <span><i class="twi-star"></i></span>
                                <span><i class="twi-star"></i></span>
                            </div>';
        } else {
            $rating =   '<div class="star-rating">
                                <i class="twi-star"></i>
                                <span><i class="twi-star"></i></span>
                                <span><i class="twi-star"></i></span>
                                <span><i class="twi-star"></i></span>
                                <span><i class="twi-star"></i></span>
                            </div>';
        }
        $images = ProductImage::where('product_id', $product->id)->get();
        $regions = explode(',', $product->regions);
        $favorite = ProductFavorite::where('user_id', auth()->user()->id)->where('product_id', $product->id)->count() > 0;
      return view('market.product.show', compact('product', 'products', 'regions', 'countComments', 'rating', 'images', 'favorite'));
  }
}

