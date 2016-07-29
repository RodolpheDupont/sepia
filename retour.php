<?php
	$ajout2 = "";
	$testAjout = "";
	if(isset($_GET["erreur"])){
		if ($_GET["erreur"]=="ok"){
			$texte = "Votre paiement a &eacute;t&eacute; accept&eacute;.";
		}else if ($_GET["erreur"]=="annule"){
			$texte = "Votre paiement a &eacute;t&eacute; annul&eacute;.";
		}else if ($_GET["erreur"]=="refuse"){
			$texte = "Votre paiement a &eacute;t&eacute; refus&eacute;.";
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" lang="fr-fr" >
<head>
<title>Universite Paris 13</title>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<meta name="robots" content="noindex,nofollow" />
<script type="text/javascript" src="experice/includes/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="experice/includes/js/jquery-validval-3.1.2.min.js"></script>
<script type="text/javascript" src="experice/includes/js/script.js"></script>
<link type="text/css" rel="stylesheet" href="//cdn.univ-paris13.fr/includes/css/fonts.css">
<link type="text/css" href="experice/includes/css/style.css" rel="stylesheet" />
</head>
<body>
<table width="584" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="35"> </td>
  </tr>
  <tr>
    <td align="center" style="font-size:14px; font-weight:bold;"><?php echo $texte;?></td>
  </tr>
  
</table>
</div>
</body>
</html>