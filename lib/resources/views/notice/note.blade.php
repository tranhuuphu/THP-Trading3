

@if(Session::has('error'))
<div class="alert alert-danger" style="margin-top: 20px;" role="alert">
  {!!Session::get('error')!!}
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert" style="margin-top: 20px;">
  <h4 class="alert-heading"><i class="fas fa-bell"></i> Notice!</h4>
  <hr>
  <p>{!!Session::get('success')!!}.</p>
</div>
@endif