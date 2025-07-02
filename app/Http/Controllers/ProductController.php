<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Db\Product;
use App\Models\Db\ProductRelate;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ProductController extends Controller
{
     public function viewProduct(): View
    {
        return view('pages.product');
    }
    public function getListProduct() {
        // if(Auth::user()->tokenCan(''))
        // Lấy tất cả product cùng với ảnh liên quan
        $listProducts = Product::with('relates')->get();

        // Format lại dữ liệu
        $listProductsFormatted = $listProducts->map(function ($product) {
            return [
                'id' => $product->id,
                'product_name' => $product->product_name,
                'product_title' => $product->product_title,
                'product_description' => $product->product_description,
                'product_slug' => $product->product_slug,
                'product_img' => $product->product_img,
                'product_images' => $product->relates->map(function ($relate) {
                    return asset('storage/' . $relate->image); // full path ảnh phụ
                }),
            ];
        });
        return response()->json(
            [
                'status' => 200,
                'message' => 'thành công',
                'data' => $listProductsFormatted
            ]
            );
    }
    public function insertProduct(Request $request) {
        if(Auth::user()->tokenCan('Add:Semester'))
        {
            $data = $request->all();
            request()->validate([
                'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = request()->product_slug.'.'.request()->product_img->getClientOriginalExtension();
            request()->product_img->move(public_path('images/product'), $imageName);
            $imageName = '/images/product/'.$imageName;
            $data['product_img'] = $imageName;
            $product = Product::create($data);
            // xu ly cac anh lien quan
            if ($request->hasFile('product_images')) {
                foreach ($request->file('product_images') as $file) {
                    $path = $file->store('product_images', 'public'); // lưu vào storage/app/public/product_images
            
                    ProductRelate::create([
                        'image' => $path,
                        'product_id' => $product->id
                    ]);
                }
            }

            return response()->json(
                [
                    'status' => 200,
                    'message' => 'Thêm thành công',
                    'data' => $product
                ]
            );
        }
        else {
            abort(403, 'Bạn không có quyền thêm học kỳ');
        }
       
    }
    public function updateProduct(Request $request, $id)
    {
        if (Auth::user()->tokenCan('Update:Semester')) {   
            $data = $request->all();
    
            // Nếu có ảnh mới được gửi lên thì mới validate ảnh
            if ($request->hasFile('product_img')) {
                $request->validate([
                    'product_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
    
                // xử lý lưu ảnh
                $imageName = $request->banner_slug . '.' . $request->product_img->getClientOriginalExtension();
                $request->product_img->move(public_path('images/product'), $imageName);
                $data['product_img'] = '/images/product/' . $imageName;
            }
    
            // cập nhật
            $product = Product::findOrFail($id);
            $product->update($data);
            // update product_relate
            if ($request->hasFile('product_images')) {
                foreach ($request->file('product_images') as $file) {
                    $path = $file->store('product_images', 'public'); // lưu vào storage/app/public/product_images
            
                    ProductRelate::create([
                        'image' => $path,
                        'product_id' => $product->id
                    ]);
                }
            }
            return response()->json([
                'status' => 200,
                'message' => 'Cập nhật thành công',
                'data' => $product
            ]);
        } else {
            abort(403, 'Bạn không có quyền cập nhật học kỳ');
        }
    }
    
        public function deleteProduct(Request $request, $id) {
            if(Auth::user()->tokenCan('Delete:Semester'))
            {
                $semester = Product::find($id)->delete();
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
