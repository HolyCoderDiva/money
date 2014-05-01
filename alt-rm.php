<html>
<head>
</head>
<?php
$presetlist=file_get_contents('presetlist');
$parr=explode("\n",$presetlist);
$pops='<form action="alt-rm.php" method="post"><input type="hidden" name="action" value="load"><select name="presets">';
foreach($parr as $p) { if (!empty($p)) $pops.="\n<option>$p</option>"; }
$pops.='</select><input type="submit" value="Load"><b>MobileAgent Sign Maker</b></form>';
extract($_REQUEST);
if(empty($action))$action='form';
if($action=='load')
	{
	$xpreset=file_get_contents('presets/'.$presets);
	$parr=unserialize($xpreset);
	extract($parr);
	$action='form';
	}
else
	{
	if(empty($title))$title='For Photos & Price TEXT Code';
	if(empty($phone))$phone='727-288-2595';
	if(empty($code))$code='0000';
	if(empty($backcolor))$backcolor='000';
	if(empty($font))$font='Arial Black';
	if(empty($fontcolor))$fontcolor='fff';
	if(empty($titlecolor))$titlecolor='000';
	if(empty($titlebackcolor))$titlebackcolor='fff';
	if(empty($preset))
		{
		$preset='';
		}
	else
		{ // store preset
		$presets=array(
			'title'=>$title,
			'phone'=>$phone,
			'code'=>$code,
			'backcolor'=>$backcolor,
			'font'=>$font,
			'fontcolor'=>$fontcolor,
			'titlecolor'=>$titlecolor,
			'titlebackcolor'=>$titlebackcolor,
			'preset'=>$preset,
			);
		$preset=strtolower($preset);
		file_put_contents('presets/'.$preset,serialize($presets));
		if (strpos(strtolower($presetlist),$preset)===false) 
			{ 
			$presetlist.="\n$preset"; 
			file_put_contents('presetlist',$presetlist); 
			}
		}
	}
$titlecolor=str_replace('#','',$titlecolor);
$titlebackcolor=str_replace('#','',$titlebackcolor);
$backcolor=str_replace('#','',$backcolor);
$fontcolor=str_replace('#','',$fontcolor);

$titlecolor='fff';
$titlebackcolor='000';

$fontcolor='000';
$backcolor='ddd';

$phone=str_replace('-','-',$phone);
?>
<style>
sup{
 vertical-align: 95%;
  font-size:10px;
}
supfull{
 vertical-align: 95%;
  font-size:30px;
}
body{margin: 0px;}
        #sign-rider{
                width: 1764px;
                padding: 0px;
                height: 468px;
                margin-top: 0px;
                position: relative;
                margin: 0px auto;
                left: auto;
                right: auto;
                text-align: center;
                font-family: <?php echo $font; ?>
        }
        #title{
                height: 234px;
                width: 100%;
                text-align: center;
                font-size: 560%;
                font-weight: bold;
                line-height: 234px;
                color: #<?php echo $titlecolor; ?>;
				background-color: #<?php echo $titlebackcolor; ?>;
        }
        #number{
                height: 184px;
                width: 100%;
                color: #<?php echo $fontcolor; ?>;
				background-color: #<?php echo $backcolor; ?>;
                text-align: center;
                font-size: 800%;
                font-weight: bold;
                line-height: 204px;
        }
        #imapp{
                height: 50px;
                width: 100%;
                color: #<?php echo $fontcolor; ?>;
                                background-color: #<?php echo $backcolor; ?>;
                text-align: center;
                font-size: 140%;
                font-weight: bold;
                line-height: 30px;
		margin-bottom: 20px;
        }

        </style>
<?php
	$sign="<div id='sign-rider'>";
	$sign.="<div id='title'><font style='font-size:135%;'>F</font>OR <font style='font-size:135%;'>I</font>NSTANT <font style='font-size:135%;'>P</font>HOTOS & <font style='font-size:135%;'>P</font>RICE</div>
<div id='number'><font style='font-size:65%;'>text </font><font style='font-size:100%;'>$code</font><font style='font-size:65%;'> to</font>$phone</div>
<div id='imapp'>www.iMapp.com</div>";
	$sign.="</div>";
	$sign=fixfull($sign);
