<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />


  <!-- fontawesome -->
  <link rel="stylesheet" href="/css/all.css">

  <!-- Material Kit CSS -->
  <link href="/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />

  <!-- css file custom -->
  <link rel="stylesheet" href="css/style.css" />

  <title><?= $title; ?></title>
</head>

<body>

  <?= $this->include('layout/navbar'); ?>

  <?= $this->renderSection('content'); ?>

  <!-- Optional JavaScript -->
  <script src="js/script.js"></script>

  <!-- Bootstrap js file -->
  <script src="js/bootstrap.min.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="/assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin  -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>

  <script>
    function previewImg() {
      const sampul = document.querySelector('#sampul');
      const sampulLabel = document.querySelector('.custom-file');
      const imgPreview = document.querySelector('.img-preview');

      sampulLabel.textContent = sampul.files[0].name;
      const fileSampul = new FileReader();
      fileSampul.readAsDataURL(sampul.files[0]);

      fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>
</body>
</body>

</html>