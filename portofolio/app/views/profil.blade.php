<!-- /home/adit/portofolio/app/views/profil.blade.php -->

 @extends("layouts.application")
       

@section("content")
   @include("shared.left_nav")
  <!-- Bagian Content -->
    <div class="container clearfix">
      <div class="row row-offcanvas row-offcanvas-left ">
        <!--Bagian Kiri-->
        <div class="col-xs-12 col-sm-3 side pull-left sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
          </div>
        </div>

        <!--Bagian Kanan-->
        <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
         <div class="panel-body">
  <table class="table table-striped">
   <!--  <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead> -->
    <tbody>
      <tr>
        <td><strong>Nama<strong></td>
        <td>Riku Kiranatama</td>
      </tr>
      <tr>
        <td><strong>Tempat,Tanggal Lahir</strong></td>
        <td>Bandung , 7 okoteber 1989</td>
      </tr>
      <tr>
        <td><strong>Jenis Kelamin</strong></td>
        <td>Laki laki</td>
      </tr>
        <tr>
        <td><strong>Alamat Domisii</strong></td>
        <td>Jalan Soekarno hatta no 104</td>
      </tr>
    </tbody>
  </table>
          </div>
        </div>
      </div>
    </div>
    @stop