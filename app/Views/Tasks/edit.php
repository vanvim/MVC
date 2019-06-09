<h1>Edit task</h1>
<form method='post' action='#'>
	<div class="form-group">
		<label for="title">Số Báo Danh:</label>
		<input type="text" class="form-control" id="title" placeholder="Enter a title" name="so_bao_danh" value ="<?php if (isset($task["sbd"])) echo $task["sbd"];?>">
	</div>
	<div class="form-group">
		<label for="title">Họ Tên:</label>
		<input type="text" class="form-control" id="title" placeholder="Enter a title" name="ho_ten" value ="<?php if (isset($task["hoten"])) echo $task["hoten"];?>">
	</div>

	<div class="form-group">
		<label for="description">Địa Chỉ</label>
		<input type="text" class="form-control" id="description" placeholder="Enter a description" name="dia_chi" value ="<?php if (isset($task["diachi"])) echo $task["diachi"];?>">
	</div>

	<div class="form-group">
		<label for="description">Điểm Ưu Tiên</label>
		<input type="text" class="form-control" id="description" placeholder="Enter a description" name="uu_tien" value ="<?php if (isset($task["uutien"])) echo $task["uutien"];?>">
	</div>

	<div class="form-group">
		<label for="description">Mã Khối</label>
		<input type="text" class="form-control" id="description" placeholder="Enter a description" name="ma_khoi" value ="<?php if (isset($task["makhoi"])) echo $task["makhoi"];?>">
	</div>
	<button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>