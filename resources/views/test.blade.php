<form action="{{ route('test.post')}}" method="POST">
@csrf
@session
$name
<label>Email :</label>
<input name="email"type="email"><br><br>
<label>Password :</label>
<input name="password" type="password">
<button >Click Me!</button>
<!--  comment   !-->
</form>
@stop