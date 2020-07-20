<section>
	<div>
		<h1>增加紀錄</h1>
		<form action="add.php" method="POST">
			<label for="date">日期:</label>
			<input type="date" id="date" name="date"><br>
			<label for="food_1">早餐:</label>
			<input type="number" id="food_1_add" name="food_1" style="width: 5%"> 元
			<select name="food_1_type">
				<option value="cash">現金</option>
				<option value="card">悠遊卡</option>
			</select>
			<label for="food_2">午餐:</label>
			<input type="number" id="food_2_add" name="food_2" style="width: 5%"> 元
			<select name="food_2_type">
				<option value="cash">現金</option>
				<option value="card">悠遊卡</option>
			</select>
			<label for="food_3">晚餐:</label>
			<input type="number" id="food_3_add" name="food_3" style="width: 5%"> 元
			<select name="food_3_type">
				<option value="cash">現金</option>
				<option value="card">悠遊卡</option>
			</select><br>
			<label for="item_1">雜項1:</label>
			<input type="number" id="item_1_add" name="item_1" style="width: 5%"> 元
			<select name="item_1_type">
				<option value="cash">現金</option>
				<option value="card">悠遊卡</option>
			</select>
			<label for="item_2">雜項2:</label>
			<input type="number" id="item_2_add" name="item_2" style="width: 5%"> 元
			<select name="item_2_type">
				<option value="cash">現金</option>
				<option value="card">悠遊卡</option>
			</select>
			<label for="item_3">雜項3:</label>
			<input type="number" id="item_3_add" name="item_3" style="width: 5%"> 元
			<select name="item_3_type">
				<option value="cash">現金</option>
				<option value="card">悠遊卡</option>
			</select><br>
			<label for="passwd">Password:</label>
			<input type="text" id="passwd" name="passwd" style="width: 5%"><br>
			<input type="submit" value="送出">
		</form>
	</div>
</section>