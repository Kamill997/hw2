<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $session_id=session('utente_id');
        $user=User::find($session_id);
        if(!isset($user))
            return view("home");
        else
            return view("home")->with("user",$user);
    }


    public function pick()
    {
        $query=Gallery::all();
        return $query;
    }

    public function check()
    {
        $session_id=session('utente_id');
        $user=User::find($session_id);
        if(!isset($user))
            return redirect("login");
        else
            return view("profile")->with("user",$user);
    }

    public function upload()
    {
        $request=request();
        $user=User::find(session('utente_id'));

        if($request->hasFile('Upload'))
        {
            $destination='storage/'.$user->Pic;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $nome_img=$request->file('Upload')->getClientOriginalName();
            $path=$request->file('Upload')->storeAs('public',$nome_img);

            $user->Pic=$nome_img;
            $user->update(); 

            $update=User::where('id',$user)->get();
            return $update;
        }
    }

    public function user()
    {
        $user=User::where('id',session('utente_id'))->get();
        return $user;
    }

    public function reset()
    {
        $request=request();
        
        $user=User::find(session('utente_id'));

        $request->validate([
            'old_pass'=>'required|min:8|max:50',
            'new_pass'=>'required|min:8|max:50',
            'repeat_pass'=>'required|same:new_pass'
        ]);
      
        if(Hash::check($request->old_pass,$user->Password))
        {
            if(!Hash::check($request->new_pass,$user->Password))
            {
                $user->Password=Hash::make($request->new_pass);
                $reset=User::where('id',$user->id)->update(array('Password'=>$user->Password));
                if($reset)
                {
                    return ['message'=>"Password cambiata con successo"];
                }
                else
                {
                    return ['message'=>"Errore durante il cambio password"];
                }
            }
            else
            {
                return ['message'=>"La password attuale non può essere la tua nuova password"];
            }
        }
        else
        {
            return ['message'=>"La Password attuale e quella inserita non coincidono"];
        }       
    }

}

?>