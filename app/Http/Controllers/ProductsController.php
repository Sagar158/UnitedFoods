<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use Yajra\DataTables\DataTables;


class ProductsController extends Controller
{
    public $title = 'Products';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = $this->title;
        return view('products.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = $this->title;
        $product = new Products();
        return view('products.edit', compact('product','title'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required',
            'description' => 'nullable|string',
            'category_id' => 'required',
            'rate' => 'required',
            'unit' => 'required',
            'discount' => 'required',
            'discount_unit' => 'required',
        ]);


        $product = new Products();
        $product->status = $validatedData['status'];
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->unit = $validatedData['unit'];
        $product->category_id = $validatedData['category_id'];
        $product->rate = $validatedData['rate'];
        $product->discount = $validatedData['discount'];
        $product->discount_unit = $validatedData['discount_unit'];
        $product->save();

        if($request->has('images'))
        {
            $isFirstImage = true;
            foreach($request->images as $image)
            {
                ProductImages::create([
                    'product_id' => $product->id,
                    'image' => Helper::imageUpload($image),
                    'primary' => $isFirstImage,
                ]);
                $isFirstImage = false;
            }
        }

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = $this->title;
        $product = Products::with(['images','relatedProducts'])->findOrFail($id);
        return view('products.show',compact('product','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = $this->title;
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required',
            'description' => 'nullable|string',
            'category_id' => 'required',
            'rate' => 'required',
            'unit' => 'required',
            'discount' => 'required',
            'discount_unit' => 'required',
        ]);


        $product = Products::findOrFail($id);
        $product->status = $validatedData['status'];
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->unit = $validatedData['unit'];
        $product->category_id = $validatedData['category_id'];
        $product->rate = $validatedData['rate'];
        $product->discount = $validatedData['discount'];
        $product->discount_unit = $validatedData['discount_unit'];
        $product->save();

        if($request->has('images'))
        {
            foreach($request->images as $image)
            {
                $isFirstImage = ProductImages::where('product_id', $product->id)->where('primary', true)->doesntExist();

                ProductImages::create([
                    'product_id' => $product->id,
                    'image' => Helper::imageUpload($image),
                    'primary' => $isFirstImage,
                ]);

                $isFirstImage = false;
            }
        }
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productImages = ProductImages::where('product_id',$id)->select('image')->pluck('image')->toArray();
        Helper::deleteFiles($productImages);
        $record = Products::destroy($id);
        ProductImages::where('product_id',$id)->delete();

        return response()->json(['success' => $record]);
    }
    public function getProductData()
    {
        $query = Products::query(); // Modify as needed to get your data

        return DataTables::of($query)
            ->editColumn('image', function ($product) {
                if(isset($product->primaryImage->image))
                    $imageUrl = asset($product->primaryImage->image);
                else
                    $imageUrl = asset('assets/images/placeholder.jpg');
                return '<img src="'. $imageUrl .'" style="height: 100px; width: 100px; border-radius: 0%;">';
            })
            ->editColumn('rate', function($product){
                return $product->rate.' '. Str::upper($product->unit);
            })
            ->editColumn('discount', function($product){
                $discount = $product->discount.''. (($product->discount_unit == 'percentage') ? '%' : '');
                return $discount;
            })
            ->addColumn('action', function ($product) {
                return '
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                                <a class="dropdown-item" href="'.route('products.show', $product->id).'">Show</a>
                                <a class="dropdown-item" href="'.route('products.edit', $product->id).'">Edit</a>
                                    <a class="dropdown-item delete-record" href="#" data-route="'.route('products.destroy', $product->id).'" data-id="'.$product->id.'">Delete</a>
                                </div>
                            </div>
                        ';
            })
            ->rawColumns(['image', 'action','rate','discount'])
            ->make(true);
    }
}
