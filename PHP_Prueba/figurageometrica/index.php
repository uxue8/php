<?php include 'figurageometrica.php';
    $a=new figuraGeometrica("cuadrado","negro");
    
   $a->escribir();
    
    
?>
<?php include 'triangulo.php';
    $b= new Triangulo("triangulo",50 ,"rojo", 30);
    $b->escribir();
    $b->azalera();
?>