<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/xmas07.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Viva! Very Veggie Christmas</title>
<meta name="keywords" content="Viva, vegetarian, vegan, fois-gras, christmas, recipes, xmas">
<meta name="description" content="Welcome to a Very Veggie Christmas with Viva!">
<!-- InstanceEndEditable -->
<link href="/christmas/includes/styles.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><div align="center"><img src="/christmas/images/banner.gif" alt="" width="685" height="103"></div></td>
  </tr>
  <tr>
    <td><table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="content"><p align="center"><a href="/christmas/index.php">Home</a> | <a href="http://vegetarianrecipeclub.org.uk/christmas" target="_blank">Recipes</a> | <a href="http://www.viva.org.uk/what-we-do/foie-gras-free-britain">Foie-gras free Christmas</a> | <a href="http://www.viva.org.uk/what-we-do/go-veggie-christmas">Save Turkeys</a> | <a href="http://www.viva.org.uk/what-we-do/our-work/ducks">Save Ducks</a><br>
          <a href="http://www.vivashop.org.uk/adventcalendar">Advent calendar</a> | <a href="/christmas/sendcard01.php">Send our e-card</a> | <a href="christmas-food-shopping-plan.php">Food shopping list</a> |  <a href="/whydonate.html">Donate to Viva!</a></p><div float="right"><!-- AddThis Button BEGIN -->
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pub=xa-4ac1feed33a81a86"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0; margin:2px;" align="absmiddle"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4ac1feed33a81a86"></script>
<!-- AddThis Button END --></div>
          <!-- InstanceBeginEditable name="content" -->
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','588','height','439','src','/christmas/images/card','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','/christmas/images/card' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="588" height="439">
            <param name="movie" value="/christmas/images/card.swf">
            <param name="quality" value="high">
            <embed src="/christmas/images/card.swf" width="588" height="439" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
          </object></noscript>
          <?
		  		  include ("../_require.php");
				  $query="SELECT message FROM xmascard WHERE cardid='$id' AND pid='$pid' LIMIT 1";
$result=mysql_db_query ($dbname, $query, $link);
$row=mysql_fetch_array ($result);
$message=$row['message'];
$message = str_replace ("\n","<br>", $message);

print "$message";
?>
          <!-- InstanceEndEditable -->
          <p align="center" class="smalltext">Viva! Vegetarians International Voice for Animals<br>
            8 York Court, Wilder Street, Bristol BS2 8QH, UK<br>
          T: 0117 944 1000 F: 0117 924 4646 E: <a href="mailto:info@viva.org.uk" target="_blank">info@viva.org.uk</a></p></td>
      </tr>
      <tr>
        <td><img src="/christmas/images/footer.gif" alt="" width="640" height="30"></td>
      </tr>
    </table></td><td align="left" valign="top">   <p>
            <a href="http://www.viva.org.uk/supporter/membershipform.htm"><img src="/christmas/images/join-viva-christmas-animals.gif" border="0"></a></p><p><!-- HTML EJ BUTTON CODE -->
<script type='text/javascript'><!--// <![CDATA[
    /* [id80] Viva! - Vertical 120 x 600 */
    OA_show(80);
// ]]> --></script><noscript>
<a target='_blank' href='http://www.ethicalads.net/adserver/www/delivery/ck.php?n=010e2eb'><img border='0' alt='' src='http://www.ethicalads.net/adserver/www/delivery/avw.php?zoneid=80&amp;n=010e2eb' /></a></noscript>
            <!-- END HTML BUTTON CODE -->
            </p></td>
      </tr>
    </table></td>
  </tr>
</table>
 <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2122047-1";
urchinTracker();
</script></body>
<!-- InstanceEnd --></html>
