@if (count($errors) > 0)
	 @foreach ($errors->all() as $error)
	  <p style="color: red;">{{$error}}</p> 
	 @endforeach
@endif