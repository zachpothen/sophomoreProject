<!DOCTYPE html>

<html>

<head>

	<title>Seasonal - WS&PP</title>
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

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item px-3">
                    <a class="nav-link" href="./main.php">Home</a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="./gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item active px-3">
                    <a class="nav-link" href="./social.php">Seasonal<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="./customize.php">Order</a>
                  </li>
      
                </ul> 
            </div>   
    </nav> 
        
        <div class="jumbotron m-3" id="holidayHeader">
            <h1 class="mb-2">Valentines day</h1>
            <h4 class="p-2">Get a card for a loved one in you life today! <br> Cards are $10 and shipped to you for free!</h4>
            
            <img class="img-fluid col-10" src="./images/vday/multi.jpg" id="imgHeader">
        
      </div>
      <form action="customize.php" method="post">
 <div class="row m-5">
      <?php
      
        include_once "db_connection.php";
        $con = new Connection();
        $localPDO = $con->openConnection();
        $pics = $localPDO->prepare("SELECT `value`, `filepath`, `title` FROM `seasonal`");
        $pics->execute();
        $result = $pics->fetchAll();
      
        for($i = 0; $i < count($result); $i++){
        $value = $result[$i]["value"];
        $path = $result[$i]["filepath"];
        $title = $result[$i]["title"];
      
      ?>

        <div class="col-md-4">
            <div class="card p-3">
                <img class="card-img-top img-fluid" src= <?php echo $path ?> >
                <div class="card-block">
                    <h4 class="card-title mt-3"><?php echo $title ?></h4>           
                    <form action="customize.php" method="post">
                    <input type="hidden" name="pictureId" value=<?php echo $value ?>>
                    
                    <?php if($path != "./images/vday/background.jpg"){?>
                    
                    <button type="submit" class="btn btn-default" >Order</button>
                    
                    
                        <?php } ?>
                        
                        </form>
                </div>
            </div>
        </div>
 
      
      <?php
        }          
      ?>
      
        </div>
</form> 
        <div class="" id="social">
        <h3 id="socialHeader"  class="pt-3">You can also find us at</h3> 
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
