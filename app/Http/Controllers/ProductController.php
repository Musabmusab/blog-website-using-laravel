<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

     public function add(){

     return view('addblog');

     }

     public function view(){

         $product =Product::all();
        return view('view',compact('product'));

        }

        public function product_detail($id){

            $data =Product::find($id);
           return view('product_detail',compact('data'));

           }



        public function upload(Request $request){

        $data = new Product();
        $data->title=$request->title;
        $data->shortdec=$request->shortdec;
        $data->dec=$request->dec;
        $data->author=$request->author;
        $file=$request->file;

        if ($file) {
            $imagename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('products',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back();
    }

    public function update_product($id){

        $data =Product::find($id);
       return view('update',compact('data'));

       }



       public function  edit_product(Request $request,$id){


        $data = Product::find($id);
        $data->title=$request->title;
        $data->shortdec=$request->shortdec;
        $data->dec=$request->dec;
        $data->author=$request->author;
        $file=$request->file;

        if ($file) {
            $imagename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('products',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect('view');
    }

    public function delete_product($id){

        $data =Product::find($id);
        $data->delete();
       return redirect()->back();

       }





}
