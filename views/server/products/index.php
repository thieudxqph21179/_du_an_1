
<h1>Danh mục sản phẩm</h1>

<h1>
<table class="table ">
<thead>
    <tr>
        <th>tên sản phẩm</th>
        <th>giá sản phẩm</th>
        <th>giá niêm yiet</th>
        <th>mô tả ngắn</th>
        <th>mô tả sản phẩm</th>
        <th><a href="?admin&act=CreateProducts">thêm</a></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($data['products'] as $item):  ?>
    <tr>
        <td scope="row"><?=$item['name']?></td>
        <td><?=$item['price']?></td>
        <td><?=$item['price_sale']?></td>
        <td><?=$item['slug_desc']?></td>
        <td><?=$item['text_desc']?></td>
        <td><a href="?admin&act=editProduct&id=<?=$item['id']?>" class="btn btn-warning">sửa</a></td>
        <td><a href="" class="btn btn-danger">xóa</a></td>
        <td></td>
    </tr>
    <?php endforeach; ?>
    </table>

