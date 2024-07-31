<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SanPhamResource;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->get("search");
        $sanPhams = SanPham::query()->when($search, function($query,$search) {return $query->where('ten_san_pham', 'like', "%{$search}%");})->orderBy('id','desc')->get();
        return SanPhamResource::collection($sanPhams);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if ($request->isMethod('POST')) {
            $params = $request->all();
            // dd($params);
            if ($request->hasFile('hinh_anh')) {
                $filename = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            } else {
                $filename = null;
            }
            $params['hinh_anh'] = $filename;
            $sanPham =  SanPham::query()->create($params);
            return new SanPhamResource($sanPham);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $sanPham = SanPham::query()->findOrFail($id);
        return new SanPhamResource($sanPham);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {
            // dd($request);
            $params = $request->all();
            // dd($params);
            $sanPham = SanPham::findOrFail($id);
            if ($request->hasFile('hinh_anh')) {
                if ($sanPham->hinh_anh) {
                    Storage::disk('public')->delete($sanPham->hinh_anh);
                }
                $params['hinh_anh'] = $request->file('hinh_anh')->store('uploads/sanpham', 'public');
            }else {
                $params['hinh_anh'] = $sanPham->hinh_anh;
            }
            $sanPham->update($params);
            return new SanPhamResource($sanPham);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sanPham = SanPham::query()->findOrFail($id);
        $sanPham->delete();
        if ($sanPham->hinh_anh && Storage::disk('public')->exists($sanPham->hinh_anh)) {
            Storage::disk('public')->delete($sanPham->hinh_anh);
        }
        return response()->json(['message'=>'Xóa thành công!'],200);
    }
}
