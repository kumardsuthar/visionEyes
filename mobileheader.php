<?php
include "link.php"; ?> 
<link rel="stylesheet" href="css/mheader.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div id="mobile-header">
  <div id="mob-head-main">

    <div >
      <h4 style="margin: 0px;">VisionEyes</h4>
    </div>
    <div>
    <!-- <svg id="bars" class="bars-path-d" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512">! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg> .-->

    <div class="toggle" id="bars">
    <span></span>
    <span></span>
    <span></span>
  </div>

 

    </div>
  </div>
</div>

<div id="mob-head-list">
  <div class="user">
   
  <div class="profile">
     <i class="fa fa-user"> </i>
  </div>
  <div class="f-btn">
       <button>Find More</button>
  </div>

  </div>
  <div class="search" style="width: 100%;margin: 20px 0px;">
    <input type="text" placeholder="search">
    <i class="fa fa-search"></i>
</div>
  <ul>
    <li>About</li>
    <li>Services</li>
    <li>Go Pro</li>
    <li>lnspiration</li>
  </ul>

</div>



<script>
  // let barBtn = document.getElementById('bars');
  // let headerList = document.getElementById('mob-head-list');

  // barBtn.addEventListener('click' , ()=>
  // {
  //   headerList.style.cssText="display:block; height:fit-content;";
  //   barBtn.classList.remove('fa-bars');
  //   barBtn.classList.add('fa-close');
  // });


  $(document).ready(function () {
    $('#mob-head-list').hide(1);
   
  $('#bars').click( function(e){
    e.preventDefault();
    $('#mob-head-list').toggle(200);
    $('.toggle').toggleClass('activeh');

  });
    $('.headerItemContent').hide();
    $('.course-list').hide();
    $('.main-course-heading').click(function(e){
        e.preventDefault();
        $('.course-list').toggle(200);
      })   
    $('p.headheading').on('click', function (e) {
        e.preventDefault();
        var elem = $(this).next('.headerItemContent')
        $('.headerItemContent').not(elem).hide(100);
        elem.toggle(100);

     
     
    });
});
  
</script>


