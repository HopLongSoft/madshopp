<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
/**
 * 
 */
class CategoryController extends Controller
{
    
    public function index()
    {
        $cats = Category::paginate(10);
        return view('admin.category.index'), [
            'datas' => $cats
        ]
    };
}
 ?>