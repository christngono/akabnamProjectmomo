@extends('layouts.app')

@section('content')

  <div class='row'>
    <div class='col-12 col-md-6 part1b'>
      <div class="align-self-start">
      <a href="{{route('home')}}"><img src='{{asset('images/logo-akab1.png')}}' height="70"> </a>
      </div> 
  </div>
    <div class='col-12 col-md-6 part2'>  
      <div class="row">
        <div class=" px-5 col align-self-center">
            <h2>Y'a-t-il un sujet sur lequel vous avez besoin d'aide?</h2>
            <p>Choisissez autant de thèmes que vous le souhaitez. Nous vous donnerons accès à des ressources pour vous accompagner dans votre developpement.</p>
            <div class="row justify-content-around">
                <div class=" col-md-4 col-4 form-check-p">
                    <input class="form-check-input" type="radio" name="choice1" id="choice1" value="option4">
                    <div><img src='{{asset('images/SVG/ico7.svg')}}'  class='ico' alt=""></div>
                    <div>
                        <label class="form-check-label" for="choice1">
                            Vendre en ligne
                           </label>
                    </div>  
                </div>
                 
                <div class=" col-md-4 col-4 form-check-p">
                    <input class="form-check-input" type="radio" name="choice2" id="choice2" value="option4">
                    <div><img src='{{asset('images/SVG/ico6.svg')}}'  class='ico' alt=""></div>
                    <div>
                        <label class="form-check-label" for="choice2">
                            photographier mes produits
                           </label>
                    </div>  
                </div>
                <div class=" col-md-4 col-3 form-check-p">
                    <input class="form-check-input" type="radio" name="choice3" id="choice3" value="option4">
                    <div><img src='{{asset('images/SVG/ico7.svg')}}'  class='ico' alt=""></div>
                    <div>
                        <label class="form-check-label" for="choice3">
                            Promouvoir mes produits
                           </label>
                    </div>  
                </div>
                <div class=" col-md-4 col-3 form-check-p">
                    <input class="form-check-input" type="radio" name="choice4" id="choice4" value="option4">
                    <div><img src='{{asset('images/SVG/ico7.svg')}}'  class='ico' alt=""></div>
                    <div>
                        <label class="form-check-label" for="choice4">
                            Developper ma notoriété
                           </label>
                    </div>  
                </div>
                <div class=" col-md-4 col-4 form-check-p">
                    <input class="form-check-input" type="radio" name="choice5" id="choice5" value="option4">
                    <div><img src='{{asset('images/SVG/ico7.svg')}}'  class='ico' alt=""></div>
                    <div>
                        <label class="form-check-label" for="choice5">
                            Le nom et la stratégie
                           </label>
                    </div>  
                </div>
                <div class=" col-md-4 col-4 form-check-p">
                    <input class="form-check-input" type="radio" name="choice6" id="choice6" value="option4">
                    <div><img src='{{asset('images/SVG/ico7.svg')}}'  class='ico' alt=""></div>
                    <div>
                        <label class="form-check-label" for="choice7">
                            Tester une nouvelle offre
                           </label>
                    </div>  
                </div>
                  
                  
            </div>
            
            <div class='my-5'>
              <a href="{{route('createshop')}}"><span class='button1'>Ignorer</span></a><a  href="{{route('createshop')}}"><span class='button'>Suivant</span></a></div>
                
            
       </div>
  </div>
</div>
 
@endsection