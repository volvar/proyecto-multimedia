<?php 

	$var1 = $_POST['url'];

	
	if(strlen($var1) <= 0) exit("No se recibió ninguna imagen");
//La imagen traerá al inicio data:image/png;base64, cosa que debemos remover
$imagenCodificadaLimpia = str_replace("data:image/png;base64,", "", urldecode($var1));

//Venía en base64 pero sólo la codificamos así para que viajara por la red, ahora la decodificamos y
//todo el contenido lo guardamos en un archivo
$imagenDecodificada = base64_decode($imagenCodificadaLimpia);

//Calcular un nombre único
$nombreImagenGuardada = "foto_" . uniqid() . ".jpg";

//Escribir el archivo
file_put_contents($nombreImagenGuardada, $imagenDecodificada);

//Terminar y regresar el nombre de la foto
exit($nombreImagenGuardada);
echo file_get_contents($var1);
 ?>

<!-- 
 link.setAttribute( 'href', url);
                    link.setAttribute( 'href', filename);
                    link.setAttribute( 'href', "guardar.php?name="+filename);
                    link.style.visibility = 'hidden';
                    window.document.body.appendChild( link );
                    link.click();
                    window.document.body.removeChild( link ); -->