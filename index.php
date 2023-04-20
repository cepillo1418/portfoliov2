 <?php
//Base de donnée

?> 






<html>
   <head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
<script type="script/js" src="progress.js"></script>
<link rel="shortcut icon" style="border-radius: 50px;" href="img/logoMH.png" type="image/png">

    </head>
   <body>


<!--section navigation -->
    <nav>
        
    <div class="main">
        <img src="img/profile3.png" alt="profile.photo">
        <a href="#entreprise">Mon entreprise</a>
        <a href="#competence">Mes compétences</a>
        <a href="#projet">Mes projets</a>
         <a href="#synthese">Tableau de synthèse</a>
        <a href="#contact">Me contacter</a>
       
    </div>
    </nav>

<!--fin section navigation -->



<!--section présentation -->
    <section class="presentation">
        <h1>
            Présentation : 
        </h1>
   <p>Bonjour je me présente Maxime Heintze, je suis actuellement entrain de finir un BTS  <a class="deco" href="#openModal">SIO</a> option  <a class="deco" href="#openModal2">SLAM</a></p><br/>
   <p>Si vous souhaitez avoir mon CV, vous pouvez le télécharger ici -> <a href="pdf/cv.pdf" download="cv.pdf">Mon CV</a></p>
 

 <!-- modal sio -->
    <div id="openModal" class="modalDialog">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>SIO</h2>
        <p>Services informatiques aux Organisations</p>
      </div>
    </div>
 <!-- modal slam -->
    <div id="openModal2" class="modalDialog">
      <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>SLAM</h2>
        <p>Solution Logiciel et Applications Métiers</p>
      </div>
    </div>
    </section>
<!--fin section présentation -->


<!--Section Mon Entreprise -->
    <div id="entreprise"></div>
    <section class="entreprise" >

   

    <h1>Mon Entreprise d'accueille : </h1><img class="amada" src="img/amada2.png" alt="AMADA"><img class="amada" src="img/amada.png" alt="amada"><br /><br />
    <h2>AMADA SA</h2><br /><br />
    <h6>Profile de l'entreprise:</h6><br />
    <p>Créé en 1946 au Japon par Isamu Amada, le Groupe compte aujourd'hui quelque 90 sociétés, filiales commerciales et sites de production,</p><br />
    <p>et emploie plus de 8 000 personnes dans le monde.</p><br/>
    <p>AMADA offre une gamme complète de solutions pour le travail de la tôle et, pour répondre aux besoins en constante évolution du marché</p><br/>
    <p>et de ses clients, le groupe a mis en place un réseau de sites de production dans des zones stratégiques : Japon, Europe, Amérique du</p><br />
    <p>Nord et Chine.</p><br /><br/>

    <h6>Date de création</h6><br/><p>01-01-1966<img style="border-radius : 50%; width: 20px; height: 20px; float: left; margin-right: 5px;" src="img/date.png"/></p><br/>
    <h6>Nombre d'employés : </h6><br/><p>Entre 100 et 199 employés<img style="border-radius : 50%; width: 20px; height: 20px; float: left; margin-right: 5px;" src="img/emp.png"/></p><br />
    <h6>Principal activité : </h6><br/><p>L'entreprise fabrique des machines de découpe, de formage, de cisaillement et de poinçonnage des métaux<img style="border-radius : 50%; width: 20px; height: 20px; float: left; margin-right: 5px;" src="img/amadaM.png"/></p><br/>
    <h6>Mes missions : </h6><br /><p> -Installation des logiciels de l'entreprise.<img style="border-radius : 50%; width: 20px; height: 20px; float: left; margin-right: 5px;" src="img/logiciel.png"/></p><br/>
    <p> -Dépannage des client en diffuclté et aide à la maintenance des logiciels.<img style="border-radius : 50%; width: 20px; height: 20px; float: left; margin-right: 5px;" src="img/sav.png"/></p><br />


    </section><br /><p class="saut"></p>
<!--fin section entreprise--> 
    

<!--Section compétence-->
     <div id="competence"></div>
    <section  >
      

      <div class="comp">

      <h1>Mes compétences : </h1><br /><br />



      <p><img class="imgSkill" src="img/html2.png" alt="html"></p>
<div class="container">

  <div class="skills html">90%</div>
</div>

<p class="sautComp"></p>


<p><img class="imgSkill" src="img/css.png" alt="css"></p>
<div class="container">

  <div class="skills css">80%</div>
