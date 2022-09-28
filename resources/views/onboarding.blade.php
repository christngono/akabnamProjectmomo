@extends('layouts.app')

@section('content')

  <div class='row'>
    <div class='col-md-6 col-12 part1a'>
      <div class="align-self-start">
      <a href="#"><img src='{{asset('images/logo-akab1.png')}}' height="70"> </a>
      </div> 
    </div>
    <div class='col-md-6 col-12 part2'>  
      <div class="row ">
        <div class="px-5 ti col ta-part2">
            <h2>Qu'est ce qui vous amène sur akabnam?</h2>
            <p>Nous allons vous aider à reusir, que vous soyez professionel ou débutant dans la vente en ligne</p>
            <div class="form-check ta">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Je commence tout juste à me lancer dans la vente
                </label>
              </div>
              <div class="form-check ta">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  j'ai une entreprise et je voudrais commencer à vendre en ligne
                </label>
              </div>
              <div class="form-check ta">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                  je veux developper mon activité en ligne en vendant sur Akabnam
                </label>
              </div>
              <div class="form-check ta">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option4">
                <label class="form-check-label" for="exampleRadios4">
                 je veux decouvrir le site
                </label>
              </div>
              <div class="mt-5">
                <a  href="{{route('signupstep2')}}"><span class='button1'>Suivant</span></a>
                <a  href="{{route('signupstep2')}}"><span class='button'>Ignorer </span></a>
            </div>
      </div>

       
       
        
       
    </div>
    
  </div>
 
@endsection