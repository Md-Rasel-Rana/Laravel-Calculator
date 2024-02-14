<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function calculate(Request $request){
        $num1=$request->input('num1');
        $num2=$request->input('num2');
        $result=0;
        $operator=$request->input('operator');
        if($operator==="add"){
          $result=$num1+$num2;
        }else if($operator==="subtract"){
          $result=$num1-$num2;
        }
        else if($operator==="multiply"){
            $result=$num1*$num2;
        }else if($operator==="divide"){
            $result=$num1/$num2;    
        }else{
            $result="invalid operator";
        }
        
         return redirect()->back()->with('result', $result);
    }
}
