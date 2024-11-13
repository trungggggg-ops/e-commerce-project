<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index(Request $request)
    {
        // $data = [
        //     [
        //         'id' => 1,
        //         'name' => 'Product 1',
        //         'description' => 'Description of product 1',
        //         'price' => 19.99,
        //         'category_id' => 1
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Product 2',
        //         'description' => 'Description of product 2',
        //         'price' => 29.99,
        //         'category_id' => 2
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Product 3',
        //         'description' => 'Description of product 3',
        //         'price' => 39.99,
        //         'category_id' => 1
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'Product 4',
        //         'description' => 'Description of product 4',
        //         'price' => 49.99,
        //         'category_id' => 2
        //     ],
        //     [
        //         'id' => 5,
        //         'name' => 'Product 5',
        //         'description' => 'Description of product 5',
        //         'price' => 59.99,
        //         'category_id' => 1
        //     ],
        //     [
        //         'id' => 6,
        //         'name' => 'Product 6',
        //         'description' => 'Description of product 6',
        //         'price' => 69.99,
        //         'category_id' => 2
        //     ]
        // ];
        // foreach ($data as $item) {
        //     Product::create($item);
        // }

        $data = DB::table('sanpham')->get()->toArray();
   

        return response()->json(['products' => $data]);
    }

    public function product()
    {
        $data = $this->product->getProduct();
        // dd($data);
        return view('api.product',compact('data'));
    }

    
    public function deleteProduct($id)
    {
        if(isset($id))
        {
           $this->product->delete_product($id);

        }
        return redirect()->back();
    }


    public function edit($id)
    {
        $data =  $this->product->edit_product($id);

        return view('api.edit',compact('data'));

    }

    public function updateProduct_post(Request $request,$id)
    {
        $id = $request->id;
    
        // dd($request->all());
       

        $dataUpdate = [
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'category_id'=>$request->category,
            'created_at'=> date('Y-m-d H:i:s')
        ];

        $this->product->update_product($dataUpdate,$id);
        
        return back()->with('msg', 'Cập nhật sản phẩm thành công');
    }

}
