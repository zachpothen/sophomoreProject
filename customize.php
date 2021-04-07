<!DOCTYPE html>

<html>

<head>

	<title>Order - WS&PP</title>
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


    <?php
    
    $descriptionVal = "";
    
    if(isset($_POST['pictureId'])){
        
        include_once "db_connection.php";
        $con = new Connection();
        $localPDO = $con->openConnection();
        $desc = $localPDO->prepare("SELECT `title` FROM `seasonal` WHERE `value` = :id");
        $desc->bindValue(":id", $_POST['pictureId']);
        $desc->execute();
        
        $descriptionVal = $desc->fetch()["title"];
    }
        
    ?>
    
<body>
    <div class ="container">
        <br>
    <div class="page-header">
      <h1 class="mb-4">Wood Stains and Paper Planes</h1>
    </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        
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
                  <li class="nav-item px-3">
                    <a class="nav-link" href="./social.php">Seasonal</a>
                  </li>
                  <li class="nav-item active px-3">
                    <a class="nav-link" href="./customize.php">Order<span class="sr-only">(current)</span></a>
                  </li>
      
                </ul> 
            </div> 
    </nav> 
    </div>



		<div class="container">
            
            <h2 class="text-center p-3">Your Custom Creation Is A Few Clicks Away</h2>
            <p class="text-center p-3">Since all of our products are catered to the customers individual wants and needs we have a special order for to get that progress going<br>
            
            <ol class="pb-4" type="1" id="list">
                <li>Fill out the order form on this page so we can start sketching the design of your product</li>
                <li>Within 2-3 business days you will get a follow up email asking more specific questions based on the desired product</li>
                <li>After 3-5 bussiness days you will get another email with a sketch of your product prototype.</li>
                <li>Once we perfect your product, we will begin the creation process and the product will show up to your door within 7 business days.</li>
            </ol>      
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product Type</th>
                  <th scope="col">Base Price*</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Card</td>
                  <td>$10</td>
                </tr>
                <tr>
                  <td>Sign</td>
                  <td>$25</td>
                </tr>
                <tr>
                  <td>Painting</td>
                  <td>$15</td>
                </tr>
              </tbody>
            </table>
            
            
            <form action="customize.php" method="post"  enctype="multipart/form-data">
                
            <?php
                $alert = "";


                include_once "db_connection.php";
                $con = new Connection();
                $localPDO = $con->openConnection();

                if(isset($_POST['submitButton'])){

                    if($_POST["name"] == false){
                        $alert = "Order name cannot be blank";
                    }elseif(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
                        $alert = "Not a valid email. Please try again.";
                    }elseif($_POST["type"] == "--"){
                        $alert = "Indicate the type of product";            
                    }elseif($_POST["pRange"] == "--"){
                        $alert = "Indicate price range";            
                    }elseif($_POST["description"] == false){
                        $alert = "Please insert a description";
                    }elseif($_POST["description"] == true && $_POST["name"] == false){
                    }else{

                    $submitForm = $localPDO->prepare("INSERT INTO Orders (name, email, type, pRange, description) VALUES (:name, :email, :type, :pRange, :description)");
                    $submitForm->bindValue(":name", $_POST["name"]);
                    $submitForm->bindValue(":email", $_POST["email"]);
                    $submitForm->bindValue(":type", $_POST["type"]);
                    $submitForm->bindValue(":pRange", $_POST["pRange"]);
                    $submitForm->bindValue(":description", $_POST["description"]);
                    $submitForm->execute();
                        
                    $id = $localPDO->lastInsertId();
                    move_uploaded_file($_FILES['pic']['tmp_name'], "./images/orders/orderNum$id.jpg");
                        
                    echo "<div class=\"alert alert-success p-3 text-center\"> <strong>Thank you $_POST[name] for your interest in Wood Stains and Paper Planes </strong> <br> You should recieve a follow up email within 3-5 bussiness days to start the creation process!</div>";

                    }
                    if(strlen($alert) != ""){
                        echo "<div class=\"alert alert-danger p-3\">
                        <strong>Error! </strong> $alert</div>";
                    }
                }

                $con->closeConnection();
            ?>    
<!-- name--> 
            <h4 class="px-3 pt-3">Name</h4>
			<div class="input-group input-group-lg p-3">
  			   <input type="text" class="form-control" placeholder="Firstname Lastname" name="name">
			</div>
<!-- email-->
			<h4 class="px-3 pt-3">Email</h4>    
			<div class="input-group input-group-lg p-3">
  			   <input type="text" class="form-control" placeholder="example@email.com" name="email">
			</div>  

<!-- type-->
            <h4 class="px-3 pt-3">Product Type</h4>
			<div class="form-group p-3">
             <select class="custom-select" id="inputGroupSelect01" name="type">
                <option value="--">--</option>
                <option value="Card">Card</option>
                <option value="Decor">Decor</option>
                <option value="Painting">Painting</option>
                <option value="Other">Other</option>
  </select>
  </div>
			
<!-- price range-->
                <h4 class="px-3 pt-3">Price Range</h4>
			<div class="form-group p-3">
             <select class="custom-select" id="inputGroupSelect01" name="pRange">
                <option value="--">--</option>
                <option value="10-24">$10-$24</option>
                <option value="25-49">$25-$49</option>
                <option value="50+">$50+</option>
  </select>
  </div>
<!-- description-->
            <h4 class="px-3 pt-3">Description</h4>
			<div class="form-group p-3">
                <?php if($descriptionVal != ""){?>
                <textarea class="form-control" rows="5" name="description">Desired Card: <?php echo $descriptionVal; ?> </textarea>
                <?php }else{ ?>
                <textarea class="form-control" rows="5" name="description"></textarea>
                <?php } ?>
            </div>
			
<!-- pics-->
            <h4 class="px-3 pt-3">Optional: Picture Upload in .jpg Format</h4>
            <div class="form-group p-3">
                <input type="file" class="form-control-file" name="pic">
            </div>
                
<!-- submit-->
			<div class="btn-group btn-group-lg p-3" id="submitButton">
				<button type="submit" class="btn btn-default" name="submitButton">Submit</button>
			</div>
        </form>
            
            <p>*Prices may vary based on size and materials</p>
            
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
