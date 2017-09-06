<!DOCTYPE html>
<html lang="en">
<head>
  <title>Big Boss Game Show</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <style type="text/css">
     .form-control {
        width: 50%;
     }
     .signup-form {
        margin-left: 10%;
     }

     .bg-image {
          background-image: url('http://www.tutorialboneyard.com/wp-content/uploads/2015/07/back1.png');
          background-repeat: repeat;
          background-position: top left;
          background-attachment: fixed;
        }

        #wrapper {       
          position: relative;
          max-width: 960px;
          margin: 0 auto;
          box-shadow: 0 0 18px rgba(0, 0, 0, .4);
          background: #f8f8f8;
          overflow: hidden;
        }
        .btn.signup {
            margin-bottom: 10%!important;
        }
    .navbar-inverse {
      background-color: #f8f8f8;
      border: none;
      color: black;
    }
    h3, span.pull-right{
      color: teal;
    }
    input[type="text"]:focus {
      border: solid 1px #707070;
      /*box-shadow: 0 0 5px 1px #969696;*/
      box-shadow: 0 0 5px 1px aqua;
      font-size: 12pt;
    }

   /* .ui-widget-content {
      background: none;
      background-color: lightgrey!important;
    }

    .ui-widget-content a {
      color: teal;
    }
    .ui-widget-content a:hover {
      background-color: aqua;
    }*/
  </style>
</head>
<body class="bg-image">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#"></a>
    </div>
    <div>
      <h3>BIG BOSS Reality Show Telugu <span class="pull-right">Laxman@lucky</span></h3>      
    </div>
  </div>
</nav>
<div id="wrapper">
 <div class="container">
    <div class="row">
         
         <form role="form" class="signup-form" method="post" action="process.php" enctype="multipart/form-data">
         <h3> Please Add Contestant Details Here</h3>
              <div class="form-group">
                <label  for="Full Name">Full Name</label>               
                <input type="text" name="name" class="form-control validate-laxman" autofocus pattern="^[a-zA-Z]+[a-zA-Z ]*" required>                    
              </div>
              <div class="form-group ">
                <label  for="Email">Profession</label><span id="ajaxphp-results1" style="margin-left:100px"></span>
                <input type="text" name="profession" class="form-control valid-email" autofocus required >          
              </div>
              <div class="form-group">
                <label  for="Username">Short Name</label> <span id="ajaxphp-results2" style="margin-left:100px"></span>              
                <input type="text" name="short_name" class="form-control valid-uname"  >                    
              </div>
            <div class="form-group">
                <label  for="Username">Entry On</label>  <span id="ajaxphp-results3" style="margin-left:70px"></span>             
                <input type="text" name="entry_on" class="form-control valid-pass" required placeholder="password Must conatin 8 letters">                    
            </div>
              <div class="form-group">
                <label  for="Mobile Number">Entry Type</label>               
                <select name="entry_type" class="form-control">
                    <option value=""></option>
                    <option value="N">Noraml</option>
                    <option value="W">Wildcard</option>                    
                </select>                  
              </div>
              <div class="form-group">
                <label  for="profile pic">Profile Picture</label>               
                <input type="file" name="profile_pic" class="form-control" required  accept="image/*">                    
              </div>
              <div class="checkbox">
                  <label><input type="checkbox" required>I Agreed To The <a href="#">Terms&Conditions</a></label>
              </div>
              <div>
                    <input type="submit" class="btn btn-primary signup" value="Add My Contestant" name="submit">
                </div>
         </form>       
    </div> 
 </div></div>

<script type="text/javascript">
 $(document).ready(function() {
  $("#autoc").autocomplete({
     source: "autocity.php" 
  });

    var cricketes = [
        'Chiranjeevi',
        'Pawwan Kalyan',
        'Mahesh Babu',
        'Ram Charan Tej',
        'Allu Arjun',
        'Prabhas',
        'Jr Ntr',
        'Bala Krishna'
    ];
    $("#cric").autocomplete({
      source: cricketes
  })
})
</script>
