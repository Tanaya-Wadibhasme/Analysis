<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 07:24:08 GMT -->

<head>
  <title>Investment Suggestor</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <meta name="robots" content="noindex, follow">
  <script
    nonce="dc063f0a-fed6-4b85-a6d2-0e91105f881d">(function (w, d) { !function (bv, bw, bx, by) { bv[bx] = bv[bx] || {}; bv[bx].executed = []; bv.zaraz = { deferred: [], listeners: [] }; bv.zaraz.q = []; bv.zaraz._f = function (bz) { return function () { var bA = Array.prototype.slice.call(arguments); bv.zaraz.q.push({ m: bz, a: bA }) } }; for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB); bv.zaraz.init = () => { var bC = bw.getElementsByTagName(by)[0], bD = bw.createElement(by), bE = bw.getElementsByTagName("title")[0]; bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text); bv[bx].x = Math.random(); bv[bx].w = bv.screen.width; bv[bx].h = bv.screen.height; bv[bx].j = bv.innerHeight; bv[bx].e = bv.innerWidth; bv[bx].l = bv.location.href; bv[bx].r = bw.referrer; bv[bx].k = bv.screen.colorDepth; bv[bx].n = bw.characterSet; bv[bx].o = (new Date).getTimezoneOffset(); if (bv.dataLayer) for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({ ...bJ[1], ...bK[1] }))))) zaraz.set(bI[0], bI[1], { scope: "page" }); bv[bx].q = []; for (; bv.zaraz.q.length;) { const bL = bv.zaraz.q.shift(); bv[bx].q.push(bL) } bD.defer = !0; for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO.startsWith("_zaraz_"))).forEach((bN => { try { bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN)) } catch { bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN) } })); bD.referrerPolicy = "origin"; bD.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[bx]))); bC.parentNode.insertBefore(bD, bC) };["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
  <div class="limiter">
    <div class="container-login100" style="background: gray;">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/img-01.png" alt="IMG">
        </div>
        <form class="login100-form validate-form" action="index.php" style="margin-top: -62px;" method="POST">
          <span class="login100-form-title">
         Enter   Details
          </span>
          <div class="wrap-input100 validate-input" data-validate="Market Cap should be less tha 5000 Cr">
            <input class="input100" type="number" name="market_cap" placeholder="Market Cap (in CR.)">
            <span class="focus-input100"></span>
            <!-- <span class="symbol-input100"> -->
              <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="number" name="pe" placeholder="P/E">
            <span class="focus-input100"></span>
            <!-- <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span> -->
          </div>
          <div class="wrap-input100 validate-input" >
            <input class="input100" type="number" name="pholding" placeholder="Promoter Holdings">
            <span class="focus-input100"></span>
            <!-- <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span> -->
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="DE" placeholder="D/E">
            <span class="focus-input100"></span>
            <!-- <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span> -->
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="Profit" placeholder="Profit previous FY (Y/N)?">
            <span class="focus-input100"></span>
            <!-- <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span> -->
          </div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="submit">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="vendor/select2/select2.min.js"></script>

  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

  <script src="js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996"
    integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ=="
    data-cf-beacon='{"rayId":"7b69ba58588b7950","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 07:24:12 GMT -->

</html>

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
			window.location='index.php'
			</script>";
}
else{
    echo "<script type='text/javascript'>  alert('YES, YOU CAN INVEST');	
			window.location='index.php'
			</script>";
}
}
?>