<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id'
    ];

    public function getProduct()
    {
        return DB::table('products')->get();
    }

    public function delete_product($id)
    {
        return DB::table('products')->where('id',$id)->delete();
    }
    
    public function edit_product($id)
    {
        return Product::find($id);
    }

    public function update_product($dataUpdate,$id)
    {
        return DB::table('products')->where('id',$id)->update($dataUpdate);

    }
}
