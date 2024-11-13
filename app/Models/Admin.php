<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function giay($perPage = null)
    {
        $query = DB::table('sanpham')
            ->select('sanpham.*')
            ->join('danhmuc', 'sanpham.iddm', '=', 'danhmuc.id')
            ->where('sanpham.iddm', 1)
            ->orderBy('sanpham.created_at', 'desc');

        // ->limit(4);

        // if ($search) {
        //   $query->where('sanpham.name', 'like', '%' . $search . '%');
        // }

        //perPage
        if (!empty($perPage)) {
            $giay = $query->paginate($perPage)->appends(request()->query());
        } else {
            $giay = $query->get();
        }



        return $giay;
    }

    public function dienthoai($perPage = null)
    {
        $query = DB::table('sanpham')
            ->select('sanpham.*')
            ->join('danhmuc', 'sanpham.iddm', '=', 'danhmuc.id')
            ->where('sanpham.iddm', 2)
            ->orderBy('sanpham.created_at', 'desc');
        // ->limit(4);

        // if ($search) {
        //   $query->where('sanpham.name', 'like', '%' . $search . '%');
        // }

        if (!empty($perPage)) {
            $dienthoai = $query->paginate($perPage)->appends(request()->query());
        } else {
            $dienthoai = $query->get();
        }
        // $queries = DB::getQueryLog();
        // dd($queries);

        return $dienthoai;
    }

    //insert Product
    public function postproduct($dataInsert)
    {
        return    DB::table('sanpham')->insert($dataInsert);
    }
    //delete Product
    public function delete_product($id)
    {
        return DB::table('sanpham')->where('id',$id)->delete();
    }


    //updateProduct
    public function edit_product($id)
    {
        return DB::table('sanpham')->where('id',$id)->first();

    }

    public function update_product($dataUpdate,$id)
    {
        return DB::table('sanpham')->where('id',$id)->update($dataUpdate);

    }

    public function logout()
    {
        
    }

    public function get_product_by_id($id)
{
    return DB::table('sanpham')->where('id', $id)->first();
}
    


}
