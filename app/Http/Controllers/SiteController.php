<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEmail;
use App\Mail\Envio;
use App\Mail\Send;
use App\Mail\website;
use App\Models\About;
use App\Models\Anuncio;
use App\Models\Bilhete;
use App\Models\Color;
use App\Models\contact;
use App\Models\customer;
use App\Models\Detail;
use App\Models\Fundo;
use App\Models\hero;
use App\Models\InfoBilhete;
use App\Models\infowhy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;

class SiteController extends Controller
{
    //
    public function index(){
        $hero = hero::select("title", "description", "img")->get();
        $info = infowhy::select("title", "description")->get();
        $details = Detail::select("title", "description")->get();
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        $about = About::select("p1", "p2")->get();
        $Vertical = Anuncio::where("tipo", "Vertical")->get();
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        return view("pages.home",
        [
            "hero" => $hero,
            "about" => $about,
            "Vertical" => $Vertical,
            "Horizontal" => $Horizontal,
            "info" => $info,
            "details" => $details,
            "Horizontal" => $Horizontal,
            "contact" => $this->footerInfo(),
            "color" => $this->colors(),
            "fundoAbout" => $this->fundoAbout(),
            "fundo" => $this->fundo(),
            "start" => $this->start()
        ]);
    }

    public function start(){
        $start = Fundo::where("tipo", "Start")->first();
        return $start;
    }

    public function colors(){
        $color = Color::first();
        return $color;
    }

    public function fundoAbout(){
        $data = Fundo::get();
        if(count($data) > 0){
            $about = Fundo::where("tipo", "About")->first();
            return  $about;
        }
        
       
    }

    public function fundo(){
        $data = Fundo::get();
        if( isset ($data) and count($data) > 0){
            $about = Fundo::where("tipo", "Aboutp")->first();
            return $about;
        }

    }

    public function about(){
        $about = About::select("p1", "p2")->get();
        $Vertical = Anuncio::where("tipo", "Vertical")->get();
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        return view("pages.about",
        [
            "color" => $this->colors(),
            "about" =>$about,
            "Vertical" =>$Vertical,
            "Horizontal" =>$Horizontal,
            "contact" => $this->footerInfo(),
            "fundoAbout" => $this->fundoAbout(),
            "fundo" => $this->fundo(),
            "start" => $this->start()
        ],
    );
}

    public function products(){
        return view("pages.products",
         [
            "contact" => $this->footerInfo(),
            "color" => $this->colors(),
            "fundoAbout" => $this->fundoAbout(),
            "fundo" => $this->fundo(),
            "start" => $this->start()
        ]);
    }

    public function contact(){
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        return view("pages.contact", 
        [
            "Horizontal" => $Horizontal,
            "contact" => $this->footerInfo(),
            "color" => $this->colors(),
            "fundo" => $this->fundo(),
            "start" => $this->start(),
            "fundoAbout" => $this->fundoAbout(),

        ]);
    }

    public function bilhete(){
        return view("pages.bilhete", ["contact" => $this->footerInfo()],
        ["bilhete" => $this->verBilhete()]);
    }

    public function footerInfo(){
        $contact = contact::select("endereco", "email", "telefone", "atendimento")->get();
        return $contact;
    }

    public function verBilhete(){
        $bilhete = Bilhete::get();
        return $bilhete;
    }

    public function FormBilhetes($id){
    //Bilhete::find($id);
       $info = InfoBilhete::where("bilhete_id", $id)->get();
       $layout = "pages.form";

       return view($layout, compact("info","id"), ["contact" => $this->footerInfo()]);
    }

    public function payment(Request $request){
        $dados = new customer();

        $dados->name = $request->name;
        $dados->quantity = $request->quantity;
        $dados->anexo = $request->anexo;
        $dados->bilhete_id = $request->id;

        if ($image = $request->file('anexo')) {
            $destinationPath = 'factura/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $dados->anexo = $profileImage;
        }
        $dados->save();
        return redirect()->back();
    }

    public function sendEmail(Request $request){
        Mail::to("albertocativa653@gmail.com")
        ->send(new Envio(
            $request->name,
            $request->email,
            $request->subject,
            $request->message
        ));        
       return redirect()->back();
    }

    // public function api(){
    //     $api = Http::post(
    //         "https://karamba.ao/api/anuncios",
    //         ["key" => "PixkMpHWNQQxwxKiEmdrrZeyhbMNVaXVKwVlkYQcvfNlSpFmeI"]
    //     );

    //     $apiArray = $api->json();

    //     return view("pages.datas", ["apiArray" => $apiArray]);
    // }
}