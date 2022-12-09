<?php session_start(); ?>
    <html>
        <head>
            <link rel="icon" href="https://img.icons8.com/material-sharp/24/26e07f/star--v1.png" />
            <title>La Sénégalaise des jeux</title>
            <meta charset='utf-8'>
            <meta name="viewport" content="width=width" />
            <link rel="stylesheet" href="../fichier1.css"/>
            <link rel="stylesheet" href="../bootstrap.min.css">
        </head>
        
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
        <div class="menu nav">
              
              <div class='menu'>
            <li class="nav-item" <?php if($nav_en_cours == 'parissportifs'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                    href="paris_sportifs.php"><img src="https://img.icons8.com/cotton/18/000000/sport-arena.png"/>Paris Sportifs </a></li>
            <li class="nav-item"><a class="nav-link text-light font-weight-bold"
                    href="lives.php"><img src="https://img.icons8.com/color/18/000000/stopwatch--v2.png"/>Live</a></li>
            <li class="nav-item" <?php if($nav_en_cours == 'eloto'){echo ' id="en_cours"';} ?>><a class="nav-link text-light font-weight-bold"
                    href="eloto.php"><img src="https://img.icons8.com/plasticine/18/000000/money.png"/>E-loto</a></li>
                    <?php if(!isset($_SESSION['ID'])){ ?>
                    
                        <li class="nav-item"><a class="nav-link text-light font-weight-bold"
                        href="inscription.php"><img src="https://img.icons8.com/fluent/18/000000/inscription.png"/>Inscription</a></li>
                    
                    <?php }else{?>
                    <li class="nav-item"><a class="nav-link text-light font-weight-bold"
                        href="moncompte.php"><img src="https://img.icons8.com/cotton/18/000000/locked-user.png"/>Mon Compte</a></li><?php }?>
            
            <li class="nav-item"><a class="nav-link text-light font-weight-bold"
                        href="forum.php"><img src="https://img.icons8.com/cotton/18/000000/talk.png"/>Forum</a></li>
            <li class="nav-item"><a class="nav-link text-light font-weight-bold"
                        href="aide.php"><img src="https://img.icons8.com/ios-filled/18/000000/help.png"/>Aide</a></li>
            </div>
        </div>

      <?php
              if(!isset($_SESSION['ID']))
              {?>
                   <div id='connex'>
                    
                     <a href='../index.php'><input type='button' name='inscrire' value="SE CONNECTER" id='entre'/></a>
                     <a href='../sn/inscription.php'><input type='button' name='inscrire' value="S'INSCRIRE" id='welcome'/></a>
                   </div>
            <?php
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
                        <a href='../sn/deconnexion.php'><input type='button' name='deconnexion' value='Deconnexion' id='cnx' /></a>
                    </div>
                <?php
                    
                }
            ?>
      </nav>
     </div>

     <div class='container-fluid'>
      <div class='container'>
    <div class="row">
                 
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
   </div>
     </div>
<script>
    var btn = document.querySelector('.toggle_btn');
    var nav = document.querySelector('.nav');
    
    btn.onclick = function(){
        nav.classList.toggle('nav_open');
    };
    
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
        <script src='../fichier.js'></script>
        <script src='../jquery-3.5.1.js'></script>