@if(Session::has('success'))
<div class="alert alert-success mx-auto">
    {{ Session::get('success') }}
</div>
@endif

 @if ($errors->any())
 <div class="alert alert-danger mx-auto">
     @foreach ($errors->all() as $error)
     {{ $error }}
     @endforeach
 </div>
 @endif