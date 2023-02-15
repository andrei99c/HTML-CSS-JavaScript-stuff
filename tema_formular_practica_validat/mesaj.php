<?php
$nume = $_POST["nume"];
$prenumele = $_POST["prenume"];
$telefon = $_POST["tel"];
$email = $_POST["email"];
$gen = $_POST["tipul"];
$facultate = $_POST["facultatea"];
$an = $_POST["anstudiu"];
$firma = $_POST["firma"];
$tema = $_POST["tema"];
$judet = $_POST["judet"];

echo "FELICITARI, AI TERMINAT CU SUCCES PRACTICA DE VARA!";
echo "<br/>";



echo ($gen=="masculin"? "Studentul":"Studenta")." ".$nume." ".$prenumele.", a terminat cu succes $tema de practica la $firma. Va rugam sa verificati daca datele dumneavostra corespund pentru a putea fi contactati de catre colegii nostrii de la HR: ";
echo "</br>" ;
echo "$nume $prenumele";
echo "</br>" ;
echo "tel: $telefon";
echo "</br>" ;
echo "email: $email ";
echo "</br>" ;
echo  "judet: $judet";
echo "<br/>";
echo "<br/>";

if ($_POST["practica"]==1)
	echo "Practica sa desfasurat online la sediul $firma cu $tema.";
else
	echo "Practica sa desfasurat la sediul $firma cu $tema ";
?>

