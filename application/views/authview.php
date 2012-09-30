<center>
<? if(isset($error)) {?>
<p style='color:red'>неверный логин или пароль</p>
<? } ?>
	<form action="" method='post'>
		<table style='background-color: #00cc00; padding:10px; color:#fff;'>
			<tr>
				<td>Логин:</td>
				<td><input type='text' name='login'></td>
			</tr>
			<tr>
				<td>Пароль:</td>
				<td><input type='password' name='password'></td>	
			</tr>
			<tr>
				<td colspan='2' align=center><input type='submit' name='btns' value='войти'></td>
			</tr>
		</table>
	</form>
</center>
