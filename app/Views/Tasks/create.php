<h1>Create task</h1>
<form method='post' action='#'>
	<div class="form-group">
		<label for="sbd">Số Báo Danh</label>
		<input type="text" class="form-control" id="sbd"  name="so_bao_danh">
	</div>
	<div class="form-group">
		<label for="hoten">Họ Tên</label>
		<input type="text" class="form-control" id="hoten"  name="ho_ten">
	</div>
	<div class="form-group">
		<label for="diachi">Địa Chỉ</label>
		<input type="text" class="form-control" id="diachi"  name="dia_chi">
	</div>
	<div class="form-group">
		<label for="uutien">Điểm Ưu Tiên</label>
		<select name="uu_tien">
		<option>0</option>
		<option>0.5</option>
		<option>1</option>
		<option>1.5</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>

	</select>
	</div>
	<div class="form-group">
		<label for="makhoi">Mã Khối</label>
	<select name="ma_khoi">
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>
	</select>
	</div>
	<button type="submit" class="btn btn-primary" name="btn">Submit</button>
</form>