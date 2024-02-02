<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services=Service::all();
        return view('services.index',compact('services'));
        
    }
    public function create(){
        return view('services.create');
    }
    public function store(Request $request){
        $prenom=$request->prenom;
        $nom=$request->nom;
        $email=$request->email;
        $phone=$request->phone;
        $title=$request->title;
        $categorie=$request->categorie;
        $description=$request->description;
        $prix=$request->prix;
        
        // Validation
        $request->validate([
            'nom'=> 'required|min:3',
            'prenom'=> 'required|min:3',
            'email'=> 'required|email',
            'phone'=> 'required|regex:/^\+212\d{9}$/',
            'title'=> 'required|min:8',
            'categorie'=> 'required',
            'description'=> 'required|min:30',
            'prix'=> 'required|numeric|min:5',

        ], [
            'phone.regex'=>'Veuillez entrer un numéro de téléphone valide (commence par +212 suivi de 9 chiffres)',
            ]
);

        // Insertion
        Service::create([
            'prenom'=>$prenom,
            'nom'=>$nom,
            'email'=>$email,
            'telephone'=>$phone,
            'title'=>$title,
            'price'=>$prix,
            'description'=>$description,
            'category_id'=>$categorie,
        ]);
        return redirect()->Route('index');
    }
}
