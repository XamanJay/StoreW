<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::all();

        return view('products.index',[
            'products' => $products
        ] );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriess = Category::all();

        return view('products.create',[
            'categoriess' => $categoriess]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        //dd ($info_image);

        $image_path = $_FILES["image_path"];

        if ($_FILES['image_path']['name'] != null) {

            $newImageName = time().'-0-'.$request->Nombre . '.' .$request->image_path->extension();
            $request->image_path->move(public_path('images'),$newImageName);
        }else{
        $newImageName = 'nodisponible.png';
        }
// dd('paso hasta aqui');



       /* if (is_null($info_image) || is_empty){
            dd($info_image);
        }
        else{
            $newImageName = time().'-0-'.$request->Nombre . '.' .$request->image_path->extension();
            $request->image_path->move(public_path('images'),$newImageName);
        }
*/

       
       // $newImageName = time().'-0-'.$request->Nombre . '.' .$request->image_path->extension();
       //  $request->image_path->move(public_path('images'),$newImageName);

        $products = Product::create([    
            'Nombre'            => $request->input('Nombre'),
            'SKU'               => $request->input('SKU'),
            'Precio'            => $request->input('Precio'),
            'Descripcion'       => $request->input('Descripcion'),
            'image_path'        => $newImageName,
            'id_categories'     => $request->input('id_categories')
            
        ]);

        $products = Product::all();

        return view('products.index',[
            'products' => $products
        ]);
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
        $categoriess = Category::all();

        $products = Product::find($id);

        return view('products.edit',[
            'categoriess' => $categoriess,
            'products' => $products
        ]);
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
        


        $newImageName = time().'-0-'.$request->Nombre . '.' .$request->image_path->extension();


        $request->image_path->move(public_path('images'),$newImageName);

        

        

        $products = Product::where('id',$id)->update([    
            'Nombre'          => $request->input('Nombre'),
            'SKU'       => $request->input('SKU'),
            'Precio'         => $request->input('Precio'),
            'Descripcion'    => $request->input('Descripcion'),
            'image_path'        => $newImageName,
            'id_categories'  => $request->input('id_categories'),
            
        ]);

        $products = Product::all();

        return view('products.index',[
            'products' => $products
        ]);


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function destroy(Product $Product)
    {
        $Product->delete();
         return redirect()->route('products.index')->with('message', ' Deleted Successfully');

        
    }


}
