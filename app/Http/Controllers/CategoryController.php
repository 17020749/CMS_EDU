<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Db\Category;
use App\Models\Db\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
class CategoryController extends Controller
{
    public function viewCategories(): View
    {
        return view('pages.category');
    }
    public function viewProductForCategory(Request $request): View
    {
        $dataProductList = Product::where('product_category', $request->category_code);
        return view('pages.productList', ['dataProductList' => $dataProductList]);
    }
    public function getListCategories() {
        // if(Auth::user()->tokenCan(''))
        $listCourse = Category::all();
        return response()->json(
            [
                'status' => 200,
                'message' => 'thành công',
                'data' => $listCourse
            ]
            );
    }
     public function insertCategory(Request $request) {
        if(Auth::user()->tokenCan('Add:Semester'))
        {
            $data = $request->all();
            request()->validate([
                'category_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = request()->category_slug.'.'.request()->category_img->getClientOriginalExtension();
            request()->category_img->move(public_path('images/category'), $imageName);
            $imageName = '/images/category/'.$imageName;
            $data['category_img'] = $imageName;
            $category = Category::create($data);
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Thêm thành công',
                    'data' => $category
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền thêm danh muc');
        }
       
    }
    public function updateCategory(Request $request, $id) {
        if(Auth::user()->tokenCan('Update:Courses'))
        {
            $course = Category::find($id)->update($request->all());
            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Cập nhập thành công',
                    'data' => $course
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền cập nhập học kỳ');
        }
       
    }
    public function deleteCategory(Request $request, $id) {
        if(Auth::user()->tokenCan('Delete:Courses'))
        {
            $course = Category::find($id)->delete();
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
