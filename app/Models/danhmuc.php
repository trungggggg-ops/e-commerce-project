<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class danhmuc extends Model
{
    use HasFactory;
    protected $table = 'danhmuc';
    protected $primaryKey = 'id';
   

    public function dienthoai($perPage = null,$search = null)
{
    // Tạo query builder
    // DB::enableQueryLog();
    $query = DB::table('sanpham')
        ->select('sanpham.*')
        ->join('danhmuc', 'sanpham.iddm', '=', 'danhmuc.id')
        ->where('sanpham.iddm', 2);
        // ->limit(4);
        
        if ($search) {
               $query->where('sanpham.name', 'like', '%' . $search . '%');
        }
        
        if (!empty($perPage)) {
            $dienthoai = $query->paginate($perPage)->appends(request()->query());
        } else {
            $dienthoai = $query->get();
        }
        // $queries = DB::getQueryLog();
        // dd($queries);
        
    return $dienthoai;
}

// public function giay($perPage = null,$search = null)
// {
//     $query = DB::table('sanpham')
//         ->select('sanpham.*')
//         ->join('danhmuc', 'sanpham.iddm', '=', 'danhmuc.id')
//         ->where('sanpham.iddm', 1);
//         // ->limit(4);

//         //perPage
//     if (!empty($perPage)) {
//         $giay = $query->paginate($perPage)->appends(request()->query());
//     } else {
//         $giay = $query->get();
//     }

//     if ($search) {
//         $query->where('sanpham.name', 'like', '%' . $search . '%');
//  }

//     return $giay;
// }

public function getDetails($id)
{
    return DB::select('SELECT * FROM sanpham WHERE id = ?', [$id]);
}
}
