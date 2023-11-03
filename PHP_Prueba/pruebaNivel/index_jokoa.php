   <?php
        include_once 'model_jokoa.php';
        include_once 'bista.php';

        $usuario_vista = new Login_Bista();
        $usuario_vista->HasierakoFormularioa();
     
        ?>
  
   <?php 
   
   $joko_arraya=["Zein da urrearen elemetu kimikoa?" => array("Fr", "Au", "Ur"),
   "Urdina eta gorriaren nahasketatatik zer ateratzen da?" =>array("Berdea", "Morea"), 
   "Zenbat da 4x4?" => array("7", "16", "14", "15")];
   
   //Galdera eta erantzunaren array asoziatiboa.
   //Array asociativo de la pregunta con su respuesta.
   $emaitzen_arraya=["Zein da urrearen elemetu kimikoa?" => "Au",
   "Urdina eta gorriaren nahasketatatik zer ateratzen da?" => "Morea",
   "Zenbat da 4x4?" => "16"];
   
   if (isset($_POST['botoia']) && ! empty($_POST['opcion'])) {
       
       switch ($_POST['opcion']){
           case "zerrenda":
               if (!empty($_POST['erab']) && !empty($_POST['ph'])) {
                   $usuario = new Model_Jokoa();
                   $usuario->conectar();
                   if ($usuario->validado($_POST['erab'], $_POST['ph'])) {
                       
                       $usuario_vista->zerrendatu($usuario->consulta());
                       
                   } else {
                      echo '<p>Datos incorrectos</p>';
                   }
               }
               break;
           case "jokatu":
               if (!empty($_POST['erab']) && !empty($_POST['ph'])) {
              
                   $usuario_vista ->galdera_erantzunak_marraztu($joko_arraya);
                   foreach ( $emaitzen_arraya as $pre -> $res){
                       if($joko_arraya[$_POST("galdera'.$kont++")]= $_POST()===$emaitzen_arraya=[""]= "Au"){
                           echo "respuesta correcta";
                       }
                   }
               }
               
               break;
       }
    
   
   }
   ?>