<center>
<?if(isset($error)) {?>
    <p style="color:red;">Email не верный</p>
    <?}?>
<?if(isset($ok)) {?>
    <p style="color:#00cc00;">Проверьте вашу электронную почту</p>
    <?} else {?>
<p style="text-align: center;">Введите вашу электронную почту</p>
    <?}?>
	<form action="" method='post'>           
		<table style='background-color: #0077ff; padding:10px; color:#fff;'>
			<tr>
				<td>Email:</td>
				<td><input type='text' name='email'></td>	
			</tr>
			<tr>
				<td colspan='2' align=center><input type='submit' name='btns' value='отправить'></td>
			</tr>
		</table>
	</form>
</center>
