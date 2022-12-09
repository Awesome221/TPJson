<?php
    session_start();
    
 $nav_en_cours = 'parissportifs';
    ?><style>
      #sttr .active, #sttrt .active{
         background-color: #fff;
         border: 1px solid red;
      }
  .actiV
      {
         background-color: #000;
         padding: 9px;
         padding-left: 10px;
         margin-left: -6px;
      }
      .act{
      	 background-color: #000;
         color: #fff;
         padding: 3px;
      }
      #dtl{
      	font-size: 10px;
      }
      .actif{
      background-color: #2BB;
      color: #FFF;
      padding: 2px;
      }
</style>
    <?php
        header('Content-type: text/html; charset=utf-8');
        include('../includes/fonctions.php');
        include('entete.php');
        
        actualiser_session();
        

/***********Fin actualisation de session...****************/

?>
 <div class='container-fluid'>
   <div class='container'>
    <div class='row'>
     
     <div class='mutuel col-xs-18 col-sm-18 col-md-18 col-lg-9'>
        <h3 id='ml'>Les différentes tâches</h3>
        <div id='pjf' class='justify-content-between'>
          <a href="#serviceA"  id='pjt' class='actiV col-3'>Service A</a>
          <a href="#serviceB"  id='fond' class='col-3'>Service B</a>
          <a href="#serviceC" id='tns' class='col-3'>Service C</a>
          <a href="#serviceD" id='ftb' class='col-3'>Service D</a>
        </div>
<?php
if(!isset($_SESSION['ID'])){?>
     <script>alert("Cette page est réservée, vous devez vous connecté d'abord!\n");</script>
     <?php 
    }
?>
     <div id='premier'>
      <div id='sttr'>
       
                      <a href="#t1" onclick="show('course1');" id='c1' class="active"><span id='r1'>Tâche </span>n°1</a>
                      <a href="#t2" onclick="show('course2');" id='c2'><span id='r1'>Tâche </span>n°2</a>
                      <a href="#t3" onclick="show('course3');" id='c3'><span id='r1'>Tâche </span>n°3</a>
                      <a href="#t4" onclick="show('course4');" id='c4'><span id='r1'>Tâche </span>n°4</a>

      </div>

					<div id='course1'>
						<div id='titrec'>
							date de début
							<span class="fl dateTime">date limite</span>
 					</div>
						<div id='contenuc'>
						<div id='carac'>Description</div>
						<div id='carac1'>Lorem ipsum dolor sit amet. 33 aperiam tenetur et laudantium 
                            labore et fugit consequatur et recusandae esse eos impedit repellendus. 
                            Eos quas saepe  et iure ipsa a porro sequi sit Quis dolor.</div>				
       </div>
       <div id='prnt'><span id='pronc'>Employés</span> <span id='terrain'>Nom Prénom - Nom Prénom </span></div>		
     </div>
     <div id='course2'  style="display: none;">
						<div id='titrec'>
							date de début
							<span class="fl dateTime">date limite</span>
 					</div>
						<div id='contenuc'>
						<div id='carac'>Description</div>
						<div id='carac1'>Lorem ipsum dolor sit amet. 33 aperiam tenetur et laudantium 
                            labore et fugit consequatur et recusandae esse eos impedit repellendus. 
                            Eos quas saepe  et iure ipsa a porro sequi sit Quis dolor.</div>				
       </div>
       <div id='prnt'><span id='pronc'>Employés</span> <span id='terrain'>Nom Prénom - Nom Prénom </span></div>
     </div>

     <div id='course3'  style="display: none;">
						<div id='titrec'>
							date de début
							<span class="fl dateTime">date limite</span>
 					</div>
						<div id='contenuc'>
						<div id='carac'>Description</div>
						<div id='carac1'>Lorem ipsum dolor sit amet. 33 aperiam tenetur et laudantium 
                            labore et fugit consequatur et recusandae esse eos impedit repellendus. 
                            Eos quas saepe  et iure ipsa a porro sequi sit Quis dolor.</div>				
       </div>
       <div id='prnt'><span id='pronc'>Employés</span> <span id='terrain'>Nom Prénom - Nom Prénom </span></div>
     </div>

     <div id='course4'  style="display: none;">
						<div id='titrec'>
							date de début
							<span class="fl dateTime">date limite</span>
 					</div>
						<div id='contenuc'>
						<div id='carac'>Description</div>
						<div id='carac1'>Lorem ipsum dolor sit amet. 33 aperiam tenetur et laudantium 
                            labore et fugit consequatur et recusandae esse eos impedit repellendus. 
                            Eos quas saepe  et iure ipsa a porro sequi sit Quis dolor.</div>				
       </div>
       <div id='prnt'><span id='pronc'>Employés</span> <span id='terrain'>Nom Prénom - Nom Prénom </span></div>
     </div>
				</div>

    <div id="deuxieme" style="display: none;">
					<div id='sttr'>
						<a href="#matchParMatch" onclick="show('bMatch');" id='rc2' class='active'>Tâche n°1</a>
						<a href="#compétition" onclick="show('competition');" id='rc1'>Tâche n°2</a>
					</div>
                    <div id='course1'>
						<div id='titrec'>
							date de début
							<span class="fl dateTime">date limite</span>
 					</div>
						<div id='contenuc'>
						<div id='carac'>Description</div>
						<div id='carac1'>Lorem ipsum dolor sit amet. 33 aperiam tenetur et laudantium 
                            labore et fugit consequatur et recusandae esse eos impedit repellendus. 
                            Eos quas saepe  et iure ipsa a porro sequi sit Quis dolor.</div>				
       </div>
       <div id='prnt'><span id='pronc'>Employés</span> <span id='terrain'>Nom Prénom - Nom Prénom </span></div>		
     </div>
     <div id='course2'  style="display: none;">
						<div id='titrec'>
							date de début
							<span class="fl dateTime">date limite</span>
 					</div>
						<div id='contenuc'>
						<div id='carac'>Description</div>
						<div id='carac1'>Lorem ipsum dolor sit amet. 33 aperiam tenetur et laudantium 
                            labore et fugit consequatur et recusandae esse eos impedit repellendus. 
                            Eos quas saepe  et iure ipsa a porro sequi sit Quis dolor.</div>				
       </div>
       <div id='prnt'><span id='pronc'>Employés</span> <span id='terrain'>Nom Prénom - Nom Prénom </span></div>
     </div>
				
				</div>
