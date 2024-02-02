<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
     integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>HireMe</title>
</head>
<body class="bg-blue-100">
    <div class="container">
        <div class=" text-center  mt-3  ">
            <h1 class=" display-5 ">Créer Votre Service</h1>    
        </div>
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <a href="/" class="btn bg-primary text-white"><i class="bi bi-backspace"></i> Retour</a>
        <div class="card mt-2 mx-auto p-3 bg-light mb-4">
            <div class="card-body bg-light">
                
            <div class = "container">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <div class="controls">
                        <div class="row">
                            <h1 class="mb-2 fs-4 lead text-secondary fw-medium">Contact :</h1>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Prénom<span class="text-danger">*</span></label>
                                    <input id="form_name" type="text" name="prenom" class="form-control" placeholder="Entrer prénom" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nom<span class="text-danger">*</span></label>
                                    <input id="form_lastname" type="text" name="nom" class="form-control" placeholder="Entrer nom" required="required" data-error="Lastname is required.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email <span class="text-danger">*</span></label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Entrer Email" required="required" data-error="Valid email is required.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Tel <span class="text-danger">*</span></label>
                                    <input id="form_email" type="tel" name="phone" class="form-control" placeholder="Entrer telephone" required="required" data-error="Valid email is required.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h1 class="my-2 fs-4 lead text-secondary fw-medium">Service :</h1>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_email">Titre <span class="text-danger">*</span></label>
                                    <input id="form_email" type="text" name="title" class="form-control" placeholder="Entrer titre" required="required" data-error="Valid email is required.">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_need">Catégorie <span class="text-danger">*</span></label>
                                    <select id="form_need" name="categorie" class="form-control" required="required" data-error="Please specify your need.">
                                        <option value="" selected disabled>--Choisir Catégorie--</option>
                                        @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Description<span class="text-danger">*</span></label>
                                    <textarea id="form_message" name="description" class="form-control" placeholder="Entrer la description ici." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_email">Prix en DH <span class="text-danger">*</span></label>
                                    <input id="form_email" type="number" name="prix" class="form-control" placeholder="Entrer le prix" required="required" data-error="Valid email is required.">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-end">
                                    <input type="submit" class="btn bg-primary my-2 text-white" value="Créer service">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

  
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</html>