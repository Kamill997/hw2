<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Gallery;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        $request=request();

        if($this->Errori($request)===0)
        {
            if($request->hasFile('Pic'))
            {
                $nome_img=$request->file('Pic')->getClientOriginalName();
                $path=$request->file('Pic')->storeAs('public',$nome_img);

                $utente=User::create([
                    'Username'=>$request->Username,
                    'Nome'=>$request->Nome,
                    'Cognome'=>$request->Cognome,
                    'Email'=>$request->Email,
                    'Password'=>Hash::make($request->Password),
                    'Pic'=>$nome_img
                ]);

                if($utente)
                {
                    Session::put("utente_id",$utente->id);
                    return redirect("home");
                }
                else
                {
                    return redirect("registration")
                    ->with('old_Nome',$request->Nome)
                    ->with('old_Cognome',$request->Cognome)
                    ->with('old_Username',$request->Username)
                    ->with('old_Email',$request->Email);
                }
            }
            else
            {
                $utente=User::create([
                    'Username'=>$request->Username,
                    'Nome'=>$request->Nome,
                    'Cognome'=>$request->Cognome,
                    'Email'=>$request->Email,
                    'Password'=>Hash::make($request->Password),
                    'Pic'=>'default.png'
                ]);

                if($utente)
                {
                    Session::put("utente_id",$utente->id);
                    return redirect("home");
                }
                else
                {
                    return redirect("registration")
                    ->with('old_Nome',$request->Nome)
                    ->with('old_Cognome',$request->Cognome)
                    ->with('old_Username',$request->Username)
                    ->with('old_Email',$request->Email);
                }
            }
        }
        else
        {
            return redirect("registration")->withInput();
        }
    }   

    private function Errori($res) 
    {
        $error = array();
        
        if (strlen($res['Nome']) < 1)
        {
            $error[] = "Nome non inserito";
        } 

        if (strlen($res['Cognome']) < 1)
        {
            $error[] = "Cognome non inserito";
        } 

        $username = User::where('Username', $res['Username'])->first();
        if ($username !== null) 
        {
            $error[] = "Username già in uso";
        }
        
        if (strlen($res["Password"]) < 8)
        {
            $error[] = "Caratteri password insufficienti";
        } 

        $email = User::where('Email', $res['Email'])->first();
        if ($email !== null) 
        {
            $error[] = "Email già in uso";
        }
        
    
        return count($error);
    }

    public function checkUsername($res)
    {
        $query=User::where('Username',$res)->exists();
        return ['exists' => $query];
    }

    public function checkEmail($res)
    {
        $query=User::where('Email',$res)->exists();
        return ['exists' => $query];
    }

    public function pick()
    {
        $query=Gallery::all();
        return $query;
    }

    public function index()
    {
        $session_id=session('utente_id');
        $user=User::find($session_id);
        if(!isset($user))
            return view("registration");
        else
            return redirect('home');
    }
}

?>