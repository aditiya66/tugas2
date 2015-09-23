<!-- /home/adit/portofolio/app/views/contact.blade.php -->
 @extends("layouts.application")
       

@section("content")
   @include("shared.left_nav")
   <div class="col-md-5 col-sm-5 pull-left">
 <form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email   :</label>
    <div class="col-sm-10 pull-right">
      <input type="email" class="form-control ema" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="message">Message:</label>
    <div class="col-sm-10">
    <textarea class="form-control area"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
@stop