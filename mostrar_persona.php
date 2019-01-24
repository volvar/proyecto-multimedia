<?php
   function getFruit($conn) {
    $sql = 'SELECT * FROM usuario U JOIN persona P ON U.id_usuario = P.id_usuario';
    foreach ($conn->query($sql) as $row) {
         $row['rut'] ;
         $row['nombres'] ;
         $row['apell_pat'] ;
         $row['apell_mat'] ;
         $row['correo_institucional'] ;
         $row['correo_personal'] ;
         $row['	telefono'] ;
         $row['	tipo_usario'] ;
    }
}
?>

>?