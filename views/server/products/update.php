<form action="?admin&act=UpdateProducts&id=<?=$data['product'][0]['id']?>" method="post">


<div class="form-group">
  <label for="">tên</label>
  <input type="text" name="name"  class="form-control" placeholder="" value="<?=$data['product'][0]['name']?>">
</div>
<div class="form-group">
  <label for="">giá</label>
  <input type="text" name="price"  class="form-control" placeholder="" value="<?=$data['product'][0]['price']?>">
</div>
<div class="form-group">
  <label for="">giá niêm yiết</label>
  <input type="text" name="sale_price"  class="form-control" placeholder="" value="<?=$data['product'][0]['price_sale']?>">
</div>
<div class="form-group">
  <label for="">mô tả ngắn</label>
  <input type="text" name="desc_slug"  class="form-control" placeholder="" value="<?=$data['product'][0]['slug_desc']?>">
</div>
<div class="form-group">
  <label for="">mô tả</label>
  <input type="text" name="text_desc"  class="form-control" placeholder="" value="<?=$data['product'][0]['text_desc']?>">
</div>
<div class="form-group">
  <label for="">danh mục</label>
<select name="category_id" id="">
 <?php
foreach ($data['categories'] as $item): ?>
<option <?=$item['id']===$data['product'][0]['category_id']? 'selected':''?>  value="<?php echo $item['id']?>"> <?=$item['name']?></option>

<?php
endforeach;
 ?>
</select>

</div>
<button type="submit"> save</button>
</form>
