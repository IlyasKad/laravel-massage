<?php
namespace App\Http\Controllers;


use App\Models\Anketa;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Metro;
use App\Models\Photo;
use App\Models\Type;
use App\Models\City;
use App\Models\Service;
use App\Models\Order;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller{

    public function index(Request $request) {
        return view('orders_index', ['orders' => Auth::user()->orders]);
    }


    public function show($id){
        return view('order', ['order' => Order::find($id)]);
    }

  

   
}
