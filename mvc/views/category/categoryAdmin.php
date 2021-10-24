<?php
	$title = 'Quản Lý Danh Mục Sản Phẩm';
	require_once('mvc/views/blocks/header_admin.php');
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12" style="margin-bottom: 20px;">
		<h3>Quản Lý Danh Mục Sản Phẩm</h3>
	</div>
	<div class="col-md-6">
		<form method="post" action="http://localhost/Laptrinhweb/Category/insertCategoryController">
			<div class="form-group">
			  <label for="usr" style="font-weight: bold;">Tên Danh Mục:</label>
			  <input required="true" type="text" class="form-control" id="usr" name="name">
			</div>
			<button class="btn btn-success">Lưu</button>
		</form>
	</div>
	<div class="col-md-6 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên Danh Mục</th>
					<th style="width: 50px"></th>
					<th style="width: 50px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$countCategory = count($data["category"]);
	for($i=0; $i<$countCategory;$i++) {
		echo '<tr>
					<th>'.($i).'</th>
					<td>'.$data["category"][$i]['name'].'</td>
					<td style="width: 50px">
						<a href="http://localhost/Laptrinhweb/Category/updateCategoryController/'.$data["category"][$i]["id"].'"><button class="btn btn-warning">Sửa</button></a>
					</td>
					<td style="width: 50px">
					<a href="http://localhost/Laptrinhweb/Category/deleteCategoryController/'.$data["category"][$i]["id"].'"><button class="btn btn-danger">Xóa</button></a>
					</td>
				</tr>';
	}
	
?>
			</tbody>
		</table>
	</div>
</div>

<?php
	require_once('mvc/views/blocks/footer_admin.php');
?>