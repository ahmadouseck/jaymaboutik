<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1')
        {
            return view('admin.home');
        }
        else
        {
            $data = product::paginate(3);

            $user = auth()->user();

            $count = cart::where('phone',$user->phone)->count();

            return view('user.home', compact('data','count'));
        }
    }


    public function index()
    {

        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
             $data = product::paginate(3);

            return view('user.home', compact('data'));
        }
    }


    public function contact()
    {
        return view('parties.contact');
    }

    public function apropos()
    {
        return view('parties.apropos');
    }

    public function nosproduits()
    {
        return view('parties.nosproduits');
    }




    public function search(Request $request)
    {

       $search=$request->search;

       if($search=='')
       {
        $data = product::paginate(3);

        return view('user.home', compact('data'));
       }
       $data = product::where('title','Like','%'.$search.'%')->get();

       return view('user.home',compact('data'));
    }


    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = auth()->user();
            $product = product::find($id);

            $cart = new cart;

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;

            $cart->product_title = $product->title;
            $cart->price = $product->price;

            $cart->quantity = $request->quantity;

            $cart->save();


            return redirect()->back()->with('message','Produit ajouté avec succé !');
        }
        else
        {
            return redirect('login');
        }
    }

    public function showcart()
    {

        $user = auth()->user();

        $cart = cart::where('phone',$user->phone)->get();

        $count = cart::where('phone',$user->phone)->count();

        return view('user.showcart', compact('count','cart'));
    }


    public function deletecart($id)
    {

        $data = cart::find($id);

        $data->delete();
        return redirect()->back()->with('message','Produit supprimé avec succé !');
    }


    public function confirmorder(Request $request)
    {
        $user = auth()->user();

        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach($request->productname as $key=>$productname)
        {

            $order = new order;

            $order->name = $name;
            $order->phone= $phone;
            $order->address=$address;

            $order->product_name = $request->productname[$key];
            $order->quantity = $request->quantity[$key];
            $order->price = $request->price[$key];


            $order->status = 'non delivré';

            $order->save();

        }

        DB::table('carts')->where('phone',$phone)->delete();
        return redirect()->back()->with('message','Produit commandé avec succé !');
    }


    public function savemessage(Request $request)
    {

        $data = new message;

        $data->name= $request->name;
        $data->phone= $request->phone;
        $data->email= $request->email;
        $data->subject= $request->subject;
        $data->message= $request->message;

        $data->save();

        return redirect()->back()->with('message','Message envoyé avec succé !');
    }

}
