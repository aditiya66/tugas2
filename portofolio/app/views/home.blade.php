<!-- /home/adit/portofolio/app/views/home.blade.php -->
 @extends("layouts.application")

@section("content")

  @if (Session::has('notice')) <div class="alert alert-info">{{Session::get('notice')}}</div>       @endif

  @if (Session::has('error')) <div class="alert alert-danger">{{Session::get('error')}}</div>       @endif
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/nature1.jpg" alt="..." height="500px" width="500px">
      <div class="carousel-caption">
        <h3>Beuatiful</h3>
      </div>
    </div>
    <div class="item">
      <img src="image/nature2.jpg" alt="..." height="500px" width="500px">
      <div class="carousel-caption">
        <h3>Nice</h3>
      </div>
    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
<div class="container-fluid">

<div class="row"> 
  <div class="col-md-4">

  <p>Halo saya riku dan saya saat ini akan lulus dari kuliah, salama kenal ya , berikut contoh design grafik yang saya buat</p>
</div>
<div class="col-md-3 content-kanan">
  
 <p>Facebook : riku@mail.com <br><br>
Twitter  : riku@mail.com <br><br>
No telepon : 022-239844 <br><br>
Alamat   :jalan harapan bangsa no 23 bandung indonesia
</p>
</div>
</div>
</div>
@stop