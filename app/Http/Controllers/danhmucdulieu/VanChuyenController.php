<?php

namespace App\Http\Controllers\danhmucdulieu;

use App\Models\vanchuyen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Illuminate\Database\QueryException;

class VanChuyenController extends Controller
{
    
    public function index()
    {
        $vanchuyens=vanchuyen::paginate(10);
        return view('admin.danhmucdulieu.vanchuyen.hienthi',compact('vanchuyens'));
    }

    
    public function create(Request $request)
    {
        try{
            $validated=$request->validate(
                [
                    'vc_ten'=>'required',
                    'vc_tinhtrang'=>'required',
                ],
                [
                    'vc_ten.required'=>'Vui lòng nhập tên vận chuyển',
                    'vc_tinhtrang.required'=>'Vui lòng chọn tình trạng',

                ]
            );
            if($request->vc_ma==null){
                $vanchuyen=vanchuyen::create($validated);
                if($vanchuyen){
                    return back()->with('thanhcong','thêm vận chuyển thành công');
                }
                return back()->withInput()->with('thatbai','thêm vận chuyển thất bại!');
            }else{
                $vanchuyen=vanchuyen::find($request->vc_ma);
                if($vanchuyen->update($validated)){
                    return back()->with('thanhcong','cập nhật vận chuyển thành công');
                }
                return back()->withInput()->with('thatbai','Cập nhật vận chuyển thất bại!');
            }
        }catch(QueryException $ex){
            return back()->withInput()->with('canhbao','thêm vận chuyển thất bại! Lỗi Kĩ thuật');
        }
    }

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $vanchuyen=vanchuyen::find($id);
            if($vanchuyen->delete()){
                return back()->with('thanhcong','Xóa mục vận chuyển thành công');
            }
            return back()->withInput()->with('thatbai','Xóa vận chuyển thất bại!');
        }catch(QueryException $ex){
            $vanchuyen=vanchuyen::find($id);
            $vanchuyen->vc_tinhtrang='0';
            $vanchuyen->save();
            return back()->withInput()->with('canhbao','Dữ liệu đã chuyển sang trạng thái ngừng sử dụng. Do vận chuyển này không thể xóa vĩnh viễn');
        }
    }
}
