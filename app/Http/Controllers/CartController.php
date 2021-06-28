<?php

use Illuminate\Routing\Controller;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\User;
use App\Models\Gallery;


class CartController extends Controller
{
    public function index()
    {
        $session_id=session('utente_id');
        $user=User::find($session_id);
        $cart=Cart::where('ID_Utente',$session_id)->get();
        if(!isset($user))
            return redirect("login");
        else
            return view("cart")->with('user',$user)->with('cart',$cart);
    }

    public function pick()
    {
        $query=Gallery::all();
        return $query;
    }

    public function itemCart()
    {
        $query=Cart::where("ID_Utente",session('utente_id'))->get();
        return $query;
    }

    public function updateItem()
    {
        $request=request();
        $tot=$request->qnt * $request->pprezzo;

        $cart=Cart::find($request->cid)->update(array('Quantita'=>$request->qnt,'Tot'=>$tot));
    }

    public function delete($query)
    {
        $remove=Cart::where('ID_Cibo',$query)->where('ID_Utente',session('utente_id'))->delete();
    }

    public function deleteAll()
    {
        $remove=Cart::where('ID_Utente',session('utente_id'))->delete();
    }
}

?>