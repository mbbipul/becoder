<?php require_once($_SERVER['DOCUMENT_ROOT']."/becoder/config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=2, shrink-to-fit=no">
  <link rel="icon" href="<?php echo $images_folder?>becoder_logo.jpg" type="image/gif" sizes="16x16">
  <title>becoder</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo $library_mdb_css_folder;?>bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo $library_mdb_css_folder;?>mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo $library_mdb_js_folder;?>bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo $librarymdb__js_folder;?>mdb.min.js"></script>
  <style>
  html, body {
    max-width: 100%;
    overflow-x: hidden;
  }
    /*becoder style*/
    .becoder_tutorial_header > h3{
      filter:blur(1px);
      font-size: 20px;
    }
    .navbar .navbar-brand{
      margin-left:10% !important;
    }
    .navbar-nav > li{
      padding-left: 10px;
      padding-right: 10px;
    }
    .ml-auto .dropdown-menu {
      margin-top: 7px !important;
     left: auto !important;
     right: 0px;
    }
    /* TEMPLATE STYLES */

     main {
         padding-bottom: 2rem;
     }

     .extra-margins {
         margin-top: 1rem;
         margin-bottom: 2.5rem;
     }

     .jumbotron {
         text-align: center;
     }

     .navbar {
         background-color: #3b295a;
     }

     footer.page-footer {
         background-color: #3b295a;
         margin-top: 2rem;
     }
     .navbar .btn-group .dropdown-menu a:hover {
         color: #000 !important;
     }
     .navbar .btn-group .dropdown-menu a:active {
         color: #fff !important;
     }

  /*login/register*/
    .social {
        float: left;
        margin: 0 auto 30px;
        text-align: center;
    }

    .social .circle{
           width: 50px;
       height: 50px;
       -moz-border-radius: 70px; 
       -webkit-border-radius: 70px; 
       border-radius: 70px;

        background-color: #EEEEEE;
        color: #FFFFFF;
        display: inline-block;
        margin: 5px 13px;
        padding: 15px;
    }
     .social .circle .fab{
        font-size: 20px;
    }
    .social .facebook{
        background-color: #455CA8;
        color: #FFFFFF;
    }
    .social .google{
        background-color: #F74933;
    }
    .social .github{
        background-color: #403A3A;
    }
    .facebook:hover{
        background-color: #6E83CD;
    }
    .google:hover{
        background-color: #FF7566;
    }
    .github:hover{
        background-color: #4D4D4d;;
    }
    .login_connect_with{
        text-align: center;
    }
   </style>
</head>
