<?php
  include "link.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
     <div class="row">
        <div class="col-lg-5 col-12" id="main-bg" >
         
            <div>
              <h4 class="main-head">VisionEyes</h4>
              
          </div>
          <div  id="signup-btn">
            <!-- <button><span><i class="fa"></i> <p></p></span></button> -->
          </div>
           </div>
        
        <div class="col-lg-7 col-12" id="form-sec">
           <div class="form">
              <h4>Sign up to VisionEyes</h4>
             
                <form>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Username</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="User123@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Password</label>
                    <input type="password" class="form-control" id="inputAddress2" placeholder="6+ characters">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" name="fcheck" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Creating an Account means you're okay with our <span>Term of Service, Privacy Policy</span> and our default <span>Notification Settings.</span>
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn" id="c-btn"><a id="link">Create Account</a></button>

                  <div class="form-link">
                    <p>This site is protected by reCAPTCHA and the Google. </p>
                    <p><span>Privacy Policy</span> and <span>Term of Service </span>apply.</p>
                  </div>
                </form>
              
           </div>
        </div>
     </div>

     <script>
       let formCheck = document.querySelector('input[name="fcheck"]');
       let createBtn = document.getElementById("c-btn");
       let pageLink = document.getElementById("link");
  

       
       formCheck.addEventListener('change', e => {
  if(e.target.checked === true) {
  
    createBtn.style.cssText="background-color:#d9349a";
    // finishBTn.disabled(false);
    pageLink.setAttribute( "href", "profile.php" );
    formCheck.style.cssText = "background-color:#d9349a";
  }
if(e.target.checked === false) {
    console.log("Checkbox is not checked - boolean value: ", e.target.checked);
   createBtn.style.cssText="background-color:#c3c3c3";
    // finishBTn.disabled(false);
    pageLink.removeAttribute( 'href');
    formCheck.style.cssText = "background-color:#e9e9e9";

  }
  
});

     </script>
   
   <?php
     $email = $_GET['email'];
     echo $email;
   ?>
</body>
</html>