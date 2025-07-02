<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Db\Banners;
use Illuminate\Http\Request;
use Illuminate\View\View;
class BannerController extends Controller
{
    public function viewBanner(): View
    {
        return view('pages.banner');
    }
    public function getListSemester() {
        // if(Auth::user()->tokenCan(''))
        $listSemester = Banners::all();
        return response()->json(
            [
                'status' => 200,
                'message' => 'thành công',
                'data' => $listSemester
            ]
            );
    }
     public function insertSemester(Request $request) {
        if(Auth::user()->tokenCan('Add:Semester'))
        {
            $data = $request->all();
            request()->validate([
                'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = request()->banner_slug.'.'.request()->banner_img->getClientOriginalExtension();
            request()->banner_img->move(public_path('images/banner'), $imageName);
            $imageName = '/images/banner/'.$imageName;
            $data['banner_img'] = $imageName;
            $banner = Banners::create($data);
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Thêm thành công',
                    'data' => $banner
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền thêm học kỳ');
        }
       
    }
    public function updateSemester(Request $request, $id)
{
    if (Auth::user()->tokenCan('Update:Semester')) {   
        $data = $request->all();

        // Nếu có ảnh mới được gửi lên thì mới validate ảnh
        if ($request->hasFile('banner_img')) {
            $request->validate([
                'banner_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // xử lý lưu ảnh
            $imageName = $request->banner_slug . '.' . $request->banner_img->getClientOriginalExtension();
            $request->banner_img->move(public_path('images/banner'), $imageName);
            $data['banner_img'] = '/images/banner/' . $imageName;
        }

        // cập nhật
        $banner = Banners::findOrFail($id);
        $banner->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'Cập nhật thành công',
            'data' => $banner
        ]);
    } else {
        abort(403, 'Bạn không có quyền cập nhật học kỳ');
    }
}

    public function deleteSemester(Request $request, $id) {
        if(Auth::user()->tokenCan('Delete:Semester'))
        {
            $semester = Banners::find($id)->delete();
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Xóa thành công',
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền xóa cập nhập học kỳ');
        }
       
    }
}
