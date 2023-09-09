<?php

namespace App\Http\Controllers\Market\Product\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductComment\StoreRequest;
use App\Models\ProductComment;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if ($data['rating'] <= 5 and $data['rating'] >= 1) {
            ProductComment::firstOrCreate($data);
        } else {
            return back();
        }
        return redirect()->route('market.product.show', $data['product_id']);
    }
}
