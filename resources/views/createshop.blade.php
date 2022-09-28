@extends('layouts.app2')

@section('content')
<div class="container bg-w">
   

   <div class='row py-3 progression'>
    <div class='col-md-4 col-4'>
    <div class='bot'>1</div>
    <div class="point"> <a href='{{route('createshop')}}'>Créez votre boutique</a> </div>
    </div>
    <div class='col-md-4 col-4'>
    <div class='bot1'>2</div>
    <div class="point"> <a href='{{route('createid')}}'> Choisissez un mode paiement</a></div>
    </div>
    <div class='col-md-4 col-4'>
    <div class='bot1'>3</div>
    <div class="point"> <a href='{{route('createpayment')}}'> Commencez à vendre</a></div>
    </div>             
</div>

  <div class="row my-2 py-5 justify-content-center">
    <div class="col-md-6 col-12 title">
            <h2>Commencez maintenant et créez votre boutique</h2>
            <p>Vous pouvez renseignez un nom ou un descriptif provisoir et le modifier plus tard.🤗 </p>
     </div>

  <div class="row justify-content-center">
    <div class='col-md-6 col-12 forma'>
       <form method='POST' action=''>
            <div class="form-group">
                 <label class='ft' for="shop">Donnez un nom à votre boutique</label>
               
                 <input type="text" name='nameshop' class="form-control" id="shop" placeholder="">
            </div>
            <div class="form-group">
                 <label class='ft' for="descriptif">Que fait votre boutique?</label>
                 <textarea class="form-control" id="descriptif" rows="3"></textarea>
            </div>
       </form>
  </div>
 </div>

<!-- section ajout article -->
<div class='col-md-6'>
     <p class='my-4'>

      <a class="buttonb " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <img src='{{asset('images/SVG/addb.svg')}}' alt='' height='20'/> Ajouter votre premier produit
      </a>
     </p>
      <div class="collapse forma" id="collapseExample">
        <div class="card card-body">
          <h3>Créer votre premier article</h3>
          <p>Entrér l'essentielle , mettre de belle photos à defaut contactez-nous pour vous aider</p>
          <form>
            <div class="row">
            <div class="mb-3 col-4">     
              <label class="" for="imgInp">
                   <div class='identityb'>
                   <img id='blah' src='{{asset('images/SVG/imagephoto.svg')}}' height='30' alt="">
                 </div>
              </label>
              <input type="file" class="form-control d-none invisible" id="imgInp">
              <span>Photo</span>
            </div>
            <div class="mb-3 col-5">     
              <label class="" for="imgInp1">
                   <div class='identityb'>
                   <img  id='blah1' src='{{asset('images/SVG/photo1.svg')}}' height='30' alt="">
                 </div>
              </label>
              <input type="file" class="form-control d-none invisible" id="imgInp1">
              <span>Deuxième image</span>
            </div>
            <div class="mb-3 col-3">
              <div class='identityb'>     
              <label class="" for="imgInp2">
                   <img id='blah2' src='{{asset('images/SVG/photo2.svg')}}' height='30' alt="">
                 </div>
              </label>
              <input type="file" class="form-control d-none invisible" id="imgInp2">
              <span>Troisieme image</span>
            </div>

          </div>
            <div class="form-group">
                <label class='ft mb-2' for="shop">Nom de l'article</label>
                <input type="text" class="form-control" id="shop" placeholder="">
            </div>
            <div class="form-group">
                <label class='ft mb-2' for="descriptif">Descrivez votre article ou service <span class='akabmessag'>courte descitif sur le produit</span></label>
                <textarea class="form-control" id="descriptif" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label class='ft mb-2' for="descriptif">Détail du produit <span class='akabmessag'>le bénéfice que gagne l'utilisateur</span></label>
              <textarea class="form-control" id="descriptif" rows="3"></textarea>
          </div>
            <div class="form-group">
                <label class='ft' for="shop">Montant</label>
                <input type="text" class="form-control" id="montant" placeholder="">
            </div>

          </form>
        </div>
      </div>
  </div>

<!-- end of section -->
 
 <!-- Button creaete a product -->
 
    <div class="my-5 col-md-9 col-12  ">
      <div class="float-end">
      <a href='{{route('createid')}}'  class=''> <span class='button1b'>Ignorer</span> </a>
      <a href='{{route('createid')}}'  class=''> <span class='buttonb'>Suivant</span></a> 
    </div>    
    </div>   
    
    
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection