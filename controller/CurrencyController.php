<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CurrencyController extends Controller
{
    public function index()
    {
        return view('admin.currency.index', [
            'currencies' => Currency::orderByDesc('id')->paginate(10),
            'title' => 'Quản lý tiền tệ'
        ]);
    }

    public function create()
    {
        return view('admin.currency.add', ['title' => 'Thêm mới tiền tệ']);
    }

    public function store(Request $request)
    {
        $regex = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        $data = $request->validate([
            'code' => 'required',
            'price' => ['required', 'regex:' . $regex],
            'description' => 'required'
        ], [
            'code.required' => 'Mã tiền tệ không được rỗng',
            'price.required' => 'Giá tiền không được rỗng',
            'price.regix' => 'Giá tiền không hợp lệ',
            'description.required' => 'Mô tả không được rỗng'
        ]);

        try {
            Currency::create($data);

            return redirect()->back()->with('success', 'Thêm thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra, vui lòng thử lại sau');
        }
    }

    public function update(Request $request, Currency $currency)
    {
        $regex = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        $data = $request->validate([
            'code' => 'required',
            'price' => ['required', 'regex:' . $regex],
            'description' => 'required'
        ], [
            'code.required' => 'Mã tiền tệ không được rỗng',
            'price.required' => 'Giá tiền không được rỗng',
            'price.regix' => 'Giá tiền không hợp lệ',
            'description.required' => 'Mô tả không được rỗng'
        ]);

        $data = $request->input();

        try {
            $currency->fill($data);
            $currency->save();

            return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Có lỗi phát sinh, vui lòng thử lại sau']);
        }
    }

    public function destroy(Currency $currency)
    {
        try {
            $currency->delete();
            Session::flash('success', 'Xóa thành công');

            return response()->json([]);
        } catch (\Exception $e) {
            Session::flash('error', 'Xóa lỗi');
            return response()->json([]);
        }
    }
}
