
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="4s7xe2CFboCHyFav2L1c9EsvMGwaAyk82LWvYziB">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://paslon1.pilwalkot.rekapitung.id/css/app.css">

        <!-- Scripts -->
        <script src="https://paslon1.pilwalkot.rekapitung.id/js/app.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-100 shadow-md overflow-hidden sm:rounded-lg">
        <center><img src="https://i.pinimg.com/originals/71/a7/5d/71a75dace5dd09eb98fb0bee98a85876.gif" alt="" style="width: auto; height: 200px; background-color: rgba(0,0,255,.1);"></center>
    <center>Anda Di Alihkan Ke Halaman Demo<div id="countdown"></div>
    </center>
    <br>

    <center><img src="https://paslon1.pilwalkot.rekapitung.id/assets/img/ajax-loader.gif" alt=""></center>
    
    
    <script>
      $(document).ready(function() {
        setTimeout(function() {
                                      window.location.href = "https://paslon1.pilwalkot.rekapitung.id/";
                                }, 2000);
        getLocation();
        showPosition();
      });
    </script>
    
    <script>
      var timeleft = 0;
      var downloadTimer = setInterval(function() {
        if (timeleft <= 0) {
          clearInterval(downloadTimer);
          document.getElementById("countdown").innerHTML = "Please Wait..";
        } else {
          document.getElementById("countdown").innerHTML = timeleft + " Detik";
        }
        timeleft -= 1;
      }, 1000);
    </script>
    </div>
</div>
        </div>
    </body>
    
</html>
