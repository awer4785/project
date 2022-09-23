<?php 	

require_once 'core.php';

$sellId = $_POST['sellId'];

$sql = "SELECT sell_date,sell_time,sell_total FROM sell WHERE sell_id = $sellId";

$sellResult = $connect->query($sql);
$sellData = $sellResult->fetch_array();

$sellDate = $sellData[0];
$sellTime = $sellData[1];
$sellTotal = $sellData[2];

$orderItemSql = "SELECT sell_item.product_id, sell_item.rate, sell_item.quantity, sell_item.total,
product.product_name FROM sell_item
	INNER JOIN product ON sell_item.product_id = product.product_id 
 WHERE sell_item.sell_id = $sellId";
$orderItemResult = $connect->query($orderItemSql);

 $table = '
 <table border="1" cellspacing="0" cellpadding="20" width="100%">
	<thead>
		<tr >
			<th colspan="5">
			<center>
				<center>วันที่ที่ทำการขาย : '.$sellDate.'</center>
				เวลาที่ทำการขาย : '.$sellTime.'
			</center>		
			</th>
				
		</tr>		
	</thead>
</table>
<table border="0" width="100%;" cellpadding="5" style="border:1px solid black;border-top-style:1px solid black;border-bottom-style:1px solid black;">

	<tbody>
		<tr>
			<th>#</th>
			<th>สินค้า</th>
			<th>ราคา</th>
			<th>จำนวน</th>
			<th>ราคารวม</th>
		</tr>';

		$x = 1;
		while($row = $orderItemResult->fetch_array()) {			
						
			$table .= '<tr>
				<th>'.$x.'</th>
				<th>'.$row[4].'</th>
				<th>'.$row[1].'</th>
				<th>'.$row[2].'</th>
				<th>'.$row[3].'</th>
			</tr>
			';
		$x++;
		} // /while

		$table .= '<tr>
			<th></th>
		</tr>

		<tr>
			<th></th>
		</tr>

		<tr>
			<th>ราคารวมทั้งหมด</th>
			<th>'.$sellTotal.'</th>			
		</tr>
	</tbody>
</table>
 ';


$connect->close();

echo $table;