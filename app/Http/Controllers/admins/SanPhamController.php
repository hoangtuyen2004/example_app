<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use App\Mail\MailConfirm;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $sanphams;
    public function __construct() {
        // $this->middleware('auth');
        $this->sanphams = new SanPham();
    }
    public function index(Request $request)
    {
        // Query builder
        $title = "Danh sách sản phẩm";
        // $listSanPham =$this->sanphams->listSanPhams();
        // $listSanPham = SanPham::get();
        
        // Lấy dữ liệu từ form search
        $search = $request->input("search");
        $searchTrangThai = $request->input("selectTrangThai");

        $listSanPham = SanPham::query()
        ->when($search, function($query,$search) { return $query->where('ma_san_pham', 'like', "%{$search}%")->orwhere('ten_san_pham', 'like', "%{$search}%");})
        ->when($searchTrangThai !== null, function($query) use ($searchTrangThai) { return $query->where('trang_thai', '=', $searchTrangThai);})
        ->paginate(1);
        return view('admins.sanpham.index', compact('title', 'listSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Thêm mới sản phẩm";

        return view("admins.sanpham.create", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            // dd($params);
            
            if ($request->hasFile('hinh_anh')) {
                // $filename = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
                $filename = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            } else {
                $filename = null;
            }

            $params['hinh_anh'] = $filename;

            $sanPham =  SanPham::query()->create($params);
            // Sau khi thêm sản phẩm thành công thì gửi mail thông báo và kèm theo thông tin về sản phẩm đó
            // to(<mail người nhận>)
            // Mail::to('tuyenhdph40250@fpt.edu.vn')->send(new MailConfirm($sanPham));

            return redirect()->route('sanpham.index')->with('success', 'Thêm sản phầm thành công!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data['title'] = "Cập nhật sản phẩm";
        // $data['sanPham'] =  SanPham::find($id);
        $data['sanPham'] = $this->sanphams->getDetailProduct($id);
        return view('admins.sanpham.update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SanPhamRequest $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {
            // dd($request);
            $params = $request->except('_token', '_method');
            // dd($params);
            $sanPham = $this->sanphams->getDetailProduct($id);
            if ($request->hasFile('hinh_anh')) {
                if ($sanPham->hinh_anh) {
                    Storage::disk('public')->delete($sanPham->hinh_anh);
                    $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
                }else {
                    $params['hinh_anh'] = $sanPham->hinh_anh;
                }
            }
            $this->sanphams->updateProduct($id, $params);
            return redirect()->route('sanpham.index')->with('success','Sửa thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        if ($request->isMethod('DELETE')) {
        // Xóa sản phẩm sử dụng Query builder
            // $sanPham = $this->sanphams->getDetailProduct($id);
            // if ($sanPham) {
            //     $this->sanphams->deleteProduct($id);
            //     if ($sanPham->hinh_anh && Storage::disk('public')->exists($sanPham->hinh_anh)) {
            //         Storage::disk('public')->delete($sanPham->hinh_anh);
            //     }
            //     return redirect()->route('sanpham.index')->with('success','Xóa thành công');
            // }

        // Xóa sản phẩm bằng Eloquent
            $sanPham = SanPham::query()->findOrFail($id);
            $sanPham->delete();
            if ($sanPham->hinh_anh && Storage::disk('public')->exists($sanPham->hinh_anh)) {
                Storage::disk('public')->delete($sanPham->hinh_anh);
            }
            return redirect()->route('sanpham.index')->with('success', 'Xóa thành công');

            // Một số hàm sử dụng khi xóa mềm
            // Hàm hiển thị toàn bộ sản phẩm đã xóa mềm
                // $listSanPham = SanPham::query()->onlyTrashed()->get();
            // Hàm hoàn tác sản phẩm xóa mềm
                // $sanPham->restore();
            // Hàm xóa vĩnh viễn
                // $sanPham->forceDelete();
        }
        //
        
    }
}
