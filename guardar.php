 <?php
        $miconn= new mysqli("10.20.25.214","root","avaras08","datospersonales");
        
        if($miconn ->connect_errno)
        {
            echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ")" . $miconn->connect_errno;
        }
        
        $nom=$_POST['nombre'];
        $ape=$_POST['apellido'];
        $infoconexion=$miconn->client_info;
        
        $sql=" INSERT INTO persona(nombre,apellido,host) values('$nom','$ape');";
        
        
        $sqlip="select host from information_schema.processlist WHERE ID=connection_id();";
        $resultado = $miconn->query($sqlip);
        


//Consultas de seleccion que devuelven un conjunto de resultados
        if($resultado = $miconn->query($sql))
        {
        //liberar el conjunto de resultados
        $miconn->close();
        }     
        
        ?>