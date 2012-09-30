<?if(isset($errors)){?>
<?foreach($errors as $item) {?>
<p style="color:red; align:center"><?=$item?></p>
    <?}?>
<?}?>
<div>
    <form method="post" action="">
        <select name="parentId">
            <?foreach($categories as $item) {?>
            <option value="<?=$item['id'] ?>"><?=str_repeat('&nbsp', 4*$item['level']).htmlspecialchars($item['name'])?></option>
            <?}?>
        </select>    
        <input type="text" name="categoryName">
        <input type="submit" value="Создать" name="btnsbmt">
     </form>   
</div>