switch($action)
	{
	case 'form':
		echo($pops);
		echo("<form action='alt-rm.php' method='post'><br/>");
		echo("<table><tr><td><table>");
		echo("<tr><td>Title</td><td><input type='text' name='title' value='$title'/></td></tr>");
		echo("<tr><td>TColor</td><td><input type='text' name='titlecolor' value='$titlecolor'/></td></tr>");
		echo("<tr><td>TBColor</td><td><input type='text' name='titlebackcolor' value='$titlebackcolor'/></td></tr>");
	 	echo("<tr><td>Phone</td><td><input type='text' name='phone' value='$phone'/></td></tr>");
	 	echo("<tr><td>Code</td><td><input type='text' name='code' value='$code'/></td></tr>");
	 	echo("<tr><td>BColor</td><td><input type='text' name='backcolor' value='$backcolor'/></td></tr>");
	 	echo("<tr><td>Font</td><td><select name='font' value='$font'/>".fops($font)."</select></td></tr>");
		echo("<tr><td>FColor</td><td><input type='text' name='fontcolor' value='$fontcolor'/></td></tr>");
		echo("<tr><td>Preset</td><td><input type='text' name='preset' value='$preset'/></td></tr>");
		echo("<tr><td>Action</td><td><select name='action'><option>form</option><option>show</option></td></tr>");
		echo("</table></td><td><b><u>Fonts</u></b><br/>".fonts()."</td>");
                echo("<td>");
		echo($sign);
		echo("</td><td>Adjust your settings on the left to create your sign. View full screen using Action \"Show\", OR copy the link to access your graphic.</br>");
$xtitle=percentencode($title);
$verscapture="http://themoneycompany.com/alt-rm.php?title=$xtitle&titlecolor=$titlecolor&titlebackcolor=$titlebackcolor&phone=$phone&code=$code&backcolor=$backcolor&font=$font&fontcolor=$fontcolor&action=show";
$vers=$verscapture;
$verscapture="https://verscapture.com/advanced_api.php?key=a5b193576e33cbebbeba7d6d1cdbeb26&vheight=full&vwidth=1200&url=".urlencode($verscapture);
$verscapture = file_get_contents($verscapture); $verscapture = json_decode($verscapture, true); $verscapture = $verscapture['render'].'&imgtag=y';
		echo("Download Link:</br><a href=\"$verscapture\">CLICK HERE</a><br/>(click once, throw away the download, then click again)<br/>Copy and paste this link to send to a friend.</td></tr></table>");
		echo("<input type='submit' value='SAVE AND SHOW' /><br/></form><br/><b>Here is the link to this graphic:</b><br/>$verscapture<hr><b>Here is the link to this as html:</b><br/>$vers<hr>");
		break;
	case 'show':
		echo("<body>$sign");
                echo("<h4 style=\"color:#$fontcolor;font-family:;font-size:10px;\">Produced by MobileAgentUSA.com</h4></div></div>");
	}

?>
</body>
</html>
<?
function fops($txt) {
$r=<<<EOF
<option>Antiqua</option>
<option>Arial</option>
<option>Arial Black</option>
<option>Calibri</option>
<option>Comic Sans</option>
<option>Courier</option>
<option>Decorative</option>
<option>Garamond</option>
<option>Georgia</option>
<option>Helvetica</option>
<option>Impact</option>
<option>Monospace</option>
<option>Palatino</option>
<option>Roman</option>
<option>Times New Roman</option>
<option>Verdana</option>
EOF;
return(str_replace('<option>'.$txt.'</option>','<option selected>'.$txt.'</option>',$r));
}
function fonts() {
$r= <<<EOF
<font face="Antiqua">Antiqua</font><br/>
<font face="Arial">Arial</font><br/>
<font face="Calibri">Calibri</font><br/>
<font face="Comic Sans">Comic Sans</font><br/>
<font face="Courier">Courier</font><br/>
<font face="Decorative">Decorative</font><br/>
<font face="Garamond">Garamond</font><br/>
<font face="Georgia">Georgia</font><br/>
<font face="Helvetica">Helvetica</font><br/>
<font face="Impact">Impact</font><br/>
<font face="Monospace">Monospace</font><br/>
<font face="Palatino">Palatino</font><br/>
<font face="Roman">Roman</font><br/>
<font face="Times New Roman">Times New Roman</font><br/>
<font face="Verdana">Verdana</font><br/>
EOF;
return($r);
}
function fix($text)
	{
	$t=$text;
	$t=str_replace('[reg]','<sup>&reg;</sup>',$t);
	$t=str_replace('[copy]','<sup>&copy;</sup>',$t);
	return($t);
	}
function fixfull($text)
        {
        $t=$text;
        $t=str_replace('[reg]','<supfull>&reg;</supfull>',$t);
        $t=str_replace('[copy]','<supfull>&copy;</supfull>',$t);
	return($t);
        }
function percentencode($ascii)
	{
	$hex = '';
	for ($i = 0; $i < strlen($ascii); $i++) 
		{
		$byte = strtoupper(dechex(ord($ascii{$i})));
		$byte = str_repeat('0', 2 - strlen($byte)).$byte;
		$hex.='%'.$byte;
		}
	return($hex);
	}
?>
