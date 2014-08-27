<?php extract($_REQUEST); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REVISTA N&deg;18 - MERCADONEGRO</title>
<style type="text/css">
<!--
body {
  margin-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
}
-->
</style></head>

<body>
<!-- Imagenes cargadas en el CDN de Mercado Negro -->
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="http://cludmn.net/14/08/10/ed1d82c97a88160d6a23e0838f2ec98e.jpg"><table width="969" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="400" colspan="2" background="http://cludmn.net/14/08/10/392b9d4aa206c7a5f8d365c9fb628c10.jpg">&nbsp;</td>
        </tr>
        <tr>
          <td height="201" colspan="2"><div align="center"><img src="http://cludmn.net/14/08/10/c6a3083a51dcfce6ae98ac7869cdb55a.jpg" width="878" height="201" /></div></td>
        </tr>
        <tr>
          <td height="31" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="677" height="2137"><p><img src="http://cludmn.net/14/08/10/3b8b4a506ea5cd93868916aa3f6abd5d.jpg" width="362" height="35" /></p>
            <p><img src="http://cludmn.net/14/08/10/d23a77c9dcc6e2a287030d9f1a48d3d2.jpg" width="607" height="271" hspace="30" /></p>
            <p><img src="http://cludmn.net/14/08/10/a5513856b86cc923a8062784a30af797.jpg" width="288" height="35" vspace="20" /><img src="http://cludmn.net/14/08/10/12d45c661fd17fc7eb9a1bef846266bf.jpg" width="594" height="196" hspace="35" /></p>
            <p><img src="http://cludmn.net/14/08/10/cdc469e29341ce24943c7b6bed3f1908.jpg" width="514" height="35" vspace="20" /><img src="http://cludmn.net/14/08/10/6160d676c2cda70d233f9566455b29d1.jpg" width="593" height="153" hspace="35" /></p>
            <p><img src="http://cludmn.net/14/08/10/0eaa46f649adb6763338d980506c4c60.jpg" width="612" height="217" hspace="25" /></p>
            <p align="center"><img src="http://cludmn.net/14/08/10/c7978a93c303024a4f18925dd363ba27.jpg" width="519" height="87" /></p>
            <p><img src="http://cludmn.net/14/08/10/4a681de9b39c473f96f2dfc920544513.jpg" width="568" height="60" hspace="35" vspace="10" /></p>
            <p><img src="http://cludmn.net/14/08/10/adc1499ff885c30b46b671eb184fa05f.jpg" width="628" height="236" hspace="35" vspace="10" /></p>
            <p><img src="http://cludmn.net/14/08/10/1f34ea1dd42b6aa95ca590633fd9ca2a.jpg" width="519" height="35" vspace="20" /></p>
            <p><img src="http://cludmn.net/14/08/10/2c4a09c2a7e317820bde8c953391dac3.jpg" width="582" height="245" hspace="35" border="0" usemap="#Map" /></p>
            <p><img src="http://cludmn.net/14/08/10/3ab3fbd7dc2dcf305063c1afc368aa51.jpg" width="513" height="35" vspace="20" /></p>
            <p><img src="http://cludmn.net/14/08/10/b3db6d6f3d7b833ea2c8db2a36804c3a.jpg" width="587" height="210" hspace="35" /></p>
          <p>&nbsp;</p></td>
          <td width="292" style="background: url(http://cludmn.net/14/08/10/6d247ec8a8a74e3efd75a4d8747d03c8.jpg) no-repeat">
		  <div align="center"><iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmercadonegro.publicidad%3Ffref%3Dts&amp;width=250&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:290px;" allowTransparency="true"></iframe></div>
		  
		  <p><img src="http://cludmn.net/14/08/10/18fa40d1b9bb241cb6fc9ddbd4a11725.png" width="226" height="35" vspace="20" /></p>
         <?php
            if(isset($_POST['enviar']) && !empty($empresa) && !empty($nombres) && !empty($correo) && !empty($telefono) && !empty($comentarios)){
               /* AQUÍ ESPECIFICAS EL CORREO AL CUAL QUIRES QUE SE ENVÍEN LOS DATOS
               DEL FORMULARIO, SI QUIERES ENVIAR LOS DATOS A MÁS DE UN CORREO,
               LOS PUEDES SEPARAR POR COMAS */
               //$para ="contacto@mercadonegro.pe, karina.torres@mercadonegro.pe, milagros.leiva@mercadonegro.pe";
               $para = "cesar.vera@mercadonegro.pe, jromani@mercadonegro.pe";
               /* AQUI ESPECIFICAS EL SUJETO (Asunto) DEL EMAIL */
               $sujeto = "CONSULTA MINISITE REVISTA N°18 - MERCADO NEGRO";
               /* aquí se construye el encabezado del correo, en futuras
               versiones del script explicaré mejor esta parte */ 
               $headers = "MIME-Version: 1.0\r\n";
               $headers.= "From: Revista MERCADONEGRO <contacto@mercadonegro.pe>\r\n";
               $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
               $headers.= "X-Mailer: PHP/" . phpversion();
               /* las siguientes líneas arman el mensaje */
               $mensaje .= "NOMBRES: ".utf8_encode($nombres)."\n";
               $mensaje .= "EMPRESA: ".utf8_encode($empresa)."\n";
               $mensaje .= "TELEFONO: ".utf8_encode($telefono)."\n";
               $mensaje .= "E-MAIL: $correo\n";
               $mensaje .= "CONSULTA: ".utf8_encode($comentarios)."\n";
               /* aqui se intenta enviar el correo, si no se
               tiene éxito se da un mensaje de error */
               if(!mail($para, $sujeto, $mensaje, $headers))
               {
                  echo "<script>alert('ERROR:</strong> No se pudo enviar el Mensaje');</script>";
                  exit();
               }else{
                  echo '<script>alert("Su mensaje fue enviado correctamente, en breve nos comunicaremos con usted.");</script>';
               }
            }
         ?>
        <form action="index.php" method="post">
            <table width="230" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td width="232"><input name="empresa" type="text" id="empresa" placeholder="Agencia / Empresa:" style="padding:3px 5px; width:95%"/></td>
              </tr>
              <tr>
                <td><input name="nombres" type="text" id="nombres" placeholder="Nombres y Apellidos:" style="padding:3px 5px; width:95%"/></td>
              </tr>
              <tr>
                <td><input name="correo" type="text" id="correo" placeholder="Correo:" style="padding:3px 5px; width:95%"/></td>
              </tr>
              <tr>
                <td><input name="telefono" type="text" id="telefono" placeholder="Teléfono:" style="padding:3px 5px; width:95%"/></td>
              </tr>
              <tr>
                <td><label>
                  <textarea name="comentarios" rows="5" style="padding:3px 5px; width:95%" placeholder="Comentarios:"></textarea>
                </label></td>
              </tr>
              <tr>
                <td height="41"><div align="center">
                  <input type="reset" name="borrar" value="Borrar" style="border:0px; background-color:#585757; color:white; padding:6px 18px;" />
                  <input name="enviar" type="submit" id="enviar" value="Enviar" style="border:0px; background-color:#ab41b9; color:white; padding:6px 18px;"/>
                </div></td>
              </tr>
              </table>
			</form>
            <p><img src="http://cludmn.net/14/08/10/b05f06af64d57a1d5b67a9b9444a39ef.png" vspace="10" /></p>
            <p><img src="http://cludmn.net/14/08/10/44e688f5d0607ba369607f37ff8c4479.jpg" border="0" usemap="#Map" style="margin-left:25px" /></p>
          <p align="center"><img src="http://cludmn.net/14/08/10/e2b58e9a9fd5ebe0b3d5d56d80f543e4.png" vspace="20" /><img src="http://cludmn.net/14/08/10/0c5712a67893810dbdf5267f1d1f45fd.jpg" width="248" height="513" /><img src="http://cludmn.net/14/08/10/858ac9219b8e06bb04c15f55b5684e59.jpg" width="248" height="195" vspace="5" /><img src="http://cludmn.net/14/08/10/d97df424ca9d8bb0c25ae20df9d68e3c.jpg" width="248" height="270" /><img src="http://cludmn.net/14/08/10/cbb8f7b0d9b753907fa3631e114bfb6f.jpg" width="248" height="295" vspace="5" /></p></td>
        </tr>
        <tr>
          <td height="270" colspan="2" background="http://cludmn.net/14/08/10/e2003e2086244c1dbb92c20e0b8d9311.jpg">&nbsp;</td>
        </tr>
        </table></td>
  </tr>
</table>


<map name="Map" id="Map">
<area shape="circle" coords="19,85,18" href="https://www.facebook.com/mercadonegro.publicidad" target="_blank" />
<area shape="circle" coords="18,227,18" href="https://www.youtube.com/user/MercadoNegroTV1" target="_blank" />
</map></body>
</html>
