<?php

namespace App\Http\Controllers\Market\Product\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductComment\ReplenishmentRequest;
use App\Models\ProductComment;
use PhpParser\Node\Stmt\Else_;

class StoreController extends Controller
{
    public function __invoke(ReplenishmentRequest $request)
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
