<?php
$konta = array(
"1"=>array(
'imie'=>'Wioletta',
'nazwisko'=>'Marcinek',
'stan_konta'=>'6792zl',
'przedmiot'=>'Polski'),
"2"=>array(
'imie'=>'Tomasz',
'nazwisko'=>'Orka',
'stan_konta' =>'99zl',
'przedmiot'=>'Biologia',
),
"3"=>array(
'imie'=>'Marta',
'nazwisko'=>'Stopa',
'stan_konta'=>'3151zl',
'przedmiot'=>'Matematyka'),
);
foreach ($konta as $konto){
echo $konto ['imie'].' ';
echo $konto ['nazwisko'].' ';
if($konto ['przedmiot']=='Polski'){echo $konto ['stan_konta']*0.23;}
if($konto ['przedmiot']=='Matematyka'){echo $konto ['stan_konta']*0.57;}
if($konto ['przedmiot']=='Biologia'){echo $konto ['stan_konta']*0.08;}
}
?>
