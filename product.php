<?php
    include 'navbar.php';
    require_once 'config.php';
    $sql = "SELECT * FROM product order by pro_id DESC";
    $result = $con->query($sql);
?>
<div class="container w-50 mt-5" >
<a href= "add.product.php" class="btn btn-success"> +เพิ่มข้อมูล </a>
    <div class="card">
        <div class="card-header bg-primary text-white">การจัดการสินค้า</div>
        <div class="card-body"></div>
    <table class="table table-striped">
<tr class="bg-info">
    <td>ลำดับที่</td>
    <td>รหัสสินค้า</td>
    <td>ชื่อสินค้า</td>
    <td>จำนวน</td>
    <td>ราคา</td>
</tr>
<?php
    $i=1;
   while ($row=mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['pro_id']?></td>
        <td><?php echo $row['pro_name']?></td>
        <td><?php echo $row['amount']?></td>
        <td><?php echo $row['price']?></td>
    </tr>
<?php
$i++;
   }
   ?>
   </table>
    </div>
</div>