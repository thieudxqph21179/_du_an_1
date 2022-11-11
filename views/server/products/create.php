<form action="?admin&act=StoreProducts" method="post" >
<div class="form-group">
  <label for="">tên</label>
  <input type="text" name="name"  class="form-control" placeholder="">
</div>
<div class="form-group">
  <label for="">giá</label>
  <input type="text" name="price"  class="form-control" placeholder="">
</div>
<div class="form-group">
  <label for="">giá niêm yiết</label>
  <input type="text" name="price_sale"  class="form-control" placeholder="">
</div>
<div class="form-group">
  <label for="">mô tả ngắn</label>
  <input type="text" name="slug_desc"  class="form-control" placeholder="">
</div>
<div class="form-group">
  <label for="">mô tả</label>
  <input type="text" name="text_desc"  class="form-control" placeholder="">
</div>
<div class="form-group">
  <label for="">danh mục</label>
<select name="category_id" id="">
  <?php foreach ($data['categories'] as $item):?>
<option value="<?=$item['id']?>"><?=$item['name']?></option>

    <?php  endforeach; ?>
</select>

</div>

<button type="submit">save</button>
</form>
