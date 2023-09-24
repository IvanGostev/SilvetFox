<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Chat;
use App\Models\History;
use App\Models\Message;
use App\Models\NewMessage;
use App\Models\Order;
use App\Models\PostComment;
use App\Models\Product;
use App\Models\ProductComment;
use App\Models\ProductImage;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\User;
use App\Models\WithdrawalForm;

class DestroyController extends Controller
{
    public function __invoke(User $user)
    {
        $data = Chat::where('first_user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = Chat::where('second_user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = History::where('user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = Message::where('first_user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = Message::where('second_user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = NewMessage::where('first_user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = NewMessage::where('second_user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = PostComment::where('user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = ProductComment::where('user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        if (Store::where('user_id', $user->id)->count() > 0) {
            $store = Store::where('user_id', $user->id)->first();
            $data = Product::where('store_id', $store->id)->get();
            foreach ($data as $temp ) {
                if ( ProductImage::where('product_id', $temp->id)->count() > 0) {
                    $images = ProductImage::where('product_id', $temp->id)->get();
                    foreach ($images as $image) {
                        $image->delete();
                    }
                }
                $temp->delete();
            }
            $store->delete();
        }
        $data = ReplenishmentForm::where('user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }

        $data = WithdrawalForm::where('user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $data = Banner::where('user_id', $user->id)->get();
        foreach ($data as $temp ) {
            $temp->delete();
        }
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
