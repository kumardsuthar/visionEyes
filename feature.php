<?php
  include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature</title>
    <link rel="stylesheet" href="css/ft.css">
</head>
<body>
    <div id="feature">
         <h4>What brings you to VisionEyes?</h4>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>


       <div class="ft-div">
       <div class="feature-sel">
             <div class="feature-opt" id="optf-1">
               <label for="op-1">
                
                <input type="checkbox" name="fopt" id="op-1">
                <div class="radio-btn">
                
                    <img src="image/01.png" alt="">
                
                <h5>Basic Lorem ipsum dolor sit amet.</h5>
                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officiis ullam necessitatibus aliquam doloremque.  </p>
                 <div class="icon">
                  <i class="fa fa-check"></i>
                 </div>
                </div>
               </label>
             </div>

             <div class="feature-opt">
                <label for="op-2">
                
                    <input type="checkbox" name="fopt" id="op-2">
                    <div class="radio-btn">
                    
                      <img src="image/01.png" alt="">

                      
                    <h5>Basic Lorem ipsum dolor sit amet.</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officiis ullam necessitatibus aliquam doloremque.
                    </p>
                    <div class="icon">
                      <i class="fa fa-check"></i>
                     </div>
                    </div>
                   </label>
             </div>

             <div class="feature-opt">
                <label for="op-3">
      
                    <input type="checkbox" name="fopt" id="op-3">
                    <div class="radio-btn">
                     
                        <img src="image/01.png" alt="">
  
                       
                    <h5>Basic Lorem ipsum dolor sit amet.</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officiis ullam necessitatibus aliquam doloremque.
                    </p>
                    <div class="icon">
                      <i class="fa fa-check"></i>
                     </div>
                    </div>
                   </label>
             </div>

         </div>
       </div>

       <div>
        <h5>Anything else? You can select multiple.</h5>
        <button class="next-btn" id="f-btn" ><a  id="link">Finish</a></button>

       </div>

    </div>
   <script>
    var someCheckbox = document.querySelectorAll( 'input[name="fopt"]'); 
    let finishBTn = document.getElementById("f-btn");
    let pageLink = document.getElementById("link");
   for (let i = 0; i < someCheckbox.length; i++) {
    someCheckbox[i].addEventListener('change', e => {
  if(e.target.checked === true) {
    console.log("Checkbox is checked - boolean value: ", e.target.checked);
    finishBTn.style.cssText="background-color:#d9349a";
    // finishBTn.disabled(false);
    pageLink.setAttribute( "href", "welcome.php" );
    
  }
if(e.target.checked === false) {
    console.log("Checkbox is not checked - boolean value: ", e.target.checked);
    finishBTn.style.cssText="background-color:#c3c3c3";
    // finishBTn.disabled(true);
    pageLink.removeAttribute("href");

  }
});
    
   }
   </script>

</body>
</html>