<!DOCTYPE html>

<html>

<head>

	<title>Home - WS&PP</title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    
</head>
    
<style>
   .page-header{
        font-family: 'Lobster';font-size: 22px;
    }
    
       body{
           background-image: url("./images/wood.jpg");
       }
       
       .container{
           background-color: #f2f2f2;
       }

       .jumbotron{
           color: white;
           background-color: rgba(25, 50, 77, 0.75);
           text-align: center;
       }
    
        .fa{
            text-decoration: none;
            color: white;
        }
    
        .image-center{
            text-align: center;
        }
    
       #socialHeader{
           text-align: center;
       }
       
       #socialIcons{
           text-align: center;
           display: inline;
       }
       
       ul.c{
           text-decoration: none;
           color: black;
       }
       
       .fa:hover {
           text-decoration: none;
           color: grey;
       }
       
       .fa-facebook {
           color: white;
       }
    
        .fa-instagram {
            color: white;
       }
       
        .fa {

            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
       }
        
    .btn-group{
        text-align: center;
    }
    .btn-secondary{
        background-color: rgb(25, 50, 77);
        
    }

    #social{
        color:white;
        background-color: rgba(25, 50, 77, 0.75);
    }
    
    
    </style>

<body>

  <div class ="container">
      <br>
    <div class="page-header">
      <h1 class="mb-4">Wood Stains and Paper Planes</h1>
    </div>

    <!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item px-3">
                    <a class="nav-link active" href="./main.php">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="./gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="./social.php">Seasonal</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="./customize.php">Order</a>
                  </li>
                </ul> 
            </div>
           
    </nav>
      
    <div class="jumbotron my-3">
      <h1><strong>Welcome to Wood Stains and Paper Planes</strong></h1>
        <p>Here we craft custom cards and decor to personalize any event, any occasion, any moment</p>
        <td><a href = "#store" class="fa fa-chevron-down" aria-hidden="true"></a></td>
      </div>
      
          <div class="mx-auto text-center">
         <img class="img-responsive col-7" src="./images/gallery/s16.jpg">
          </div>
      
      <a id = "store"></a>
       <div class="jumbotron my-3">
      <h1><strong>Seek Inspiration</strong></h1>
        <p>Browse our gallery that is filled with many of our past projects from customers just like you</p>
        <td><a href = "#gallery" class="fa fa-chevron-down" aria-hidden="true"></a></td>
        <td><a href = "./gallery.php" class="fa fa-chevron-right" aria-hidden="true"></a></td>
      </div>
      
      <div class="row m-5">
        <div class="col-md-4">
            <div class="card p-3">
                <img class="card-img-top img-fluid" src="./images/gallery/c15.jpg">
                </div>
            </div>
          
           <div class="col-md-4">
            <div class="card p-3">
                <img class="card-img-top img-fluid" src="./images/gallery/h7.jpg">
                </div>
            </div>
          
           <div class="col-md-4">
            <div class="card p-3">
                <img class="card-img-top img-fluid" src="./images/gallery/s12.jpg">
                </div>
            </div>
        </div>
      
       <a id = "gallery"></a>
       <div class="jumbotron my-3">
      <h1><strong>Seasonal Collections</strong></h1>
        <p>Get a festive card for someone important in your life this upcoming holiday</p>
        <td><a href = "#seasonal" class="fa fa-chevron-down" aria-hidden="true"></a></td>
           <td><a href = "./social.php" class="fa fa-chevron-right" aria-hidden="true"></a></td>
      </div>
      
          <div class="mx-auto text-center">
            <img class="img-fluid col-7" src="./images/gallery/h1.jpg">
          </div>
      
      <a id = "seasonal"></a>
       <div class="jumbotron my-3">
        <h1><strong>Customize Your Own Product</strong></h1>
        <p>From Card to Chalkboard we can make it.</p>
        <td><a href = "./customize.php" class="fa fa-chevron-right" aria-hidden="true"></a></td>
      </div>
      
       <div class="row m-5">
        <div class="col-md-4">
            <div class="card p-3">
                <img class="card-img-top img-fluid" src="./images/gallery/s13.jpg">
                </div>
            </div>
          
           <div class="col-md-4">
            <div class="card p-3">
                <img class="card-img-top img-fluid" src="./images/gallery/s7.jpg">
                </div>
            </div>
          
           <div class="col-md-4">
            <div class="card p-3">
                <img class="card-img-top img-fluid" src="./images/gallery/c13.jpg">
                </div>
            </div>
        </div>
      
      
      <div class="" id="social">
        <h3 id="socialHeader" class="pt-3">You can also find us at</h3> 
        <ul class="" id="socialIcons">
            <li class="nav-item pb-2" id="facebook">
                 <a href="https://www.facebook.com/WoodStainsPaperPlanes/" class="fa fa-facebook" ></a>
            </li>
            <li class="nav-item py-2" id="insta">
                <a href="https://www.instagram.com/wood.stains.paper.planes/" class="fa fa-instagram"></a>
            </li>
            <li class="nav-item pb-5" id="hashtag">
                <a href="https://www.instagram.com/explore/tags/woodstainspaperplanes/" style="color: white; text-decoration: none;">#woodstainspaperplanes</a>
            </li>
        </ul>
    </div>
      <br>
    </div>
    


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
