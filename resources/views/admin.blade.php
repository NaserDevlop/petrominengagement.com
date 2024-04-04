


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Slabo+27px|Yesteryear">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css">

<link rel="stylesheet" href="css/adminstyle.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    i{
        float:right;
    }
    
    

             

                     @font-face {
  font-family: myFirstFon;
  src: url(./Gotham-Light.otf);
}                   
@font-face {
  font-family: boldgotham;
  src:  url(/fonts/Gotham-Font/Gotham-Bold.otf);
}

*{
font-family:myFirstFon;
   -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
}




 .card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: none;
    border-radius: 0.25rem;
}


.card.is-expanded .card__inner:after {
    /*content: "";*/
    opacity: 1;
    display: block;
    height: 0;
    width: 0;
    position: absolute;
    bottom: -30px;
    left: calc(50% - 15px);
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-bottom: 15px solid #CE2030;
}


a:hover {
    color: transparent;
    text-decoration: none;
}
</style>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">

  <div class="header">
    <h1 class="header__title">Petromin Dashboard</h1>
    <h2 class="header__subtitle">Engagement</h2>
  </div>




<!--------------------------------------------------------start----->
  <div class="cards">



<!-------------------------------------------------------Events------>
 <div class=" card [ is-collapsed ] ">
<a href="https://petrominengagement.com/admin/showevents" target="-self">
    
   
      <div class="card__inner [ js-expander ]">
        <span>Events</span>
        <i class="far fa-calendar-alt"></i>
      </div>
</a>
          </div>
          
          
          <!-------------------------------------------------------ADD Events------>
    <div class=" card [ is-collapsed ] ">
        <a href="https://petrominengagement.com/admin/addevents" target="-self">

      <div class="card__inner [ js-expander ]">
        <span>Add Events </span>
        <i class="fas fa-calendar-alt"></i>
      </div>
      </a>

     </div>


<!-------------------------------------------------------Members------>


    <div class=" card [ is-collapsed ] ">
        <a href="https://petrominengagement.com/admin/show" target="-self">

      <div class="card__inner [ js-expander ]">
        <span>Members</span>
        <i class="fa fa-users"></i>
      </div>
       </a>

    </div>

<!-------------------------------------------------------Main days------>
    <!--<div class=" card [ is-collapsed ] ">-->
    <!--    <a href="https://petrominengagement.com/admin/show" target="-blank">-->

    <!--  <div class="card__inner [ js-expander ]">-->
    <!--    <span>Main days</span>-->
    <!--    <i class="fas fa-calendar-alt"></i>-->
    <!--  </div>-->
    <!--  </a>-->

    <!-- </div>-->
     
     
     <!------------------------------------------------------- ADD Main days------>
    <!--<div class=" card [ is-collapsed ] ">-->
    <!--    <a href="https://petrominengagement.com/admin/show" target="-blank">-->

    <!--  <div class="card__inner [ js-expander ]">-->
    <!--    <span> Add Main days</span>-->
    <!--    <i class="fas fa-calendar-alt"></i>-->
    <!--  </div>-->
    <!--  </a>-->

    <!-- </div>-->
     
     <!--------------------------------------------------------Admins----->

    <div class=" card [ is-collapsed ] ">
        <a href="https://petrominengagement.com/admin/edite-personal/10" target="-self">

      <div class="card__inner [ js-expander ]">
        <span>Admins</span>
        <i class="fa fa-user-circle"></i>
      </div>
      </a>

     </div> 
<!--------------------------------------------------------Notes----->


    <!--<div class=" card [ is-collapsed ] ">-->
    <!--    <a href="https://petrominengagement.com/admin/show" target="-blank">-->

    <!--  <div class="card__inner [ js-expander ]">-->
    <!--    <span>Notes</span>-->
    <!--   <i class="far fa-sticky-note"></i>-->
       
    <!--  </div>-->
    <!-- </div>-->
     
     <!-------------------------------------------------------Add-Notes----->


    <!--<div class=" card [ is-collapsed ] ">-->
    <!--    <a href="https://petrominengagement.com/admin/show" target="-blank">-->

    <!--  <div class="card__inner [ js-expander ]">-->
    <!--    <span>Add Notes</span>-->
    <!--   <i class="far fa-sticky-note"></i>-->
       
    <!--  </div>-->
    <!-- </div>-->

<!--------------------------------------------------------Info----->
    <div class=" card [ is-collapsed ] ">
        <a href="https://petrominengagement.com/" target="-self">

      <div class="card__inner [ js-expander ]">
        <span>Info</span>
        <i class="fa fa-info-circle" aria-hidden="true"></i>
      </div>
      </a>

     </div>
<!---------------------------------------------------------end---->
    
    

  </div>

</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
  
  <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>    
  
  
<body>

</body>
</html>
