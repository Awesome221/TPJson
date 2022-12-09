<?php session_start(); ?>
    <html>
        <head>
            <link rel="icon" href="https://img.icons8.com/material-sharp/24/26e07f/star--v1.png" />
            <title>WK Advisory - Activités</title>
            <meta charset='utf-8'>
            <link rel="stylesheet" href="fichier1.css"/>
            <link rel="stylesheet" href="bootstrap.min.css">
            <meta name="viewport" content="width=width" />
            <style>
                #boffre
                {
                    display: none;
                }
                .bonus
                {
                    margin-top: 7px;
                }
            </style>
        </head>
<body>
     <div class='container-fluid'>
      
      <nav class="row form-inline" id='od'>
         
                <div id='c' class='col-md-2 col-lg-2'>
                    <canvas id='canvasL' width='170' height='85'></canvas>
                </div>
                 
               <nav class="navbar navbar-expand-md navbar-light col-lg-6">
               
                <ul id='menuCe' class='navbar-nav collapse navbar-collapse justify-content-between'>
                    <li class="nav-item" <?php if($nav_en_cours == 'home'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                        href='#'>Home</a></li>
                    <li class="nav-item" <?php if($nav_en_cours == 'about'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                        href='#'>About</a></li>
                    <li class="nav-item" <?php if($nav_en_cours == 'services'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                        href='#'>Services</a></li>
                    <?php if(!isset($_SESSION['ID'])){ ?>
                    <li class="nav-item" <?php if($nav_en_cours == 'inscription'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                        href='taches.php'>Task<img src="https://img.icons8.com/fluent/18/000000/inscription.png"/></a></li>
                    <?php }else{?>
                    <li class="nav-item" <?php if($nav_en_cours == 'moncompte'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                        href="../sn/moncompte.php">Mon Compte <img src="https://img.icons8.com/cotton/18/000000/locked-user.png"/></a></li><?php }?>
                    <li class="nav-item" <?php if($nav_en_cours == 'contact'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                        href='#'>Contact <img src="https://img.icons8.com/ios-filled/18/000000/help.png"/></a></li>
                </ul>
               </nav>
        <?php
        if(!isset($_SESSION['ID'])){
              if(!isset($_POST['mectub']))
              {?>
                   <div id='connexion' class='col-md-4 col-lg-4'>
                    <form action="index.php" method="post">
                        <input type='text' id='log' name='login' placeholder='Identifiant' />
                        <input type='password' id='mdpc' name='motDePasse' placeholder='Mot de passe'/>
                        <input type='hidden' name =  'mectub' />
                        <input type='submit' value='SE CONNECTER' id='cnx'>
                        <a href='/sn/reinit.php' id='mpo'>Mot de passe oublié</a><br>
                        <a href='/sn/inscription.php' id='nc'>Vous en avez pas encore, Créer un compte ici</a>
                    </form>
                   </div>
            <?php
              }
              else
              {
                if(isset($_POST['login']) && isset($_POST['motDePasse']))
                {
                    $log = strip_tags($_POST['login']);
                    $mdp = strip_tags($_POST['motDePasse']);
                    
                    if($log == "Awesome" && $mdp == "")
                    {
                        $_SESSION['ID'] = 1;
                        $_SESSION['Login'] = "Le Directeur";
                        $_SESSION['genre'] = 'masculin';
                        
                        if(isset($_POST['cookie'])  && $_POST['cookie'] == 'on')
                        {
                            setcookie('ID', $result1['Numero'],
                                      time()+365*24*3600);
                            setcookie('Password', $result1['Password'],
                                      time()+365*24*3600);
                        }
                ?>
                    <div id='connexion' class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                        <span>
                            <?php if($_SESSION['genre'] == 'masculin')
                                    {
                                        echo 'Bonjour M. ';
                                        echo $_SESSION['Login'];
                                    }
                                elseif($_SESSION['genre'] == 'feminin')
                                    {
                                        echo 'Bonjour Mme. ';
                                        echo $_SESSION['Login'];
                                    }
                                    elseif($_SESSION['genre'] == 'Feminin'){
                                       echo 'Bonjour Mlle. ';
                                       echo $_SESSION['Login'];
                                    }
                            ?>
                        </span>
                        
                        <a href='sn/deconnexion.php'><input type='button' name='deconnexion' value='Deconnexion' id='cnx' /></a>
                    </div>
                
                <?php
                           }    
                    }
                    else
                    {
                        ?>
                        <div id='connexion' class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                            <span class='e'>Login ou mot de passe incorrect!</span><br>
                            <span><a href="index.php" id="Rtur">Retour</a></span><br>
                        <a href='/sn/inscription.php' id='nc'>Avez-vous un compte ici ?</a>
                        </div>
                <?php
                    }
                }
              }
              
              else{?>
                    <div id='connexion' class='col-md-4 col-lg-4'>
                        <span>
                            <?php if($_SESSION['genre'] == 'masculin')
                                    {
                                       echo 'Bonjour M. ';
                                       echo $_SESSION['Login'];
                                    }
                                elseif($_SESSION['genre'] == 'feminin')
                                    {
                                       echo 'Bonjour Mme. ';
                                       echo $_SESSION['Login'];
                                    }
                                    elseif($_SESSION['genre'] == 'Feminin'){
                                       echo 'Bonjour Mlle. ';
                                       echo $_SESSION['Login'];
                                    }
                            ?>
                        </span>
                        
                        <a href='sn/deconnexion.php'><input type='button' name='deconnexion' value='Deconnexion' id='cnx' /></a>
                    </div>
              <?php }
            ?>
      </nav>

      <nav id="resp">
        <div id='c' class='logo'>
           <canvas id='canvasM' width='170' height='60'></canvas>
        </div>
        
        <div class="toggle_btn" id='btn'>
            <span></span>
        </div>
        <script>
    var canvas1 = document.getElementById('canvasM');
    var contexte = canvas1.getContext('2d');
                
                contexte.lineWidth = '5';
                contexte.strokeStyle = '#2BB';
                contexte.arc(40, 28, 27, Math.PI/2, -Math.PI/2);
                contexte.stroke();
                
                contexte.fillStyle = '#FFF';
                contexte.font = 'bold 15px Arial, Verdana, Serif';
                contexte.lineWidth = '4';
                contexte.fillText('WK Advisory',27,25);
                contexte.fillText('La qualité sur mesure',27,38);
                
        </script>
        
      <?php
              if(!isset($_SESSION['ID']))
              {
               if(!isset($_POST['mectub']))
                  {?>
                   <div id='connex'>
                    <form action="index.php" method="post">
                        <input type='text' id='log' name='login' placeholder='Identifiant' /><br>
                        <input type='password' id='mdpc' name='motDePasse' placeholder='Mot de passe'/>
                        <input type='hidden' name =  'mectub' />
                        <input type='submit' value='SE CONNECTER' id='Mcnx'><br>
                        <a href='/sn/reinit.php' id='mpo'>Mot de passe oublié</a><br>
                        <a href='/sn/inscription.php' id='nc'>Vous en avez pas encore,<br> Créer un compte ici</a>
                    </form>
                   </div>
            <?php
                  }
              else
              {
                if(isset($_POST['login']) && isset($_POST['motDePasse']))
                {
                    $log = strip_tags($_POST['login']);
                    $mdp = strip_tags($_POST['motDePasse']);
                   
                    if($log == "Awesome")
                    {
                        if(password_verify($mdp, $result1['Password'])){
                        $_SESSION['ID'] = 1;
                        $_SESSION['Login'] = "Le Directeur";
                        $_SESSION['genre'] = 'masculin';
                        
                        if(isset($_POST['cookie'])  && $_POST['cookie'] == 'on')
                        {
                            setcookie('ID', $result1['Numero'],
                                      time()+365*24*3600);
                            setcookie('Password', $result1['Password'],
                                      time()+365*24*3600);
                        }
                ?>
                    <div id='connexion' class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                        <span>
                            <?php if($_SESSION['genre'] == 'masculin')
                                    {
                                        echo 'Bonjour M. ';
                                        echo $_SESSION['Login'];
                                    }
                            ?>
                        </span>
                        
                        <a href='sn/deconnexion.php'><input type='button' name='deconnexion' value='Deconnexion' id='cnx' /></a>
                    </div>
                <?php
                        }
                        else{
                        ?>
                        <div id='connex' class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                            <span class='e'>Login ou mot de passe incorrect!</span><br>
                            <span><a href="index.php" id="Rtur">Retour</a></span><br>
                        <a href='/sn/inscription.php' id='nc'>Avez-vous un compte ici ?</a>
                        </div>
                <?php
                           }
                    }
                    else
                    {
                        ?>
                        <div id='connex' class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                            <span class='e'>Login ou mot de passe incorrect!</span><br>
                            <span><a href="index.php" id="Rtur">Retour</a></span><br>
                        <a href='/sn/inscription.php' id='nc'>Avez-vous un compte ici ?</a>
                        </div>
                <?php
                    }
                }
              }
              }
              else
              {
                ?>
                    <div id='connex'>
                        <span>
                            <?php if($_SESSION['genre'] == 'masculin')
                                    {
                                        echo 'Bonjour M. ';
                                        echo $_SESSION['Login'];
                                    }
                                elseif($_SESSION['genre'] == 'feminin')
                                    {
                                        echo 'Bonjour Mme. ';
                                        echo $_SESSION['Login'];
                                    }
                                    elseif($_SESSION['genre'] == 'Feminin'){
                                       echo 'Bonjour Mlle. ';
                                       echo $_SESSION['Login'];
                                    }
                            ?>
                        </span>
                        <a href='../sn/deconnexion.php'><input type='button' name='deconnexion' value='Deconnexion' id='cnx'/></a>
                    </div>
                <?php
                    
                }
            ?>
        </nav>
            
      <div class='container'>
    <div class='row'>
    
            <div class="time">
                <div id='news'>
                <span id="temps" class='col-xs-12 col-sm-12 col-md-3 col-lg-3'></span>
                  <span class='col-xs-12 col-sm-12 col-md-1 col-lg-1'><strong> News</strong>: </span></div>
            </div>
            <div class='marquee col-xs-12 col-sm-12 col-md-8 col-lg-8'>
                <a href="#"><?php
                echo "Informations à la Une";
                ?></a>
            </div>
    </div>
    <div class='row'>
        <div class='colg col-xs-12 col-sm-12 col-lg-3'>
        <a href="taches.php"><?php
                include('cal.php');
            ?></a>
        </div>
        <div class='col-xs-12 col-sm-12 col-lg-6'>
            <div id="slider_test" class="slider col-xs-12 col-sm-12 col-lg-6">
                <img src="image1.jpeg" alt="Image1"/>
                <img src="image2.jpeg" alt="Image2"/>
                <img src="image3.jpeg" alt="Image3"/>
                <img src="image4.png" alt="Image4"/>
            </div>
            <span class='row'>
            <div id='prog' class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
            <h3 class="prochainement">A la Une</h3>
            <a href="#"><span id='rouge'><strong>Strategy Advisory</strong></span><br><br>
            <span id='curse'>Grow Your Business</span></a>
            </div>
            <div id='imin'  class='col-xs-12 col-sm-12 col-md-6 col-lg-6'   >
                <strong>Outsourcing, HR, Tax & Legal</strong><br><br>
                Expert Guidance
            </div>
            </span>
        </div>
        <div class='cold col-xs-12 col-sm-12 col-lg-3'>
            <div id='secui'>
              <canvas id='canvasSi' width='' height='200'></canvas>
            </div>
        </div>
    </div>
      </div>
     </div>
     <div>
</body>
<?php
   // include('bas.php');
   ?>
  </div>
            <script>
                
    var canvas2 = document.getElementById('canvasSi');
    var contexte2 = canvas2.getContext('2d');
    canvas2.style.backgroundColor = 'rgb(192,64,64)';
    
    contexte2.lineWidth='7';
    contexte2.fillStyle = '#FFF';
    contexte2.fillRect(2, 10, 280, 180);
    
    contexte2.font = '21px Arial';
    contexte2.fillStyle = 'red';
    contexte2.fillText('SITE AGREE', 140, 110);
    contexte2.font = '14px Times New Roman';
    contexte2.fillText('SECURITE GARANTIE', 130, 130);
    
                var canvasO = document.getElementById('canvasOb');
                var contexteO = canvasO.getContext('2d');
                canvasO.style.backgroundColor = 'rgb(192,64,64)';
                
    var btn = document.querySelector('.toggle_btn');
    var nav = document.querySelector('.nav');
    
    btn.onclick = function(){
        nav.classList.toggle('nav_open');
    };
         
</script>

            
        <script src='fichier.js'></script>
        <script src='jquery-3.5.1.js'></script>
        