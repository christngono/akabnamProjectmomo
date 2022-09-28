@extends('layouts.app2')

@section('content')
<div class="container bg-w">
            <div class='row py-3 progression'>
                <div class='col-md-4 col-4'>
                <div class='bot'>1</div>
                <div class="point"> <a href='{{route('createshop')}}'>Créez votre boutique</a> </div>
                </div>
                <div class='col-md-4 col-4'>
                <div class='bot'>2</div>
                <div class="point"> <a href='{{route('createid')}}'> Choisissez un mode paiement</a></div>
                </div>
                <div class='col-md-4 col-4'>
                <div class='bot1'>3</div>
                <div class="point"> <a href='{{route('createpayment')}}'> Commencez à vendre</a></div>
                </div>             
            </div>

            <div class="row my-2 py-5 justify-content-center">
                <div class="col-md-6 col-12 title">
                        <h2>Comment vous serez payés</h2>
                        <p> MTN MOMO permet à vos acheteurs d'avoir accès à de nombreux modes de paiements</p>
                 </div>
            
              <div class="row justify-content-center">
                <div class='col-md-6 col-12 forma'>
                   <form>
                        <div class="form-group">
                             <label class='ft' class='ft' for="shop">Quel est votre nom?</label>
                             <input type="text" class="form-control" id="nameshop" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class='ft' for="shop">Votre numéro de téléphone</label>
                            <input type="text" class="form-control" id="phone" placeholder="">
                       </div>
                       <div class="form-group">
                        <label class='ft' for="shop">Quelle est votre adresse ?</label>
                        <input type="text" class="form-control" id="address" placeholder="">
                   </div>
                   <div class='col-md-10 consi'>
                    <p>Télécharger une image de votre carte identité ou Passport, ou carte de séjour</p><br/>
                   </div>
                   <div class="input-group mb-3">
                   
                    <label class="" for="idi1">
                         <div class='identityb'>
                         <img id="idi"  src='{{asset('images/SVG/doland.svg')}}' height='50' alt="">
                       </div>
                    </label>
                    <input type="file" class="form-control d-none invisible" id="idi1">
                  <div>Image identité</div>
               </div>



                      
                   </form>

                   
              </div>


             <div class="my-5 col-md-9 col-12  ">
              <div class="float-end">
              <a href='{{route('createpayment')}}'  class=''> <span class='button1b'>Ignorer</span> </a>
              <a href='{{route('createpayment')}}'  class=''> <span class='buttonb'>Suivant</span></a> 
            </div>    
            </div>  

<script>
 function readURL4(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
   
    $('#idi').attr('src', e.target.result);
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#idi1").change(function() {
readURL4(this);
});

</script>
</div>
 
@endsection


