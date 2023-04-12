<?php
if(isset($_POST['submit'])){


$market_cap =  $_POST['market_cap'];
$pe = $_POST['pe'];
$pholding = $_POST['pholding'];
$de = $_POST['DE'];
$profit = $_POST['Profit'];

// logic of 
// Market Cap < 5000cr         ( 1001 - 3000 cr [9]) ; (3001 - 5000 cr [8])
// PE 				    ( <8 [10] , <18 [9] , <25 [8] , <50 [5] , <75 [4] , >75 [1] )
// Promoter Holding            ( <25 [4] , <50 [6] , <65 [7] , <75 [8] , <82 [9] , >99 [10] )
// D/E                         ( <0 [3] , <1 [10] , <1.5 [9] , <2 [8] , >2 [4] , >4 [1] )
// Profit/Loss Previous Fy     ( Yes [10], No[5] )
$mcap; $P_E ; $phol;$DE ; $pro ; $total;


// conditions for market CAP
if($market_cap >5000){
    echo "Market cap should be less tha 5,000 Cr.";
} elseif ($market_cap>=1001 and $market_cap <=3000) 
{
    $mcap = 9;
}
else
{
    $mcap= 8;
}

// condition for PE
if($pe>75){
    $P_E = 1;
}
elseif($pe>=51 and $pe<=75){
    $P_E = 4;
}
elseif($pe>=26 and $pe<=50){
    $P_E=5;
}
elseif($pe>=19 and $pe<=25){
    $P_E=8;
}
elseif($pe>=9 and $pe<=18){
    $P_E =9;
}
elseif($pe>=1 and $pe<=8){
    $P_E=10;
}
else{
    $P_E=0;
}

// condition for promotoer holding ( <25 [4] , <50 [6] , <65 [7] , <75 [8] , <82 [9] , >99 [10] )
if($pholding >=1 and $pholding<=25){
    $phol =4;
}
elseif($pholding>=26 and $pholding<=50){
    $phol =6;
}
elseif($pholding>=51 and $pholding<=65){
    $phol=7;
}
elseif($pholding>=66 and $pholding<=75){
    $phol = 8;
}
elseif($pholding>=76 and $pholding<=82){
    $phol=9;
}
else{
    $phol =10;
}
 
//condtion for D/E ( <0 [3] , <1 [10] , <1.5 [9] , <2 [8] , >3 [4] , >4 [1] )

if($de>=0){
    $DE =3;
}
elseif($de>=0.1 and $de<=1){
    $DE = 10;
}
elseif($de>=1.1 and $de<=1.5){
    $DE = 9;
}
elseif($de>=1.6 and $de<=2){
    $DE=8;
}
elseif($de>=2.1 and $de<=3){
    $DE = 4;
}
else{
    $DE =1;
}
// condition for profit;

if($profit == 'Y' or $profit =='y'){
    $pro = 10;
}
elseif($profit == 'N' or $profit=='n'){
    $pro = 5;

}else{
    echo "Please Enter (Y) for yes or (N) for no";
}
//echo $pro;

$total = $mcap +$P_E + $phol + $DE+$pro;
echo $total;

if($total<=40){
    echo "<script type='text/javascript'>  alert('NO, IT IS RISKY');	
			window.location='index.html'
			</script>";
}
else{
    echo "<script type='text/javascript'>  alert('YES, YOU CAN INVEST');	
			window.location='index.html'
			</script>";
}
}
?>