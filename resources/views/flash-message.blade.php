@if ($message = Session::get('updated'))
<div class="col-4 offset-8">
  <strong class="mess right">{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('deleted'))
<div class="col-4 offset-8">
  <strong class="mess right">{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('created'))
<div class="col-4 offset-8">
  <strong class="mess right">{{ $message }}</strong>
</div>
@endif

