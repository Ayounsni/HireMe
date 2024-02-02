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

        // Insertion
        Service::create()
    }
}
