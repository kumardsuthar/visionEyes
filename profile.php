<?php
  include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile select</title>
</head>
<body>
    <div id="profile">
       <h4>Welcome-- Let's Create Your Profile</h4>
       <p>Let others get to know you better. You can do these later.</p>
       
       <h5>Add an Avatar  </h5>

       <div id="profile-sel">
           <div class="round-div">
            <div class="cus-img">
              <img  alt="" id="cus-img">
            </div>
                <div class="sel">
                  <label for="img-select">
                    <i class="fa-solid fa-camera" id="plus-icon"></i>
                    <input type="file"  name="img" id="img-select" style="display: none;">
                  </label>
                </div>
           </div>

           <div class="sel-box">
               <label for="sel-img">
                <p>Choose image</p>
                <input type="file" name="img" id="sel-img" style="display: none;">
                
               </label>
           </div>
       </div>

       <div class="location">
           <h5>Add your location</h5>

           <input type="text" name="location" placeholder="Enter a location"  id="l">
       </div>
       <div class="">
           <button class="next-btn" id="n-btn"><a id="link">Next</a></button>
       </div>
    </div>
    
    <script>
       var someCheckbox = document.querySelectorAll( 'input[name="img"]'); 
      let nextBtn = document.getElementById("n-btn");
    let pageLink = document.getElementById("link");
    let cusImg = document.getElementById("cus-img");
    let plusIcon = document.getElementById("plus-icon");

   for (let i = 0; i < someCheckbox.length; i++) {
    someCheckbox[i].addEventListener('change', e => {
  if(e.target.value != " ") {
    console.log("Checkbox is checked - boolean value: ");
    nextBtn.style.cssText="background-color:#d9349a";
    pageLink.setAttribute( "href", "feature.php" );
    cusImg.setAttribute('src' , URL.createObjectURL(e.target.files[0]));
    plusIcon.style.cssText="transform: scale(0)";
    
  }
if(e.target.value == " ") {
    console.log("Checkbox is not checked - boolean value: ");
   
    nextBtn.style.cssText="background-color:#c3c3c3";
    pageLink.removeAttribute("href");
    plusIcon.style.cssText="transform: scale(1)";


  }
});
   }
    </script>
</body>
</html>