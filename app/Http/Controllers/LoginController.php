<?php
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if(session('utente_id')!= null)
        {
            return redirect("home");    
        }
        else {
            return view('login')
            ->with('csrf_token', csrf_token());
        }
    }

    public function checklogin()
    {
        $utente=User::where('Username',request('Username'))->first();

        if(isset($utente))
        {
            if(Hash::check(request('Password'),$utente->Password))
            {
                Session::put('utente_id',$utente->id);
                return redirect('home');
            }
        }
        else
        {
            return redirect('login')->withInput();    
        }
    }

    public function pick()
    {
        $query=Gallery::all();
        return $query;
    }

    public function logout()
    {
        Session::flush();
        return redirect('home');
    }
}
?>
