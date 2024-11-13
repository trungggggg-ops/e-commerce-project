<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderNotification;
class CartController extends Controller
{


    public function index(Cart $cart)
    {
        // dd($cart->list());
        // Session::flush();
        // $cartItems = $cart->list();
        $bankAccount = '1903 9542 640019';
        $bankName = 'Techcomebank';
        // $amount = 100000;
        // $content = "Bank: $bankName\nAccount: $bankAccount\nAmount: $amount";
        $content = "Bank: $bankName\nAccount: $bankAccount";

        $qrCode = QrCode::size(300)->generate($content);
        return view('users.tinhtien', compact('cart','qrCode'));
    }
    public function add(Request $request, Cart $cart)
    {
        $product = sanpham::find($request->id);
        $quantity = $request->quantity;
        $cart->add($product, $quantity);
        // dd($request->all());

        return redirect()->route('users.index');
    }





    public function deleteCartItem($id)
    {
        // Giả sử bạn đang lưu giỏ hàng trong session dưới dạng mảng
        $cart = Session::get('cart', []);

        // Tìm và xóa phần tử theo ID
        if (isset($cart[$id])) {
            unset($cart[$id]);
            // Cập nhật lại giỏ hàng trong session
            Session::put('cart', $cart);
        }

        // Nếu giỏ hàng rỗng, xóa session
        if (empty($cart)) {
            Session::forget('cart');
        }

        return redirect()->back()->with('success', 'Mặt hàng đã được xóa.');
    }

    public function deleteAll()
    {
        Session::forget('cart');
        return back();
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();
        $cart = Session::get('cart', []);
        // dd($user->id);
        $quantities = $request->input('quantity', []);
    
        foreach ($cart as $key => $item) {
            if (is_array($item) && isset($item['id']) && isset($quantities[$item['id']])) {
                $id = $item['id'];
                if (isset($quantities[$id])) {
                    $item['quantity'] = $quantities[$id];
                    $item['thanhtien'] = $item['price'] * $item['quantity'];
                }
                $cart[$key] = $item;
            }
        }
    
        // Lưu tổng thành tiền vào session
        // dd($request->totalPrice);
        Session::put('cart', $cart);
        foreach ($cart as $item) {
            if(Auth::check()){
                $user_id = Auth::user()->id;
                $user_name = Auth::user()->name;
            }
            if (is_array($item)) {
                $id = $item['id'];
                $name = $item['name'];
                $price = $item['price'];
                $img = $item['img'];
                $quantity = $item['quantity'];
                $thanhtien = $item['thanhtien'];
                $dataInsert = [
                    'id_user'=>$user_id,
                    'user_name'=>$user_name,
                    'idpro' => $id,
                    'name' => $name,
                    'price' => $price,
                    'img' => $img,
                    'soluong' => $quantity,
                    'thanhtien' => $thanhtien,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
    
               $tbCart = DB::table('carts')->insert($dataInsert);
            }
            $this->sendOrderNotificationEmail($user_name);
        }
        
        foreach ($cart as $item) {
            if(Auth::check()){
                $user_id = Auth::user()->id;
            }
            // dd($user_id);1
            if (is_array($item)) {
                $id = $item['id'];
                $name = $item['name'];
                $price = $item['price'];
                $img = $item['img'];
                $quantity = $item['quantity'];
                $thanhtien = $item['thanhtien'];
                $dataInsert = [
                    'mahd' => $tbCart,
                    'iduser'=>$user_id,
                    'tongthanhtoan' => $thanhtien,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
    
                DB::table('bill')->insert($dataInsert);
            }
        }
        Session::forget('cart');
        return redirect()->back();
    
    }
    protected function sendOrderNotificationEmail($userName)
{
    Mail::to('daicmngia@gmail.com')->send(new OrderNotification($userName));
}
}
