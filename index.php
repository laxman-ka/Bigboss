<!DOCTYPE html>
<?php 

include "listhelper.php";

$name = $_REQUEST['short_name'];

$obj  = new Laxman();
$res  = $obj->getlist("contestants", "short_name like '$name'");
$row  = mysqli_fetch_assoc($res);
?>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>Big Boss Game Show</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 </head>

  <body>
    
    
  
  <!-- Preloader Start -->
    <div class="preloader">
    <p>Loading...</p>
     </div>
    <div class="row">
         
    </div>
    <h3 class="text-center"><?php echo $row['name']; ?> Profile</h3>
    <!-- Home Section Start -->
    <section style="padding-top:70px">
        <div class="container">
                
                 <div class="col-sm-offset-2 col-md-4 col-sm-6 margin-left-setting">
                    <div>
                        
                     <div class="table-responsive">
              <table class="table">
              <tr>
                  <td>Name</td>
                <td><?php echo $row['name']; ?></td>
               </tr>
                             <tr>
                <td>Short Name</td>
                <td><?php echo $row['name']; ?></td>
              </tr>
              <tr>
                <td>Profession</td>
                <td><?php echo $row['profession']; ?></td>
               </tr>
              <tr>
                <td>Entry Into House On</td>
                <td><?php echo $row['entry_on']; ?></td>
              </tr>
              <tr>
                <td>Entry Type</td>
                <td><?php 
                      if ($row['entry_type'] == 'N') {
                          echo "Normal Entry";
                      } else {
                        echo "Wildcard Entry";
                      } ?></td>
              </tr>
              <tr>
                <td>Captain</td>
                <td>No</td>
              </tr>

              <tr>
                <td>Exit On</td>
                <td><?php if ($row['exit_on']) {
                  echo $row['exit_on'];
                  }  else {echo 'NA'; 
                  }?></td>
              </tr>
            </table>
            </div>
                     </div>
                   </div>
                 
                  <div class="row"><div class="col-md-5 col-sm-4">
                    <div class="me-images">
                      <img src="img/<?php echo $row['profile_pic']; ?>" alt="" style="width: 300px; height: 350px" class="img-circle">
                  </div>
                </div>
              </div>
            </div>
        </section>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="icon-arrow-up-circle"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  
  
  </body>
 </html>