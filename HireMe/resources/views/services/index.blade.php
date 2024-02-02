@extends('layout')
@section('content')

<nav class="bg-gray-100 dark:bg-gray-900  w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
        <img src="{{ asset('image/hiire-removebg.png') }}" class="h-8" alt="Flowbite Logo">
     
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <a href="/service ">
        <button type="button" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Créer un service</button></a>
    </div>
    </div>
</nav>
<h1 class="display-5 mt-3 text-center fw-bold  "> Services</h1>
<div class="container d-flex flex-row flex-wrap justify-content-evenly align-items-center ">
    @foreach($services as $service)
     <div class="card my-4 shadow-md w-auto" style="max-width: 43rem;">
     <div class="row g-0">
         <div class="col-md-4">
             <img src="{{ asset('image/me.jpg') }}" class="img-fluid w-auto h-100"  alt="image">
         </div>
         <div class="col-md-8">
             <div class="card-body">
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <h5 class="card-title fw-bold fs-5 "><a>{{ $service->title }}</a></h5>
                    <h5 class="fw-medium fs-6 ">Catégorie: <span class="text-danger">{{ $service->categorie->title }}</span></h5>
                </div> 
                 <p class="card-text text-sm ">{{ $service->description }}</p>
                 <p class="mb-2 fw-medium">Prix : <span class="text-primary">{{ $service->price }}dh</span></p>
                 <hr class="my-2" />
                 <p class="text-danger fw-light fs-5 lead"><strong>Contact</strong></p>
                 <div class="d-flex flex-column flex-md-row justify-content-between">
                     <div class="d-flex  flex-column">
                         <p class="fw-medium"><i class="bi bi-person-circle"></i> Nom : <span class="text-primary">{{ $service->nom }}</span></p>
                         <p class="fw-medium"><i class="bi bi-person-circle"></i> Prenom : <span class="text-primary">{{ $service->prenom }}</span></p>
                     </div>
                     <div class="d-flex flex-column">
                        <p class="fw-medium"><i class="bi bi-envelope-fill"></i> Email : <span class="text-primary">{{ $service->email }}</span></p>
                        <p class="fw-medium"><i class="bi bi-telephone-fill"></i> Telephone : <span class="text-primary">{{ $service->telephone }}</span></p>
                     </div>
                 </div>
                 <p class="text-sm fw-bold text-secondary text-end mt-2">Créer le : <span class="text-danger ">{{date('Y-m-d', strtotime( $service->created_at))}}</span></p>
             </div>
         </div>
     </div>
       </div>
    @endforeach
  </div>
  @endsection

  