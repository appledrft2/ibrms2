<form method="POST" action="/judicial/{{$judicial->id}}/kp08">
	@csrf
	<input type="text" name="test" value="1">
	<button type="submit">test</button>
</form>