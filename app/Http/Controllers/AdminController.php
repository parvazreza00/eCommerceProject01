<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Symfony\Component\VarDumper\Caster\RedisCaster;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product(){

        if(Auth::id()){

            if(Auth::user()->usertype=='1'){

                return view('admin.product');
            }
            else{
                return redirect()->back();
            }

        }
        else{
            return redirect('login');
        }

    }

    public function uploadproduct(Request $request){
        $data = new product;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);

        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product added successfully!');

    }

    public function showproduct(){
        $data = product::all();
        return view('admin.showproduct',compact('data'));
    }

    public function updateproductview($id){
        $data = product::find($id);

        return view('admin.updateproduct',compact('data'));
    }

    public function updateproduct(Request $request,$id){
        $data = product::find($id);

        $image = $request->file;
        if($image){

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;

        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product updated successfully');
    }

    public function deleteproduct($id){
        $data = product::find($id);
        $data->delete();

        return redirect()->back()->with('message','Product deleted!');
    }

    public function showorder(){
        $data = order::all();
        return view('admin.showorder',compact('data'));
    }

    public function updatestatus($id){
        $data = order::find($id);
        $data->status='Delivered';

        $data->save();

        return redirect()->back();
    }
}
