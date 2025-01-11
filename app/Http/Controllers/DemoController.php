<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DemoController extends Controller
{
    function Demo1(Request $request){
      //data insert
      // return Brand::create($request->input());

      //data update
      // return Brand::where('id',$request->id)
      // ->update($request->input());

      //create or update
      // Brand::updateOrCreate(
      //   ['brandName'=>$request->brandName],
      //   $request->input()
      // );

      //delete
      // Brand::where('id','=',$request->id)->delete();

      //increment and decrement
      // Product::where('id',1)->increment('price',100);
      // Product::where('id',1)->decrement('price',100);
      

      //retrieving 
      // return Brand::get();
      // return Brand::all();
      // return Brand::find('2');
      // return Brand::first();


      //retrieving list o column values
      // return Product::pluck('title');
      // return Product::pluck('title','id');

      //aggregate like sum, max, min, avg, count
    //  return Product::count('price');
    //  return Product::sum('price');
    //  return Product::max('price');
    //  return Product::min('price');
    //  return Product::count('price');

    //select and disitinct
    // return Product::select('id','title','short_des')->get();
    // return Product::select('id','title','short_des')->distinct()->get();

    //where clause
    // return Product::where('price','=','1000')->get();
    // return Product::where('price','>=','1000')->get();
    // return Product::where('price','!=','1000')->get();
    // return Product::where('price','>','1000')->get();
    // return Product::where('price','<','1000')->get();
    // return Product::where('price','<=','1000')->get();
    // return Product::where('short_des','like','%C%')->get();
    // return Product::where('short_des','Not like','%C%')->get();
    //  return Product::whereBetween('price',[1000, 2000])->get();
    //  return Product::whereNotBetween('price',[1000, 2000])->get();
    //  return Product::whereIn('price',[1000, 2000])->get();
    //  return Product::whereNotIn('price',[1000, 2000])->get();
    // return Product::whereNull('price',[1000, 2000])->get();
    // return Product::whereNotNull('price',[1000, 2000])->get();
    }

}

