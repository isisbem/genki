<html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<link href="../jquery-ui-1.12.0.custom/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<head>
<script type="text/javascript" src="../jquery-2-1-4/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../jquery-ui-1.12.0.custom/jquery-ui.js"></script>
<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
window.cookieconsent_options = {"message":"Questo sito usa cookie tecnici di terze parti per la gestione dei men&ugrave; e delle sessioni di autenticazione e per migliorare l\'esperienza di utilizzo. Informativa ai sensi G.U. n.126 del 3 giugno 2014. Proseguendo nella navigazione all'interno delle pagine del presente sito, se ne accetta implicitamente l'uso.","dismiss":"OK!","learnMore":"","link":"","theme":"dark-top"};
</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- <script> $(document).ready(function(){
            $('#finestra').dialog({
				modal: true,
				width: 650,
				height: 130,
        })
		});
</script> -->
<!-- End Cookie Consent plugin -->

<?php
session_start();

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo '<head>';

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	
echo '<meta name="keywords" content="" />';
echo '<meta name="description" content="Genki, plot" />';
echo '<title>Genki - Plot</title>';
	
echo '<meta http-equiv="Pragma" content="no-cache" />';

echo '<meta content="no-cache" http-equiv="no-cache" />';
echo '<meta http-equiv="Cache-Control" content="no-cache" />';
echo '<meta http-equiv="expires" content="0" />';
echo '<meta name="robots" content="index, follow" />';
echo '<meta name="googlebot" content="index, follow" />';

    echo '<table align="center" style="width: 85%; margin:auto;" cellpadding="0">';
    echo '<tr><td><font face="Conv_Zag Regular" size="5" align="left" color="#2D7EA1">'.$scuola_intest.'<br>'.$scuola_nome1.'<br>'.$scuola_nome2.'</td>';
    echo '<td align="right"><font face="Conv_Zag Regular" size="5" color="#2D7EA1"><i>Progetto Genki<br>area di graficazione ed analisi dei dati</i></td></tr>';
    echo '<tr><td style="background-color:#2D7EA1;" colspan="2">&nbsp;</td></tr>';
    echo '</table>';
	
?>
</html>