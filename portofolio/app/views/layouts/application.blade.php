<!-- /home/adit/portofolio/app/views/layouts/applications.blade.php -->

  <!DOCTYPE html>

  <html>

    <head>
 

      <meta charset="utf-8">

      <meta httpequiv="XUACompatible" content="IE=edge">

      <meta name="viewport" content="width=devicewidth, initialscale=1">

      <title>Home</title>

     <!--  <?= stylesheetLinkTag() ?>

      <?= javascript_include_tag() ?> -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script type="text/javascript" href="jquery-1-11-1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top:60px;">

      <!--bagian navigation-->

      @include('shared.head_nav')


      <!-- Bagian Content -->

      <div class="container clearfix">

        <div class="row row-offcanvas row-offcanvas-left ">

          <!--Bagian Kiri-->



          <!--Bagian Kanan-->

          <div id="main-content" class="col-xs-12 col-sm-9 main">

            <div class="container">

              @yield("content")

            </div>

          </div>

        </div>

      </div>



    </body>

  </html>