@extends('layouts.app2')

@section('content')


        

                    <!--start image-->
     <div class="container">
        <div class="col-12 col-md-4 mt-2">            
        <div class="mySlides ">
          
            <img src="{{asset('images/habit1.jpg')}}" style="width:100%" height='350px'>
        </div>

        <div class="mySlides">
            
            <img src="{{asset('images/habit2.jpg')}}" style="width:100%" height='350px'>
        </div>

        <div class="mySlides">
            <img src="{{asset('images/habit3.jpg')}}" style="width:100%" height='350px'>
        </div>
    </div> 

        <!-- Next and previous buttons -->
        <div class="col-6">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
        <!-- Thumbnail images -->
        <div class="row1 col-md-5 col-10">

            <div class="column1 ">
            <img class="demo cursor" src="{{asset('images/habit1.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column1">
            <img class="demo cursor" src="{{asset('images/habit2.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column1">
            <img class="demo cursor" src="{{asset('images/habit3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
        </div>

       
    </div>              
                <!--- end image-->
<div class="container">

        <div class="row pt-5 ">
            <div class='col-6 pb-1 bigname'>
                <span class='name'> BIO-E habit</span>
                <p class='shopname'>
                    MaBio sap
                </p>
            </div>
        </div>


        <div class="row">

            <div class='col-12 col-md-3 pt-3 price'>
                <span class='mount'>10 000</span><span class='unit'>FCFA</span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 des">
                <span class="">
                    <h2>Descriptif de l'article</h2>
                </span>
                <p>C'est un vêtement bio & evolutif qui vous permet d'habiller vos enfants à moindre coût</p>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-md-6 des">
                <span class="">
                    <h2>Détails de l'article</h2>
                </span>
                <p> Grâce au vetement & evolutif BIO-E:
                    <ul>
                        <li>Protège contre les rayons du solleil</li>
                        <li>Facile à laver</li>
                        <li>bio-dégradable</li>
                        <li>Economique</li>
                        <li>Durable</li>
                        <li>Protège</li>
                    </ul>
                </p>
            </div>

     </div>
        <div class="row">
            
            <div class='col-md-6 col-12 forma'>
                <form>
                     <div class="form-group">
                          <label class='ft' for="shop">Téléphone</label>
                        
                          <input type="text" class="form-control" id="shop" placeholder="">
                     </div>
                     <div class="form-group">
                        <label class='ft' for="shop">votre nom</label>
                      
                        <input type="text" class="form-control" id="shop" placeholder="">
                   </div>
 
                </form>
           </div>
         
        </div>

       <div class="row justify-content-start py-4">
        <div class="col-10">
            <a href="" ><span class='buttonb'>Payer <img src="{{asset('images/SVG/iconmomo.svg')}}" alt="" height='30'></span></a>
        </div>   
       </div>

    </div>

<script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


@endsection