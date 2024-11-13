<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
class AdminController extends Controller

{
    protected $admin;
    protected $cart;

    public function __construct()
    {
        $this->admin = new Admin();
        $this->cart = new Cart();
    }
    public function index()
    {
        return view('admin.index');
    }

    public function product()
    {
        $giay = $this->admin->giay(4);
        $dienthoai = $this->admin->dienthoai(4);
        return view('admin.product',compact('giay','dienthoai'));
    }

    public function postproduct(AdminRequest $request)
    {
        // dd($request);

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/users/img'), $imageName);
    
        }
        // dd($request->all());
        $dataInsert = [
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'img' => 'assets/users/img/'.$imageName, 
            'iddm'=>$request->category,
            'created_at'=> date('Y-m-d H:i:s')
        ];
        $this->admin->postproduct($dataInsert);
        return redirect()->route('admin.product')->with('msg','Thêm sản phẩm thành công');
    }

    public function users()
    {
        // vậy có 1 biến card nào đó trùng tên rồi
        $data = $this->cart->get_cart();
        // foreach ($cart as $item) {
        //     var_dump($item->id);
        // }
      
        // $id_user = $data['id_user'];
        // dd($data);
        // hình như nó k nhận đượcb iến cart anh zai
        return view('admin.users',compact('data'));
    }

    
    public function edit($id)
    {
        $data =  $this->admin->edit_product($id);
        // dd($data);
        return view('admin.updateProduct',compact('data'));

    }

    public function updateProduct_post(AdminRequest $request,$id)
    {
        $id = $request->id;
    
        // dd($request->all());
        $dataUpdate = [
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'iddm'=>$request->category,
            'created_at'=> date('Y-m-d H:i:s')
        ];

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/users/img'), $imageName);
    
            $dataUpdate['img'] = 'assets/users/img/' . $imageName;
        }

        $this->admin->update_product($dataUpdate,$id);
        
        return back()->with('msg', 'Cập nhật sản phẩm thành công');
    }



    public function delete($id)
{
        if (isset($id)) {
            $product = $this->admin->get_product_by_id($id);

            if ($product) {
                $imagePath = public_path($product->img);

                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }

                // Xoá sản phẩm từ cơ sở dữ liệu
                $this->admin->delete_product($id);
            }
        }

    return redirect()->back()->with('msg', 'Xoá sản phẩm thành công');
}



    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        Session::forget('email');

        Auth::logout();
        return redirect()->route('users.index');
    }

        public function checklogin(Request $request)
        {
            // dd($request->all());
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if (Auth::user()->role === 0) {
                    return redirect()->route('admin.index');
                } else {
                    Auth::logout();
                    return redirect()->route('login')->with('error', 'Bạn không đủ quyền để vào admin');
                }
            }

            return redirect()->route('login')->with('error', 'Email hoặc mật khẩu không đúng');
        }


}
