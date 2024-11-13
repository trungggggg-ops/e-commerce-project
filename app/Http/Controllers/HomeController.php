<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\sanpham;
use App\Models\danhmuc;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    protected $email = [];

    protected $sanpham;
    protected $danhmuc;
    protected $user;
    const _PER_PAGE = 3;

    public function __construct(User $user, DanhMuc $danhmuc, SanPham $sanpham)
    {
        $this->email = session('email') ? session('email') : [];
        $this->danhmuc = $danhmuc;
        $this->sanpham = $sanpham;
        $this->user = $user;
    }

    public function index()
    {
        // if(session()->has('email')) {
        //     $email = session('email');

        // } 

        // if(isset(session()->has('email'))){

        // }
        // dd($email);
        $giay = $this->sanpham->giay();
        $dienthoai = $this->sanpham->dienthoai();
        // dd(Auth::user());
        return view('users.home', compact('giay', 'dienthoai'));
    }

    public function gioiThieu()
    {
        return view('users.gioithieu');
    }



    public function tinhtien($id)
    {
        return view('users.tinhtien');
    }

    public function login()
    {
        return view('users.login');
    }

    public function postlogin(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        // dd($request->all());
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $request->session()->regenerate();
            // $request->session()->put('email', $email);
            // dd($email);
            return redirect()->route('users.trangchu')->with('success', 'dang nhap thanh cong');
        } else {
            return redirect()->route('users.login')->with('errors', 'Email hoặc mật khẩu không đúng');
        }
    }
    public function register()
    {
        return view('users.register');
    }

    public function postregister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'username' => 'required'
        ], [
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'username.required' => 'Vui lòng nhập tên đăng nhập.'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $hashedPassword = Hash::make($request->password);
        $dataRegister = [
            'name' => $request->username,
            'password' => $hashedPassword,
            'email' => $request->email,
            'role' => '1',
            'created_at' => now()
        ];
    
        $this->user->register($dataRegister);
    
        return redirect()->route('users.register')->with('success', 'Đăng ký thành công');
    }
    







    public function trangChiTietGiay(Request $request)
    {
        if (!empty($request->id)) {
            $details = $this->danhmuc->getDetails($request->id);

            return view('users.giay', compact('details'));
        }
        return redirect()->back()->with('error', 'Không có ID được cung cấp.');
    }


    public function tintuc()
    {
        return view('users.tintuc');
    }

    public function giay(Request $request)
    {
        return view('users.giay');
    }
    public function postgiay(Request $request)
    {
        $giay = [
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'img' => $request->input('img'),
        ];

        // dd($giay);

        return view('users.tinhtien', compact('giay'));
    }

    public function dienthoai()
    {
        return view('users.dienthoai');
    }


    // trang danh muc giay + dien thoat
    public function sanpham(Request $request)
    {
        // dd($request->input('search'));
        $search = $request->input('search');
        $dienthoai = $this->sanpham->dienthoai(4, $search);
        // $dienthoai = $this->sanpham->dienthoai();

        return view('users.sanpham', compact('dienthoai'));
    }

    public function danhmucgiay(Request $request)
    {
        // dd($request->input('search'));

        $search = $request->input('search');
        // dd($search);
        $giay = $this->sanpham->giay(4, $search);

        return view('users.danhmucgiay', compact('giay'));
    }

    public function logout()
    {
        Session::forget('email');

        Auth::logout();
        return redirect()->route('users.login');
    }
}
