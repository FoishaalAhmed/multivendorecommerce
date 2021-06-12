<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'subcategory_id', 'child_category_id', 'brand_id', 'name', 'slug', 'price', 'old_price', 'discount_percent', 'discount', 'tags', 'description', 'display', 
    ];

    public function storeProduct(Object $request)
    {
        $image = $request->file('display');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/products/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->display   = $image_url;
        }

        $this->seller_id         = auth()->id();
        $this->category_id       = $request->category_id ;
        $this->subcategory_id    = $request->subcategory_id ;
        $this->child_category_id = $request->child_category_id ;
        $this->brand_id          = $request->brand_id ;
        $this->name              = $request->name ;
        $this->slug              = $request->slug ;
        $this->price             = $request->price ;
        $this->old_price         = $request->old_price ;
        $this->discount_percent  = $request->discount_percent ;
        $this->discount          = $request->discount ;
        $this->tags              = $request->tags ;
        $this->description       = $request->description ;
        $storeProduct            = $this->save() ;
        $product_id              = $this->id;

        if ($request->sizes != null) {
            foreach ($request->sizes as $key => $value) {

                $productSize = new ProductSize();
                $productSize->size_id = $value;
                $productSize->product_id = $product_id;
                $productSize->save();
            }
        }

        if ($request->colors != null) {

            foreach ($request->colors as $key => $value) {

                $productColor = new ColorProduct();
                $productColor->color_id = $value;
                $productColor->product_id = $product_id;
                $productColor->save();
            }
        }

        if ($files = $request->file('photo')) {

            foreach ($files as $file) {

                $multiple_upload_path = 'public/images/products/';
                $name                 = $file->getClientOriginalName();
                $multiple_image_name  = date('YmdHis') . '_' . $name;
                $file->move($multiple_upload_path, $multiple_image_name);

                $productPhoto             = new ProductPhoto();
                $productPhoto->photo      = $multiple_upload_path . $multiple_image_name;
                $productPhoto->product_id = $product_id;
                $productPhoto->save();
            }
        }

        $storeProduct
            ? session()->flash('message', 'New Product Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateProduct(Object $request, Int $id)
    {
        $product = $this::findOrFail($id);
        $image = $request->file('display');

        if ($image) {
            if (file_exists($product->display)) unlink($product->display);
            $image_name       = date('YmdHis');
            $ext              = strtolower($image->getClientOriginalExtension());
            $image_full_name  = $image_name . '.' . $ext;
            $upload_path      = 'public/images/products/';
            $image_url        = $upload_path . $image_full_name;
            $success          = $image->move($upload_path, $image_full_name);
            $product->display = $image_url;
        }

        $product->category_id       = $request->category_id ;
        $product->subcategory_id    = $request->subcategory_id ;
        $product->child_category_id = $request->child_category_id ;
        $product->brand_id          = $request->brand_id ;
        $product->name              = $request->name ;
        $product->slug              = $request->slug ;
        $product->price             = $request->price ;
        $product->old_price         = $request->old_price ;
        $product->discount_percent  = $request->discount_percent ;
        $product->discount          = $request->discount ;
        $product->tags              = $request->tags ;
        $product->description       = $request->description ;
        $updateProduct              = $product->save() ;
        $product_id                 = $id;

        ProductSize::where('product_id', $id)->delete();
        ColorProduct::where('product_id', $id)->delete();

        if ($request->sizes != null) {
            foreach ($request->sizes as $key => $value) {

                $productSize = new ProductSize();
                $productSize->size_id = $value;
                $productSize->product_id = $product_id;
                $productSize->save();
            }
        }

        if ($request->colors != null) {

            foreach ($request->colors as $key => $value) {

                $productColor = new ColorProduct();
                $productColor->color_id = $value;
                $productColor->product_id = $product_id;
                $productColor->save();
            }
        }

        if ($files = $request->file('photo')) {

            foreach ($files as $file) {

                $multiple_upload_path = 'public/images/products/';
                $name                 = $file->getClientOriginalName();
                $multiple_image_name  = date('YmdHis') . '_' . $name;
                $file->move($multiple_upload_path, $multiple_image_name);

                $productPhoto             = new ProductPhoto();
                $productPhoto->photo      = $multiple_upload_path . $multiple_image_name;
                $productPhoto->product_id = $product_id;
                $productPhoto->save();
            }
        }

        $updateProduct
            ? session()->flash('message', 'Product Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyProduct(Int $id)
    {
        $product = $this::findOrFail($id);
        if (file_exists($product->display)) unlink($product->display);
        $photos = ProductPhoto::where('product_id', $id)->get();

        foreach ($photos as $key => $value) {
            if (file_exists($value->photo)) unlink($value->photo);
        }

        ProductSize::where('product_id', $id)->delete();
        ColorProduct::where('product_id', $id)->delete();
        $destroyProduct = $product->save() ;
        $destroyProduct
            ? session()->flash('message', 'Product Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
