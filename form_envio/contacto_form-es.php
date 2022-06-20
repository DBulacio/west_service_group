<?php
if(isset($_POST['nombre']))
{
    //CONVERSION DE CARACTERES ETAPA 1
    $nombre = utf8_encode($_POST['nombre']);
    $email_cliente = utf8_encode($_POST['email']);
    $email = "business@westservicegroup.com";
    $telefono = utf8_encode($_POST['telefono']);
    $empresa = utf8_encode($_POST['empresa']);
    $website = utf8_encode($_POST['website']);
    $pais = utf8_encode($_POST['pais']);
    $direccion = utf8_encode($_POST['direccion']);

    if(isset($_POST['servicios_check_1']))
    {
        $servicios_check_1 = "Si";
    }
    else
    {
        $servicios_check_1 = "No";
    }
    if(isset($_POST['servicios_check_2']))
    {
        $servicios_check_2 = "Si";
    }
    else
    {
        $servicios_check_2 = "No";
    }
    if(isset($_POST['servicios_check_3']))
    {
        $servicios_check_3 = "Si";
    }
    else
    {
        $servicios_check_3 = "No";
    }
    if(isset($_POST['servicios_check_4']))
    {
        $servicios_check_4 = "Si";
    }
    else
    {
        $servicios_check_4 = "No";
    }
    if(isset($_POST['servicios_check_5']))
    {
        $servicios_check_5 = "Si";
    }
    else
    {
        $servicios_check_5 = "No";
    }
    if(isset($_POST['servicios_check_6']))
    {
        $servicios_check_6 = "Si";
    }
    else
    {
        $servicios_check_6 = "No";
    }
    if(isset($_POST['servicios_check_7']))
    {
        $servicios_check_7 = "Si";
    }
    else
    {
        $servicios_check_7 = "No";
    }
    if(isset($_POST['servicios_check_8']))
    {
        $servicios_check_8 = "Si";
    }
    else
    {
        $servicios_check_8 = "No";
    }
    if(isset($_POST['servicios_check_9']))
    {
        $servicios_check_9 = "Si";
    }
    else
    {
        $servicios_check_9 = "No";
    }
    if(isset($_POST['servicios_check_10']))
    {
        $servicios_check_10 = "Si";
    }
    else
    {
        $servicios_check_10 = "No";
    }
    if(isset($_POST['servicios_check_11']))
    {
        $servicios_check_11 = "Si";
    }
    else
    {
        $servicios_check_11 = "No";
    }
    $mensaje = utf8_encode($_POST['mensaje']);
    $fecha = date("d/m/Y");
    if($fecha == "")
    {
        $fecha = "00/00/0000";
    }

    //CONVERSION DE CARACTERES ETAPA 2
    $nombre = utf8_decode($nombre);
    $email = utf8_decode($email);
    $telefono = utf8_decode($telefono);
    $empresa = utf8_decode($empresa);
    $website = utf8_decode($website);
    $mensaje = utf8_decode($mensaje);
    $pais = utf8_decode($pais);
    $direccion = utf8_decode($direccion);

    //ENVIO DE MAIL DE BIENVENIDA
    $mail = '';
    $headers = '';
    $mail = '
    <!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>MAIL DESDE CONTACT</title>
    <style type="text/css">
    body,td,th
    {
        font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
        font-size: 18px;
        color: #000000;
    }
    body
    {
        background-color: #ffffff;
        color: #000000;
        margin-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }
    </style>

    </head>

    <body>
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td width="600" height="10" colspan="3" class="">&nbsp;</td>
        </tr>
        <tr>
            <td width="38" class="">&nbsp;</td>

            <td width="526" class="" style:font-size: 12px, font-color: black;>
            <p><b>FECHA:</b> ' . $fecha . '</p>
            <br><br>
            <p><b>NOMBRE:</b> ' . $nombre . '</p>
            <p><b>E-MAIL:</b> ' . $email_cliente . '</p>
            <p><b>TELEFONO:</b> ' . $telefono . '</p>
            <p><b>EMPRESA:</b> ' . $empresa . '</p>
            <p><b>WEBSITE:</b> ' . $website . '</p>
            <p><b>PAIS:</b> ' . $pais . '</p>
            <p><b>DIRECCION:</b> ' . $direccion . '</p>
            <br><br>
            <p><b>Indica en que servicios principales estas interesado:</b></p>
            <p><b>GESTION DE REDES SOCIALES:</b> ' . $servicios_check_1 . '</p>
            <p><b>DISEÑO WEB:</b> ' . $servicios_check_2 . '</p>
            <p><b>DISEÑO E IMPLEMENTACION DE E-COMMERCE:</b> ' . $servicios_check_3 . '</p>
            <p><b>CONTACT CENTER:</b> ' . $servicios_check_7 . '</p>
            <p><b>CRIPTOMONEDAS:</b> ' . $servicios_check_10 . '</p>
            <p><b>AGENTE DE COMPRA EN CHINA:</b> ' . $servicios_check_11 . '</p>
            <br><br>
            <p><b>Indica en que servicios específicos estas interesado:</b></p>
            <p><b>PUBLICIDAD EN FACEBOOK:</b> ' . $servicios_check_4 . '</p>
            <p><b>PUBLICIDAD EN LINKEDIN:</b> ' . $servicios_check_5 . '</p>
            <p><b>PUBLICIDAD EN INSTAGRAM:</b> ' . $servicios_check_6 . '</p>
            <p><b>ANALITICA Y DATOS DEL MERCADO INMOBILIARIO:</b> ' . $servicios_check_8 . '</p>
            <p><b>ESTUDIOS DE MERCADO:</b> ' . $servicios_check_9 . '</p>
            <br><br>
            <p><b>MENSAJE:</b> ' . $mensaje . '</p>

            </td>

            <td width="36" class="">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3"></td>
        </tr>
        </tbody>
    </table>
    </body>
    </html>
    ';
    $mail = utf8_decode($mail);
    //TITULO DEL MAIL
    $titulo = "MENSAJE DE: $nombre, $empresa";
    //CABECERA
    $headers .= "Organization: West Serices Group\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    //MAIL DEL REMITENTE
    $headers .= "Reply-To: West Serices Group <business@westservicegroup.com>\r\n";
    $headers .= "Return-Path: West Serices Group <business@westservicegroup.com>\r\n";
    $headers .= "From: West Serices Group <business@westservicegroup.com>\r\n";
    //ENVIO DEL MAIL
    $bool = mail($email, $titulo, $mail, $headers, '-f business@westservicegroup.com');
    if($bool)
    {
        //echo "Mensaje enviado";
        header('Location: ../es/contact_ok-es.php');

    }
    else
    {
        //echo "Mensaje no enviado";
        header('Location: ../es/contact_error-es.php');
    }
}
else
{
    header('Location: ../es/contact_error-es.php');
    //$nombre = "x";
}
?>