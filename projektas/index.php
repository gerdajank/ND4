<?php
require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
  <html lang="lt">
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="css/styles.css" type="text/css" rel="stylesheet">
       <title>Moderniųjų technologijų matematika</title>		
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<!--						menu	-->
        <div class="navbar-fixed">
        <nav class = "blue">
            <div class="nav-wrapper ">
                    <a href="#!" class="brand-logo black-text mtmlogo"> Moderniųjų technologijų matematika </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                          <!--  <li ><a href="mokslas.php">Mokslas</a></li> -->
                            <li><a href="#">Apie mus</a></li>
                            <li><a href="views/stojantiesiems.php">Atrask mus</a></li>
                         <!--   <li><a href="views/forma.php">Susisiek su mumis</a></li> -->
                    </ul>
            </div>
        </nav>
       </div>

        <ul class="sidenav blue" id="mobile-demo">
            <li><a href="#">Apie mus</a></li>
            <li><a href="views/stojantiesiems.php">Atrask mus</a></li>
    <!--        <li><a href="views/forma.php">Susisiek su mumis</a></li> -->
        </ul>
       
<!-- slider -->
    <?php  include('views/slider.php');  ?>
 <!-- end of slider -->        
<main>   

<!-- form -->  
<button class="open-button" onclick="openForm()"> <i class="material-icons">email</i></button>
<div class="form-popup" id="contact">
   <form action="index.php" class="form-container" method="post">
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
    
    <div class="container"> 
        <div class="containertop font myBoxtop">
        <!-- <img src="https://images.pexels.com/photos/248797/pexels-photo-248797.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Avatar" class="imagetop" style="width:100%"> -->
        <h4 class="blue-text">  Moderniųjų technologijų matematika</h4>
                 Matematinio modeliavimo katedra bendradarbiaudama su socialiniais partneriais CGI Lithuania ir UAB Telia Soneros grupei priklausančia AB Telia Lietuva bei VGTU Informacinių sistemų ir Informacinių technologijų katedromis nuo 2017 m. rugsėjo 1 d. vykdo SKVC akredituotą pirmosios pakopos studijų programą   Moderniųju technologijų matematika. 
                  Studijų kryptis - Taikomoji matematika. <br> Studijų forma ir trukmė – nuolatinės studijos (4 metai).
                 Šiandieniniame pasaulyje ima dominuoti moderniųjų informacinių technologijų veikimu grįsti nauji produktai ir paslaugos. Šių naujovių atsiradimas glaudžiai siejasi su didelių informacijos srautų valdymu bei analize. Vis labiau paklausūs tampa specialistai, gebantys ne tik naudotis moderniomis technologijomis, bet ir kurti naujus įvairioms sritims reikalingus produktus, paremtus matematikos ir informatikos mokslų žinių taikymu, valdyti ir analizuoti duomenis, rūpintis jų sauga. 
        <a href="views/stojantiesiems.php"> </a>
    
            <div class="middletop">
                <div class="texttop">Atrask savo ateitį čia!</div>
            </div>
        </div>  
    </div>
        
      <!--        <div class="section white"> -->
    <div class="container"> 
           <!--     <p class="black-text text-darken-3 lighten-3"></p> -->
            <div class="eilute">
                    <div class= "stulpelis1">
                            <h4 class="blue-text">Naujienos</h4>
                           <div class="eilute">
                              <div class = "stulpelis black-text myBox"> 
                                        <div class = "nuotrauka"> 
                                        <a href = "https://www.ttu.ee/institutes/department-of-cybernetics/conferences-19/mathematical-modelling-and-analysis-2019/">
                                            <img border="0" src="https://img.theculturetrip.com/768x432/wp-content/uploads/2017/03/shutterstock_331780052-kavalenkava.jpg" width="100" height="100"> </a>
                                       </div> 
                                       <div class = "pavadinimas">MMA konferencija</div>
                                       <div class = "data">2019 05 28 - 31 <br> Talinas</div>

                                       <div class = "aprasymas font"> Kasmetinė - tarptautinė konferencija Mathematical Modelling and analysis.
                                      </div>
                              </div>
                              <div class = "stulpelis black-text  myBox"> 
                                        <div class = "nuotrauka"> 
                                        <a href="https://www.vgtu.lt/vgtu-naujienu-portalas/naujausios/naujausios/kvieciame-i-vgtu-diplomu-iteikimo-svente/246872?nid=296029">
                                        <img border="0" src="https://www.vgtu.lt/images/2583/129/6/13_2/diplomai.jpg" width="100" height="100"></a> 
                                       </div> 
                                       <div class = "pavadinimas">Diplomų įteikimas</div>
                                       <div class = "data">2019 05 28 - 31 <br> Talinas</div>

                                       <div class = "aprasymas font"> Kviečiame į VGTU diplomų įteikimo šventę. Birželio 19 – 22 dienomis Vilniaus Gedimino technikos universiteto (VGTU) Centrinių rūmų Didžiojoje auloje vyks diplomų įteikimo šventė. 
                                      </div>
                              </div>
                            </div> 
                        <p class= "white" style="text-align:right"> Daugiau naujienų </p>
                          </div>
                               
                              <div class="stulpelis2 white">
                                   <h4 class="antraste blue-text"> Seminarai </h4>
                                      <!-- <div class = "pavadinimas">Matematinio modeliavimo katedros organizuojami seminarai 
                                       </div>-->
                                   <div class = "stulpelisSeminarai white"> 
                                     <div class = "seminaras"> 
                                          <div class = "pavarde">Rima Kriauziene</div>
                                          <div class = "data">2019-05-21; 09:00; SRL-I 420</div>
                                          <div class = "pavadinimass"> Temperatūrų pasiskirstymo bioreaktoriuje modeliavimas</div>
                                      </div>
                                      <div class = "seminaras"> 
                                          <div class = "pavarde"> Olga Suboč </div>
                                          <div class = "data">2019-03-26; 09:00; SRL-I 420</div>
                                          <div class = "pavadinimass"> Temperatūrų pasiskirstymo bioreaktoriuje modeliavimas</div>
                                      </div>
                                     <div class = "seminaras"> 
                                          <div class = "pavarde"> Ramūnas Šablinskas </div>
                                          <div class = "data">2019-02-12; 09:00; SRL-I 420</div>
                                          <div class = "pavadinimass"> Projektų valdymo tema</div>
                                      </div>
                                       <div class = "seminaras"> 
                                          <div class = "pavarde"> Vadimas Starikovičius </div>
                                          <div class = "data">2019-12-04; 09:00; SRL-I 427</div>
                                          <div class = "pavadinimass"> Lygiagrečiųjų skaitinių algoritmų, skirtų trimačių trupmeninės difuzijos uždavinių sprendimui, išplečiamumo analizė ir palyginimas </div>
                                      </div>
                                  </div>
                                    <p style="text-align:right"> Daugiau seminarų </p>
                                  
                         </div>
                </div>
        </div>
 
           <!--       </div>  -->
         
    
    <div class="container"> 
         <h4 class="blue-text">Apie mus</h4>
             <div class = "eilute"> 
                  <div class = "stulpelisApie black-text  myBox"> 
                    <div class = "nuotrauka"> 
                    <a href="https://www.delfi.lt/video/laidos/mokslo-ekspresas/mokslo-ekspresas-pasaulis-kaip-matematinis-modelis.d?id=78092353#8rPKwJdt">
                    <img border="0" src="https://www.yu.edu/sites/default/files/math-515606506.jpg" width="100" height="100"></a> 
                    </div> 
                    <div class = "pavadinimas">„Mokslo ekspresas“: pasaulis kaip matematinis modelis 
                    </div>
                   <div class = "aprasymas font">Matematikų kuriami instrumentai leidžia biologams ir astronomams pamatyti milijonus metų vykstančius gyvybės ar žvaigždžių evoliucijos procesus. Kas yra skaitmeninis dvynys, kaip I. Niutonas nuspėjo ateitį, ir kodėl itin vertingais tapo matematikų darbai, kuriuose jie pripažįsta negalintys išspręsti kai kurių uždavinių?
                  </div>
                 </div>
                 <div class = "stulpelisApie black-text  myBox"> 
                    <div class = "nuotrauka"> 
                    <a href="https://www.alfa.lt/straipsnis/50207122/istojo-i-moderniuju-technologiju-matematika-taciau-pirma-atejo-tarnauti-kariuomeneje-pradedi-suprasti-zmones">
                    <img border="0" src="https://jp.lt/wp-content/uploads/2016/12/Lietuvos-kariuomene-pranesa-apie-pratybas-Taurages-miskuose_imagelarge-326x235.jpg" width="100" height="100"></a> 
                   </div> 
                   <div class = "pavadinimas">Įstojo į moderniųjų technologijų matematiką, tačiau pirma atėjo tarnauti</div>
                   
                   <div class = "aprasymas font"> Nuo šešerių metų mokyklą pradėjęs lankyti Ernestas šiemet sėkmingai baigęs mokslus Vilniaus Žemynos gimnazijoje išlaikė egzaminus ir įstojo į Vilniaus Gedimino technikos universitetą, pasirinkęs studijuoti moderniųjų technologijų matematiką. 
                  </div>
                 </div>
                 <div class = "stulpelisApie black-text   myBox"> 
                    <div class = "nuotrauka"> 
                    <a href="https://www.alfa.lt/straipsnis/50044881/poreikis-darbo-rinkose-matematiku-reikia-ne-ka-maziau-nei-it-specialistu">
                    <img border="0" src="https://i3.alfi.lt/30750/13/56.jpg" width="100" height="100"></a> 
                   </div> 
                   <div class = "pavadinimas">Poreikis darbo rinkose: matematikų reikia ne ką mažiau nei IT specialistų</div>
                   
                   <div class = "aprasymas font"> Sėkmingai perkandę matematikos pinkles mokykloje ir panorę šias žinias gilinti į toliau – tikrai neprašaus. Ne tik dėl to, kad darbo rinkoje yra itin graibstomi IT specialistai, tačiau grynojo matematiko, kaip specialisto, patrauklumas yra net kur kas didesnis nei IT specialisto.
                  </div>
                 </div>
                
                     <div class = "stulpelisApie black-text   myBox"> 
                        <div class = "nuotrauka"> 
                         <a href="http://www.veidas.lt/tag/raimondas-ciegis"> 
                        <img border="0" src="http://www.veidas.lt/wp-content/uploads/2016/02/ciegis-530x346.jpg" width="100" height="100">
                        </a>
                        </div> 
                       <div class = "pavadinimas">Niekada nedirbantis ateities modeliuotojas</div>
                        
                       <div class = "aprasymas font"> Matematikas vienu metu turi būti ir studentas, ir profesorius, nes mokymasis visą gyvenimą – jo kasdienybė. „Tai technologijos, kurios kuria mūsų ateitį“, – sako upes tekėti atgal priverčiantis Raimondas Čiegis, apibūdindamas savo mokslo sritį – matematinį modeliavimą. Šalia rimtosios matematinės tėkmės išsitenka ir keliautojo, lobių ieškotojo vaga. „Jeigu jūs mane pamatysite užsikabarojusį ant tilto atbrailos, nemanykite, kad ruošiuosi šokti į upę. Vadinasi, aš ieškau lobio“, – perspėja profesorius. 
                       </div>
                   </div> 
                 
            </div>
        </div>
      

        
           
   <!-- <div class="parallax-container">
          <div class="parallax"><img src="images/MTM.jpg"></div>
    </div> -->
           
  <div class = "container"> 
       <h4 class="blue-text">MMK FB</h4>
        <div class ="eilutefb">
           <div class="stulpelisfb "> 
              <div class ="nuotraukafb myBox"> 
                <a href ="https://www.facebook.com/174310625932263/photos/ms.c.eJxFkcGNRTEIAztaATEm9N~;Y6sGHXEcOmIkpzQWpAlBx~;6yA3xuqFho~;wIAAnvQBliciD84A~;RIU2wTim0G~;L1EgdbaE1BPmALNvKFzmiWetvQvYIB6IBvYDSPQtr4dW07NrKbVFbXtUAvKKZZ1vnBni1fRgEtlDr~_6WPo47I1lPniBDG1sfVpIZIxkRVZ1bzFvQzU2UdeTZhFfTNYYo69f2K519LVeQtaD4B~_4FZl0~-.bps.a.2162504710446168/2162506293779343/?type=3&theater" > 
                <img src= "images/fb_sablinskas.jpg" class="imagefb"></a>
              </div>
              <div class ="nuotraukafb myBox"> 
                <a href ="https://www.facebook.com/174310625932263/photos/a.2162504710446168/2162504910446148/?type=3&theater" > 
                <img src= "images/fb_photo1.jpg"></a>
             </div>
          </div>  
            <div class="stulpelisfb"> 
             <div class ="nuotraukafb myBox"> 
                <a href ="https://www.facebook.com/174310625932263/photos/a.2162504710446168/2162506287112677/?type=3&theater" > 
                <img src= "images/fb_rima.jpg"></a>
            </div> 
             <div class ="nuotraukafb myBox"> 
                 <a href ="https://www.facebook.com/174310625932263/photos/a.390704504292873/1871775152852460/?type=3&theater" > 
                <img src= "images/fb_mtmf17.jpg"></a>
            </div>
         </div> 
          <div class="stulpelisfb"> 
            <div class ="nuotraukafb myBox"> 
                 <a href ="https://scontent.fvno1-1.fna.fbcdn.net/v/t1.0-9/35922962_2162528273777145_2837480842865934336_n.jpg?_nc_cat=107&_nc_ht=scontent.fvno1-1.fna&oh=23ed8fac006a0b946adc021a99219a5f&oe=5D56A9D7" > 
                <img src= "images/simkus.jpg"></a>
            </div>
            <div class ="nuotraukafb myBox"> 
                 <a href ="https://www.facebook.com/174310625932263/photos/a.390704504292873/1604252549604723/?type=3&theater" > 
                <img src= "images/rima2.jpg"></a>
            </div>
       </div> 
          <div class="stulpelisfb"> 
             <div class ="nuotraukafb myBox"> 
                 <a href ="https://www.facebook.com/174310625932263/photos/a.2162504710446168/2162505960446043/?type=3&theater" > 
                <img src= "images/andrejus.jpg"></a>
            </div>  
             <div class ="nuotraukafb myBox"> 
                 <a href ="https://www.facebook.com/174310625932263/photos/a.2162504710446168/2162504910446148/?type=1&theater" > 
                <img src= "images/vedejas.jpg"></a>
            </div>
          </div> 
        </div> 
    </div>  
           
<!-- galerija  -->
 


           
<!-- galerija end -->           
           
           
           
      </main>
        
        <?php
        include('views/footer.php');
        ?>
       

	  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
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
                            
                            $(".myBoxtop").click(function() {
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
