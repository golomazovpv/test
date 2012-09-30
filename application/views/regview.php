<center>
<?if(isset($errors)) {?>
    <?foreach($errors as $item) {?>
        <p style="color:red;"><?=$item?></p>
    <?}?> 
<?}?>        
<? if(isset($regok)) { ?>
<p style='color:#00cc00;'>Регистрация успешна</p> 
<?}?>
	<form action="" method='post'>
		<table style='background-color: #cc0000; padding:10px; color:#fff;'>
			<tr>
                                <td>Логин:</td>
				<td><input type='text' name='login'></td>	
			</tr>
                        <tr>
                                <td>Пароль:</td>
				<td><input type='password' name='password'></td>	
			</tr>
			<tr>	
                                <td>E-Mail:</td>
				<td><input type='text' name='email'></td>
			</tr>
			<tr>
				<td colspan='2' align=center><input type='submit' name='btns' value='рег'></td>
			</tr>
		</table>
	</form>
</center>
