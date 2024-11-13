<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }

    
    public function list()
    {
        return $this->items;
    }

    public function add($product, $quantity = 1)
    {
        // dd($product);
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'img' => $product->img,
            'quantity' => $quantity,
            'thanhtien' => $quantity * $product->price
        ];

        $this->items[$product->id] = $item;
        session(['cart' => $this->items]);
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        if (is_array($this->items)) {
            foreach ($this->items as $item) {
                if (is_array($item) && isset($item['price']) && isset($item['quantity'])) {
                    $totalPrice += $item['price'] * $item['quantity'];
                }
            }
        }
        return $totalPrice;
    }

    public function getQuantity()
    {
        $total = 0;
        if (is_array($this->items)) {
            foreach ($this->items as $item) {
                if (is_array($item) && isset($item['quantity'])) {
                    $total += $item['quantity'];
                }
            }
        }
        return $total;
    }



    public function addCart($dataInsert)
    {
        DB::table('cart')->insert($dataInsert);
    }

        public function get_cart()
    {
        return Cart::get();

        /// tui bị lôi là ko lấy đc dữ liệu từ dtb về á a zai
    }
}
