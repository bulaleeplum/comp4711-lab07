<?php
   if (!defined('APPPATH'))
   exit('No direct script access allowed');
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>{pagetitle}</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="../assets/css/style.css" type="text/css" rel="stylesheet"/>
   </head>
   <body class="">
      <main>
         <header>
            <nav class="" role="navigation">
               <div class="nav-wrapper container">
                  <a id="logo-container" href="/" class="brand-logo">{pagetitle}</a>

<!--                   <ul class="right hide-on-med-and-down">
                     <li><a href="#">Link1</a></li>
                  </ul>
                  <ul id="nav-mobile" class="side-nav">
                     <li><a href="#">Link1</a></li>
                  </ul>
                  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
 -->
               </div>
            </nav>
         </header>
         <!-- Page Content  -->
         <div class="section no-pad-bot" id="index-banner">
            <div class="container">

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    {searchBar}
                </div>
               {content}
            </div>
         </div>
      </main>
      <!-- Footer  -->
      <footer class="page-footer">
         <div class="footer-copyright">
            <div class="container">
               Copyright &copy; 2016 Bulaleeplum.
            </div>
         </div>
      </footer>
      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="../assets/js/materialize.js"></script>
      <script src="../assets/js/functions.js"></script>
   </body>
</html>