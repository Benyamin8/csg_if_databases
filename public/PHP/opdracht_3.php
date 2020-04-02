<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);
$afgekapt=floor(1000000*$rec)/1000000;
//Floor rond af naar beneden//
// opdracht 16 zie ik nergens die regel om aan te kunnen passen//

$a=1.50;
$b=0.75;
$c=round(sqrt(pow($a,2)+pow($b,2)),3);
echo "Volgens de pytagoras regel heeft een driehoek met de rechte zijden $a en $b een schuine zijde van afgerond $c<br>";



echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>";

      $mod=fmod($b,$a);
echo "$b / $a = $mod";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>