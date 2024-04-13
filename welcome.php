<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on VisionEyes</title>
    <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
    <?php
      include "header.php";
      ?>
      <?php
      include "mobileheader.php";
      ?>
      <hr>
       <div id="main-content">
         <div id="inner-div">
           <h4>Please verify your email..</h4>
           <div class="mail-icon">
            <i class="fa-solid fa-envelope email"></i>
             <i class="fa fa-check check"></i>
           </div>
           <p>Please verify the email address. We've sent a confirmation email to:</p>
           <h5>exampleinfo@gmail.com</h5>
           <p>Click the confirmation link in that email to begin using VisionEyes .</p>
           <p> Didn't receive the email ? Check your Spam folder , it may have been caught by a filter . If you still don't see it , you can <span><a href="#">resend the confirmation email</a></span> . </p>
           <p>Wrong email address ? <span><a href="#">Change it</a></span>.</p>
         </div>
       </div>
      <?php
        include "footer.php";
      ?>
</body>
</html>