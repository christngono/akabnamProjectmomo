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
            <h2>Choisissez le  mode de paiement</h2>
            <p> Copiez et partagez ce lien pour commencer à accepter des paiements.</p>
     </div>
    </div>

    <div class="row my-2 py-5 justify-content-center roo py-2">
        <div class='col-md-3 col-6 my-2'>
             <div class='tib text-center py-2'> Lien de paiement</div>
             <div class='akablink text-center py-3'>
               <a href="https://wa.me/?text=clique ici pour payer http://127.0.0.1:8000/article/show"
              data-action="share/whatsapp/share"
              target="_blank">
               <img src='{{asset('images/SVG/akab.svg')}}' height="50"></a>  <div > <a href="" class='shart'>https://akabnam.com</a></div> </div>    
        </div>
        <div class='col-md-3 col-6 my-2'>
            <div class='tib text-center py-2'> QR-CODE</div>
            <div class='akablink text-center py-3'> <img src='{{asset('images/SVG/qrcode.svg')}}' height="70"></div>    
       </div>
       <div class='col-md-3 col-10 my-2'>
        <div class='tib text-center py-2'> Télécharger l'extension wordpress</div>
        <div class='akablink text-center py-3'><img src='{{asset('images/SVG/word.svg')}}'  height="70"></div>    
       </div>

    </div>


    

    <div class="row my-5 justify-content-end">
        <div class='col-md-6 col-12'>
        <a  href="{{route('showarticle')}}"><span class='buttonb'>Terminer</span></a></div>  
      
      </div> 







</div>



@endsection