</div>


<p class="sautComp"></p>

<p><img class="imgSkill" src="img/php.png" alt="css"></p>
<div class="container">

  <div class="skills php">40%</div>
</div>

<p class="sautComp"></p>


<p><img class="imgSkill" src="img/js.png" alt="css"></p>
<div class="container">

  <div class="skills js">25%</div>
</div>

<p class="sautComp"></p>

<p><img class="imgSkill" src="img/laravel.png" alt="css"></p>
<div class="container">

  <div class="skills laravel">45%</div>
</div>





</div>


    </section>

<!--fin section competence -->

<p class="saut"></p>



<!-- section projet -->

      <div id="projet"></div>
    <section class="projet" >

    <div class="box-aligne">
       <h1>Mes projets</h1>
       <p class="sautComp"></p>

         <h4>FastShop :</h4>
        <a class="deco1" href="#openModal3"><img src="img/fs.png"></a></p><br/>

       <div id="openModal3" class="modalDialog1">
      <div>
        <a href="#close" title="Close" class="close1">X</a>
        <h2>FastShop</h2><br />
        <h3>Description : </h3><br/>
        <p>C'est un site e-shop de vêtements d'occasion qui se veut rapide d'envoie,</p>
        <p>tout en respecter des accords écologique et egalitaire.</p><br/>
        <h3>Languages utilisés</h3>
        <ul>
                <li>PHP</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>SQL</li>
        </ul><br />
        <h3>Images</h3>

      

      </div>
    </div>

    <p class="saut"></p>

    <!--projet 2 -->
   
    <h4>ERTP :</h4>
        <a class="deco1" href="#openModal4"><img src="img/ertp.png"></a></p><br/>

       <div id="openModal4" class="modalDialog1">
      <div>
        <a href="#close" title="Close" class="close1">X</a>
        <h2>ERTP</h2><br />
        <h3>Description : </h3><br/>
        <p>C'est un site type portfolio pour une entreprise de charpenterie,</p>
        <p>on peut y trouver tous les services qu'il propose ainsi que leurs informations.</p><br/>
        <h3>Langages utilisés</h3>
        <ul>
                <li>PHP</li>
                <li>HTML</li>
                <li>CSS</li><br/>
            <h3>Frameworks</h3>
                 <li>Bootstrap</li>
        </ul><br />
        <h3>Images</h3>

      

      </div>
    </div>





    <!--fin de div box-aligne -->
    </div>

</section>
    <!--section synthèse -->

    </section>
    <p class="saut"></p>
    <div id="synthese"></div>

    <section class="synthese" >
     <h1>Tableau de synthèse :</h1>

     <embed src="pdf/synthese.pdf" type="application/pdf" width="100%" height="100%">

    </section>
   

<!--fin section synthèse -->

     <p class="saut"></p>
   
     <!--section contact -->
     <div id="contact"></div>
     <section class="contact" >
     <h1>Me contacter : </h1>
     <div name="contactForm" id="form">

  
                <fieldset>
                    <div class="form-field">
                      <h4>Nom :</h4>
                        <input name="name" type="text" class="input-form" id="name" placeholder="Nom" value="" minlength="2" required="">
                    </div>
                    <div class="form-field">
                    <h4>Mail :</h4>
                        <input name="email" type="email" class="input-form" id="email" placeholder="Email" value="" required="">
                    </div>
                    <div class="form-field">
                    <h4>Sujet :</h4>
                        <input name="subject" type="text" class="input-form" id="subject" placeholder="Sujet" value="">
                    </div>
                    <div class="form-field">
                    <h4>Message :</h4>
                        <textarea name="message" id="message" class="input-form" placeholder="  message" rows="10" cols="50" required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform">Envoyer</button>
                        <div id="submit-loader">
                            <div class="text-loader">Envoi...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
</div> <!-- Form End -->
<div id="message-warning">
            </div>
            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Votre message a été envoyé, merci !<br>
            </div>
      
    
            </section>
<!--fin section contact -->

            <p class="saut"></p>
            </body>

    <footer>
   <div class="footer">
   
   <a href="https://github.com/cepillo1418" target="_blank" ><img src="img/git.png" alt="git"></a>
   <a href="https://www.linkedin.com/in/maxime-heintze/" target="_blank"><img src="img/linkedin.png" alt="linkedin"></a>
    <h1> ©Maxime Heintze </h1>
    </div>
   </footer>




   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/contact.js"></script>
</html>