<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Db\Semester;
use Illuminate\Http\Request;
use Illuminate\View\View;
class SemesterController extends Controller
{
    public function viewSemester(): View
    {
        return view('pages.semester');
    }
    public function getListSemester() {
        // if(Auth::user()->tokenCan(''))
        $listSemester = Semester::all();
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
            $semester = Semester::create($request->all());
            request()->validate([
                'banner_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.request()->banner_img->getClientOriginalExtension();
            request()->banner_img->move(public_path('images'), $imageName);
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Thêm thành công',
                    'data' => $imageName
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền thêm học kỳ');
        }
       
    }
    public function updateSemester(Request $request, $id) {
        if(Auth::user()->tokenCan('Update:Semester'))
        {
            $semester = Semester::find($id)->update($request->all());
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Cập nhập thành công',
                    'data' => $semester
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền cập nhập học kỳ');
        }
       
    }
    public function deleteSemester(Request $request, $id) {
        if(Auth::user()->tokenCan('Delete:Semester'))
        {
            $semester = Semester::find($id)->delete();
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
