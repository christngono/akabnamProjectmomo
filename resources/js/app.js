import './bootstrap'

import '../sass/app.scss'


import * as bootstrap from 'bootstrap'


  function readURL(input) {

if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function(e) {
    $('#blah').attr('src', e.target.result);
   
  }

  reader.readAsDataURL(input.files[0]);
}
}

$("#imgInp").change(function() {
readURL(this);
});



function readURL2(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();
    
      reader.onload = function(e) {
    
        $('#blah1').attr('src', e.target.result);
       
      }
    
      reader.readAsDataURL(input.files[0]);
    }
    }
    
    $("#imgInp1").change(function() {
    readURL2(this);
    });

    function readURL3(input) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();
        
          reader.onload = function(e) {
           
            $('#blah2').attr('src', e.target.result);
          }
        
          reader.readAsDataURL(input.files[0]);
        }
        }
        
        $("#imgInp2").change(function() {
        readURL3(this);
        });

       
                
