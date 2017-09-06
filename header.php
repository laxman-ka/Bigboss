<html>
<head>
    <title>Blog Implementation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="../Dialstreet/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Dialstreet/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script type="text/javascript" src="../Dialstreet/js/jquery.min.js"></script>
    <script type="text/javascript" src="../Dialstreet/js/bootstrap.min.js"></script>
    <style type="text/css">
      .wrapper {
        margin: 10px 18%;
        width: 1000px;
      }
        .title-comment {
           text-align: center;
           color: crimson;
           font-size: 14pt;
             margin-bottom: 10px;
        }
        .table {
            width: 84%!important;
        }
        .text-success {
            color: #0099CC;
            font-size: 15pt;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            border-top: none;
        }
        .table-styled tr:nth-child(even) {
            background-color: #0099CC;
            color: white;
        }

        .navbar-default {
            background-color: #0099CC;
            height: 56px;
        }

        .navbar-default .navbar-nav>li>a,.navbar-default .navbar-brand {
            color: white;
        }

         .navbar-default .navbar-nav li > a:hover {
           color: white;
           border-bottom: 3px solid aqua;
        }
        .navbar-default .navbar-nav li > a {
           color: white;
           font-weight: 600;
        }

        .navbar-nav {
            margin-left: 100px;
        }
        .navbar-default .navbar-header > a:hover, .navbar-default .navbar-header > a {
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Commenting Blog By Laxman</a>
        </div>
        <div>
        <ul class="nav navbar-nav">
            <li ><a href="header.php">Home</a></li>
            <li><a href="comments.php" >All Comments</a></li>
            <li><a href="basicadd.php">New Comment</a></li>
            <li><a href="users.php">All Users</a></li>
            <li><a href="conversation.php">Converstion</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="../Bootstarp/login1.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <li><a href="../Bootstarp/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </div>
        </div>
    </nav>

