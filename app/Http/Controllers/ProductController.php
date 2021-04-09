<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    // public function __construct(
    //     BrandContract $brandRepository,
    //     CategoryContract $categoryRepository,
    //     ProductContract $productRepository
    // )
    // {
    //     $this->brandRepository = $brandRepository;
    //     $this->categoryRepository = $categoryRepository;
    //     $this->productRepository = $productRepository;
    // }

  //   public function __construct(){
  //       $this->response['module'] = 'Product Management';
		// $this->response['module_url'] = '$this->module_base_url';
		//  }


	public function index()
	{
	      $product = Product::simplePaginate(1)->withQueryString();
	     
	      return view('web.products.index', ['items' => $product]);
	}
	public function datatablePagination()
	{
	    $result = Product::get();
    	if (request()->ajax()) {
            return datatables()->of($result)
                ->addIndexColumn()
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('detail', function ($data) {
                    return $data->detail;
                })
                ->rawColumns(['name','detail'])
                ->setRowId(function ($data) {
                    return 'record_'.$data->id;
                })
                ->make(true);
        }
    	return view('web.products..datatable');
    }
	public function numbericPagination()
	{
	    $data = Product::paginate(5);
        return view('web.products.numberic',compact('data'));
    }
	
}
