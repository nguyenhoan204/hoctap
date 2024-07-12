<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControoller extends Controller
{
    function showProduct(){
        $listProducts = [
               [
                'id' => '1',
                'name' => 'sach',
               ],
               [
                'id' => '2',
                'name' => 'book',
               ],
            ];

        return view('list-product')->with([
            'listProducts' => $listProducts
        ]);
    }

    public function getProduct($id, $name =''){
      
        echo $id;
        echo $name;
    }

    public function updateProduct(Request $request){
        echo $request ->id;
        echo $request ->name;

    }

    
}
