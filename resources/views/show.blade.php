<form action="{{ route('test.post')}}" method="POST">
@csrf

<?php foreach ($name as $names) : ?>
<li> <?=$names; ?></li>
<?php endforeach; ?>
<label>Email :</label>
<input name="email"type="email"><br><br>
<label>Password :</label>
<input name="password" type="password">
<button >Click Me!</button>
<!--  comment   !-->
</form>
