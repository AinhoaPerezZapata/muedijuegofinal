<?php

require "BD/conectorBD.php";
require "BD/DAOplataforma.php";

$conexion = conectar(false);
if($_POST){
    $Noticia = $_POST['Buscar'];


     echo '<ul>';
       
        $busqueda = busqueda($conexion,$Noticia);
        while ($busquedaNoticia = mysqli_fetch_assoc($busqueda)){
            ?>
        
        <li onclick='fill("<?php echo $busquedaNoticia['Titulo'] ?>")'>
        
            <a  href="detallesnoticia.php?id=<?php echo $busquedaNoticia['idNoticias']; ?>" value="Detalles" name="Detalles"><?php echo $busquedaNoticia['Titulo']; ?></a>
        </li></a>
        
        <?php
     }}
     ?>
     </ul>
 
  