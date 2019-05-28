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
<!--						menu	-->
     <div class="navbar-fixed"> 
        <nav class = "blue">
            <div class="nav-wrapper ">
                    <a href="../index.php" class="brand-logo black-text"> Moderniųjų technologijų matematika </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                            <li ><a href="../index.php">Apie mus</a></li>
                            <li><a href="#!">Atrask mus</a></li>
                      <!--      <li><a href="forma.php">Susisiek su mumis</a></li> -->
                    </ul>
            </div>
        </nav>
    </div>

        <ul class="sidenav blue" id="mobile-demo">
            <li ><a href="../index.php">Apie mus</a></li>
             <li><a href="#">Atrask mus</a></li>
      <!--       <li><a href="forma.php">Susisiek su mumis</a></li> -->
        </ul>
   

    <main>
        <div class = "banner">
            <div class="emptycontainer">
            </div>
        </div> <!-- banner pabaiga -->
        
        <!-- form -->  
        <button class="open-button" onclick="openForm()"> <i class="material-icons">email</i></button>
        <div class="form-popup" id="contact">
           <form action="stojantiesiems.php" class="form-container" method="post">
                <p>Susisiekite su mumis šiandien!</p>
                <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus></p>
                <p><input type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
                <button class="btn-floating btn-large waves-effect waves-light blue" type="submit" name="submit" id="contact-submit">
                <i class="material-icons right">send</i>
                </button>
                  <button class="btn-floating btn-large waves-effect waves-light red" type="button" onclick="closeForm()"><i class="material-icons right">close</i></button>
          </form>
        </div>
<!-- end of form -->  
   
<!--    -->
         <div class ="container">  
            <ul class="collapsible popout">
            <li>
              <div class="collapsible-header"><i class="material-icons">trending_up</i>Programos tikslas</div>
              <div class="collapsible-body"><span>Parengti taikomosios  matematikos specialistus,  turinčius abstraktaus loginio mąstymo įgūdžius, galinčius analizuoti didelius duomenų srautus, plačios erudicijos, savarankiškus, norinčius ir gebančius įsisavinti naujoves, gebančius veikti kelių sričių sandūroje ir transformuojančius įgytas žinias, ne tik taikančius, bet ir kuriančius naujus moderniosiomis technologijomis pagrįstus produktus ir paslaugas, paremtas matematikos taikymu įvairiose gyvenimo srityse. </span></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">whatshot</i>Programa skirta</div>
              <div class="collapsible-body">
                    <span> Suprasti bendruosius matematikos ir informatikos dėsnius, gebėti juos taikyti kuriant ateities technologijas, parengti kūrybingas asmenybes, turinčias išlavintą loginį mąstymą ir gebančias dirbti komandoje.
                    <br>
                    Studijų programoje numatyti dėstyti fundamentalieji ir specialieji matematikos dalykai, nemažai informatikos krypties dalykų, su matematikos ir informatikos taikymu susiję dalykai. Studentus siekiama supažindinti su šių mokslų naujovėmis, šiuolaikinėmis programavimo kalbomis, duomenų apdorojimo strategijomis, išmaniaisiais įrenginiais bei jų vieta šiandieniniame gyvenime. Dėstant studijų programos dalykus bus vadovaujamasi nuostata, kad visi jie sudarytų darnią visumą ir rengtų atsakingą, brandžią asmenybę – aukštos kvalifikacijos matematikos taikymo specialistą, išmanantį modernias informacines technologijas. Programoje net keturiuose studijų semestruose numatytos  galimybės dalykus rinktis iš alternatyviai pasirenkamųjų dalykų sąrašų. Didelė dalis alternatyviai pasirenkamųjų dalykų yra tarpdisciplininiai, t. y. siejantys matematikos, informatikos, draudimo verslo, elektronikos, ekonomikos, finansų mokslų žinias. 
                    Moderniųjų technologijų matematikos studijų programos rezultatai yra suderinti su Matematikos studijų krypties apraše įvardintais studijų rezultatais, kuriuos turėtų pasiekti pirmosios pakopos matematikos krypties studijų absolventai. Programos studijų rezultatai taip pat atitinka pirmosios studijų pakopos studijų rezultatus. Moderniųjų technologijų matematikos studijų programos rezultatai išdėstyti grupėmis: žinios ir jų taikymas, gebėjimai vykdyti tyrimus,  specialieji gebėjimai, socialiniai ir asmeniniai gebėjimai.
                  </span></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">functions</i>Konkursinis labas</div>
              <div class="collapsible-body"><span>  <?php include('konkbalas.php'); ?></span></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">school</i>Studijų dalykai</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
          </ul>
            </div>
        <br>
     
      
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
                $('.slider').slider();
                });

                $(document).ready(function(){
                    $('.collapsible').collapsible();
                });

                $(document).ready(function(){
                    $('.pushpin').pushpin();
                });

                $(".myBox").click(function() {
                  window.location = $(this).find("a").attr("href"); 
                  return false;
                });
            
            
                function openForm() {
                document.getElementById("contact").style.display = "block";
                }

                function closeForm() {
                document.getElementById("contact").style.display = "none";
                }
                       
       </script>
    </body>
  </html>