<?php //  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> ?>

   <script type="text/javascript">
      var divsc = ['course1', 'course2', 'course3', 'course4'];
			var visiblId = null;
      function show(idc) {
        if(visiblId !== idc) {
          visiblId = idc;
        } 
        Hide();
      }
			function Hide() {
						var divc, j, idc;
						for (j = 0; j < divsc.length; j++) {
                            idc = divsc[j];
														divc = document.getElementById(idc);
														if (visiblId === idc) {
                                   divc.style.display = "block";
                                                   }
														else{
															divc.style.display = "none";
														}
													}
											}

						$(document).ready(function(){
							$("#svnq").click(function(){
								$("#res").slideUp();
								$("#nst").slideUp();
								$("#vic").slideToggle("slow");

								var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#dtl .act').classList.remove('act');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('act');
							});

							$("#ssre").click(function(){
								$("#vic").slideUp();
								$("#nst").slideUp();
								$("#res").slideToggle("slow");

								var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#dtl .act').classList.remove('act');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('act');
							});

							$("#ssts").click(function(){
								$("#vic").slideUp();
								$("#res").slideUp();
								$("#nst").slideToggle("slow");

								var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#dtl .act').classList.remove('act');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('act');
							});

            $("#bvnq").click(function(){
              $("#resb").slideUp();
              $("#mjrs").slideUp();
              $("#vicb").slideToggle('slow');

              var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#dtl .act').classList.remove('act');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('act');
            });

            $("#bvmf").click(function(){
              $("#resb").slideToggle('slow');
              $("#mjrs").slideUp();
              $("#vicb").slideUp();

              var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#dtl .act').classList.remove('act');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('act');
            });

            $('#bstat').click(function(){
              $("#resb").slideUp();
              $("#mjrs").slideToggle('slow');
              $("#vicb").slideUp();

              var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#dtl .act').classList.remove('act');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('act');
            });

							$('#pjt').on('click', function(){
       $('#troisieme').css('display', 'none');
       $('#deuxieme').css('display', 'none');
       $('#premier').css('display', 'block');
       $('#quatrieme').css('display', 'none');
      
           var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#pjf .actiV').classList.remove('actiV');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('actiV');
								});
							$('#fond').on('click', function(){
								$('#deuxieme').css('display', 'block');
								$('#premier').css('display', 'none');
        $('#troisieme').css('display', 'none');
        $('#quatrieme').css('display', 'none');
      
           var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#pjf .actiV').classList.remove('actiV');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('actiV');
								});
       $('#tns').on('click', function(){
        $('#troisieme').css('display', 'block');
        $('#deuxieme').css('display', 'none');
        $('#premier').css('display', 'none');
        $('#quatrieme').css('display', 'none');
      
           var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#pjf .actiV').classList.remove('actiV');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('actiV');
       });
       $('#ftb').on('click', function(){
        $('#troisieme').css('display', 'none');
        $('#deuxieme').css('display', 'none');
        $('#premier').css('display', 'none');
        $('#quatrieme').css('display', 'block');
      
           var div = this.parentNode.parentNode;
            
      //On retire la classe active de l'onglet actif
         div.querySelector('#pjf .actiV').classList.remove('actiV');
      //On ajoute la classe active de l'onglet actuel
         this.classList.add('actiV');
       });
       $('#league1').on('click', function(){
        $('#ntl').css('display', 'block');
        $('#Fcompetition').css('display', 'none');
        $('#Fmatch').css('display', 'none');
								
               var div = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
       });
       $('#league2').on('click', function(){
        $('#ntl').css('display', 'none');
        $('#Fcompetition').css('display', 'block');
        $('#Fmatch').css('display', 'none');
								
               var div = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
       });
       $('#league3').on('click', function(){
        $('#ntl').css('display', 'none');
        $('#Fcompetition').css('display', 'none');
        $('#Fmatch').css('display', 'block');
								
               var div = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
       });
       $('#APC').on('click', function(){
        $('#England').css('display', 'block');
        $('#Germany').css('display', 'none');
        $('#Spain').css('display', 'none');
        $('#France').css('display', 'none');
        $('#Italy').css('display', 'none');
        $('#Portugal').css('display', 'none');
        $('#Europe').css('display', 'none');
             
              var divf = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            divf.querySelector('#pays .actif').classList.remove('actif');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('actif');
       });
       $('#ABB').on('click', function(){
        $('#England').css('display', 'none');
        $('#Germany').css('display', 'block');
        $('#Spain').css('display', 'none');
        $('#France').css('display', 'none');
        $('#Italy').css('display', 'none');
        $('#Portugal').css('display', 'none');
        $('#Europe').css('display', 'none');
             
              var divf = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            divf.querySelector('#pays .actif').classList.remove('actif');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('actif');
       });
       $('#ELL').on('click', function(){
        $('#England').css('display', 'none');
        $('#Germany').css('display', 'none');
        $('#Spain').css('display', 'block');
        $('#France').css('display', 'none');
        $('#Italy').css('display', 'none');
        $('#Portugal').css('display', 'none');
        $('#Europe').css('display', 'none');
             
              var divf = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            divf.querySelector('#pays .actif').classList.remove('actif');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('actif');
       });
       $('#FLL').on('click', function(){
        $('#England').css('display', 'none');
        $('#Germany').css('display', 'none');
        $('#Spain').css('display', 'none');
        $('#France').css('display', 'block');
        $('#Italy').css('display', 'none');
        $('#Portugal').css('display', 'none');
        $('#Europe').css('display', 'none');
             
              var divf = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            divf.querySelector('#pays .actif').classList.remove('actif');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('actif');
       });
       $('#ISS').on('click', function(){
        $('#England').css('display', 'none');
        $('#Germany').css('display', 'none');
        $('#Spain').css('display', 'none');
        $('#France').css('display', 'none');
        $('#Italy').css('display', 'block');
        $('#Portugal').css('display', 'none');
        $('#Europe').css('display', 'none');
             
              var divf = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            divf.querySelector('#pays .actif').classList.remove('actif');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('actif');
       });
       $('#PPP').on('click', function(){
        $('#England').css('display', 'none');
        $('#Germany').css('display', 'none');
        $('#Spain').css('display', 'none');
        $('#France').css('display', 'none');
        $('#Italy').css('display', 'none');
        $('#Portugal').css('display', 'block');
        $('#Europe').css('display', 'none');
             
              var divf = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            divf.querySelector('#pays .actif').classList.remove('actif');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('actif');
       });
       $('#LDC').on('click', function(){
        $('#England').css('display', 'none');
        $('#Germany').css('display', 'none');
        $('#Spain').css('display', 'none');
        $('#France').css('display', 'none');
        $('#Italy').css('display', 'none');
        $('#Portugal').css('display', 'none');
        $('#Europe').css('display', 'block');
             
              var divf = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            divf.querySelector('#pays .actif').classList.remove('actif');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('actif');
       });

       
							});
						
						$(document).ready(function(){
							$('#c1').on('click', function(){
							              
                      var div = this.parentNode.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
							});
							$('#c2').on('click', function(){
								
            var div = this.parentNode.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
							});
							$('#c3').on('click', function(){
								
                         var div = this.parentNode.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
							});
							$('#c4').on('click', function(){
        
                         var div = this.parentNode.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
							});
							$('#rc1').on('click', function(){
								$('#competition').css('display', 'block');
								$('#bMatch').css('display', 'none');
        
            var div = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
							});
							$('#rc2').on('click', function(){
								$('#competition').css('display', 'none');
								$('#bMatch').css('display', 'block');
        
                         var div = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
							});
       $('#rc3').on('click', function(){
        $('#Tcompetition').css('display', 'block');
        $('#Tmatch').css('display', 'none');
        
        var div = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
       });
       
       $('#rc4').on('click', function(){
        $('#Tcompetition').css('display', 'none');
        $('#Tmatch').css('display', 'block');
        
        var div = this.parentNode.parentNode;
            
            //On retire la classe active de l'onglet actif
            div.querySelector('#sttr .active').classList.remove('active');
            //On ajoute la classe active de l'onglet actuel
            this.classList.add('active');
       });
						});
  </script>
    </div>
     
     <div class='cold col-xs-12 col-sm-12 col-lg-3'>
       <?php include('../includes/cold.php'); ?>
     </div>
     
   </div>
 </div>
 </div>
 </div>
<div>