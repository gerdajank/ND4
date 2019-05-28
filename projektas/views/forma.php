<?php
require __DIR__ . '/../src/app.php';
?>

<!DOCTYPE html>
  <html lang="lt">
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link href="../css/styles.css" type="text/css" rel="stylesheet">
       <title>Moderniųjų technologijų matematika</title>		
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div class="navbar-fixed"> 
        <nav class = "blue">
            <div class="nav-wrapper ">
                    <a href="../index.php" class="brand-logo black-text"> Moderniųjų technologijų matematika </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                            <li ><a href="../index.php">Apie mus</a></li>
                            <li><a href="stojantiesiems.php">Atrask mus</a></li>
                            <li><a href="#">Susisiek su mumis</a></li>
                    </ul>
            </div>
        </nav>
     </div>
        
        <ul class="sidenav blue" id="mobile-demo">
            <li ><a href="../index.php">Apie mus</a></li>
            <li><a href="stojantiesiems.php">Atrask mus</a></li>
            <li><a href="#">Susisiek su mumis</a></li>
        </ul>
   

    <div class="parallax-container">
        <div class="parallax grey lighten-1">
          <img src="https://cdn.oneunited.com/core/content/uploads/2009/09/contact-us-hero-bg-1024x400.png">
        </div>
  </div>
  <main>
           <div class="container">
            <form id="contact" action="forma.php" method="post">
                <h3>Bendraukime</h3>
                <h4>Susisiekite su mumis šiandien!</h4>
                <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus></p>
                <p><input type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
                <button class="btn waves-effect waves-light blue" type="submit" name="submit" id="contact-submit">Siųsti
                    <i class="material-icons right">send</i>
                </button>
            </form> 
            </div>
    </main>
        
        
        
      <?php include('footer.php'); ?>

	  <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
						<script>
                          $(document).ready(function(){
                                        $('.sidenav').sidenav();
                            });

                          $(document).ready(function(){
                                 $('.parallax').parallax();
                            });

                         $(document).ready(function(){
                              $(window).scroll(function(){
                                 if($(window).scrollTop()>0){
                                  $('nav').addClass('opacity-nav');
                                 } 
                                else {$('nav').removeClass('opacity-nav');}
                               });  
                            }); 
                            
                            $(".myBox").click(function() {
                              window.location = $(this).find("a").attr("href"); 
                              return false;
                            });
					   </script>
    </body>
  </html>
