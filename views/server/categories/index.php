
<h1>Danh mục sản phẩm</h1>

<h1>
<table class="table ">
<thead>
    <tr>
        <th>STT</th>
        <th>tên danh mục</th>
     
        <th><a href="">thêm</a></th>
    </tr>
</thead>
<tbody>
  <?php  

function CategoryParent($arr, $parent = 0)
{
    $table='';
  
    $i=1;
    foreach ($arr as $item) {
        $table.="<tr>";
        if ($item['parent_id'] == $parent) {
            $table.="<td>".$i++. "</td>" ;
            $table.="<td>".$item['name'] ."</td>";
            $id = $item['id'];
        CategoryParent($arr,$id);
        // $table .= ;
        }
        $table.="</tr>";
    }
   

    echo $table;
}
$cate =CategoryParent($data['categories'], 0);die;
  ?>
    </table>

