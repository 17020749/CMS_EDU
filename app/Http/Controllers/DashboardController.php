<?php

namespace App\Http\Controllers;

use App\Models\Db\Article;
use App\Models\Db\Banners;
use App\Models\Db\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Db\Note;
use App\Models\Db\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
class DashboardController extends Controller
{
    public function viewDashboard(): View
    {
        $dataBanner = Banners::all();
        $dataProduct = Product::all();
        $dataNote = Note::all();
        $dataArticle = Article::all();
        $dataCategories = Category::all();
        return view('welcome', 
        ['dataBanners' => $dataBanner, 'dataProduct' => $dataProduct, 
        'dataNote' => $dataNote, 'dataArticle' => $dataArticle, 'dataCategories' => $dataCategories] 
    );
    }
}
