<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekapitung</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    /* Article:  https://superdevresources.com/full-background-image-css/ */
    body {
      background: url(<?= base_url() ?>ui/images/5091372229_ebca868ffd_o.jpeg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .content {
      text-align: center;
      font-family: 'Open Sans', sans-serif;
      color: #fff;
      margin: 40px auto;
      background: rgba(22, 22, 22, 0.5);
      width: 100%;
      max-width: 960px;
      border-radius: 5px;
      padding-bottom: 32px;
    }

    h1,
    h1 a {
      min-height: 120px;
      width: 90%;
      max-width: 700px;
      vertical-align: middle;
      text-align: center;
      margin: 0 auto;
      text-decoration: none;
      color: #fff;
      padding-top: 80px;
    }

    p {
      width: 90%;
      max-width: 700px;
      text-align: left;
      margin: 0 auto;
      padding-bottom: 32px;
    }

    .vidioo {
      justify-content: center;
      align-items: center;
      display: flex;

    }

    .btn {
      display: inline-block;
      color: #fff;
      background-color: #4f40f1;
      background: -webkit-linear-gradient(60deg, #4f40f1, #6100bc);
      background: linear-gradient(60deg, #4f40f1, #6100bc);
      -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
      border-radius: 20px;
      padding: 12px 30px;
      font-size: 12px;
    }

    a.button_small {
      background-color: #455dfe;
      display: inline-block;
      color: #222222;
      padding: 10px 20px;
      text-align: center;
      -webkit-appearance: none;
    }
    #container-breakdown {
  display: flex;
}
@media (min-width: 992px) {
  #videos{
    display: none;
  }
}

@media (max-width: 991.98px) {
  #videos_android{
    display: none;
  }
}

/* Tekku */


  </style>
</head>

<body>
  <div class="container-fluid mt-4">

    <center> <img src="<?= base_url() ?>assets/images/apk_rekapitung.png" class=" mt-1 mb-2 rounded-circle" style="width: auto;height: 100px;" alt=""></center>
    <div class="text-light text-center">Pemilu Jujur <br>
      <h2 class="text-white text-center">REKAPITUNG</h2>
    </div>

    <div class="vidioo mt-2" id="videos">
      <video width="400" controls style="position: inline;">
        <source src="<?= base_url() ?>assets/video/vid2.mp4" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">
        Your browser does not support HTML5 video.
      </video>
    </div>
    <div class="vidioo mt-2" id="videos_android">
      <video width="1000" controls style="position: inline;">
        <source src="<?= base_url() ?>assets/video/vid2.mp4" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">
        Your browser does not support HTML5 video.
      </video>
    </div>

    <div class="col-lg-12 d-flex justify-content-center mt-5 mb-5">

      <a href="<?= base_url() ?>daerah/form_2" class="btn btn-primary">Skip Video</a>

    </div>
    <div class="col-lg-12 d-flex justify-content-center mt-5 mb-5">
 &nbsp;

</div>

    <footer class="fixed-bottom mt-5">
      <div class="row mt-2 footers">
        <div class="col-12 text-white mb-2">
          <center>
            © PT. Mahadaya Swara Teknologi<br> All Rights Reserved 2021
          </center>
        </div>
      </div>
  </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>