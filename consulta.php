<?php
$idpersona=$_POST["idpersona"];
        $miconn= new mysqli("10.20.25.214","root","avaras08","datospersonales");
        
        if($miconn ->connect_errno)
        {
            echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ")" . $miconn->connect_errno;
        }
    
        $sql=" SELECT *FROM persona where idpersona=$idpersona";
        
        $resultado = $miconn->query($sql);

        
        ?>

<?php        
        while($fila = $resultado->fetch_assoc())
        {
           echo $fila["nombre"]."\n";
           echo "<br>";
           echo $fila["apellido"]."\n";
           echo "<br>";
        }
        ?>

