@extends('layouts.app')

@section('content')

  <div class='row'>
    <div class='col-md-6 col-12 part1'>
      <div class="align-self-start">
      <a href="{{route('home')}}" ><img src='{{asset('images/logo-akab1.png')}}' height="70"> </a>
      </div> 
   </div>

    <div class='col-md-6 col-12 part2'>  
      <div class="row">
        <div class=" px-5 col align-self-center">
          <div>
            <h1 class=''>Si vous avez une idée de business ou un rêve,
              vous pouvez le vendre avec akabnam.</h1>
          </div>
          <div>
            <p class='py-4 mess'>Nous sommes ravis de vous aidez à concevoir votre boutique.</p>
          </div>

          <div class='col-12'>
            
               <a class="button" href="{{route('signupstep1')}}">C'est partie!😀</a>
          </div>
          
            <div class='col-12 pt-4'>
               <a class=' button' href="{{route('videodisplay')}}">Voir video Demo</a></div>
          </div>

           <div class='py-5 cond'>En cliquant sur "c'est partie" et en ouvrant une boutique sur Akabnam vous acceptez notre <a href="#">règlement des vendeurs</a>, <a href="#"></a>le règlement akabnam paiements
            <a href="#">Nos conditions d'utilisations</a> et <a href="#">notre règlement concernant la confidentialité</a>
           </div>
        </div>
      </div>
           
    </div>
  
  </div>
 
@endsection