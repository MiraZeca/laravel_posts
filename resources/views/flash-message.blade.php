@if ($message = Session::get('updated'))
<script>
    M.toast({html: '{{ $message }}', classes: 'rounded'})
</script>
@endif

@if ($message = Session::get('deleted'))
<script>
  M.toast({html: '{{ $message }}', classes: 'rounded'})
</script>
@endif

@if ($message = Session::get('created'))
<script>
  M.toast({html: '{{ $message }}', classes: 'rounded'})
</script>
@endif