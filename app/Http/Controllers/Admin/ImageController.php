<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImagePost;
use App\Models\Product;
use App\Models\ProductImage;
use File;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
        $images = $product->images()->orderBy('featured', 'desc')->get();
        return view('admin.products.images.index')->with(compact('product', 'images'));
    }

    public function store(StoreImagePost $request, $id)
    {
        //Validation
        $validated = $request->validated();

        if($validated){
            //Renombrar el archivo image
            $file = $request->file('image');
            //Path
            $path = public_path('images/products');
            //Nombre único
            $filename = time() . "." . $file->extension();
            //Mover
            $moved = $file->move($path, $filename);
            if($moved){
                $productImage = new ProductImage();
                $productImage->image = $filename;
                $productImage->product_id = $id;
                $productImage->save();
            }
        }
        return back()->with('status', 'La imagen se ha cargado correctamente!');
    }

    public function destroy(Request $request, $id){
        //Eliminar de public
        $productImage = ProductImage::find($request->image_id);
        if(substr($productImage->image, 0, 4) === 'http'){
            $deleted = true;
        }else{
            $fullPath = public_path() . '/images/products/' . $productImage->image;
            $deleted = unlink($fullPath);
        }
        //Eliminar de bd
        if($deleted){
            $productImage->delete();
        }
        return back()->with('status', 'La imagen fue eliminada correctamente!');
    }

    public function featuredImage($id, $image)
    {
        ProductImage::where('product_id', $id)->update([
            'featured' => false
        ]);
        /* return "El id del producto es $id y el id de la imagen destacada es $image"; */
        $productImage = ProductImage::find($image);
        $productImage->featured = true;
        $productImage->save();

        return back()->with('status', 'Se ha seleccionado la imagen como destacada!');
    }

}
