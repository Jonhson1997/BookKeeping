<section>
	<div>
		<h1>狀態紀錄</h1>
		<form action="edit_status.php" method="POST">
			<label for="food_1">起始計算日期:</label>
			<input type="text" id="start_date" name="start_date" style="width: 5%" value="<?=self::$start_date?>"><br>
			<label for="food_1">台灣銀行:</label>
			<input type="number" id="card_taiwan" name="card_taiwan" style="width: 5%" value="<?=self::$package_1?>"> 元<br>
			<label for="food_2">悠遊卡:</label>
			<input type="number" id="card_yoyo" name="card_yoyo" style="width: 5%" value="<?=self::$package_2?>"> 元<br>
			<label for="food_3">台灣企銀:</label>
			<input type="number" id="card_money_jd" name="card_money_jd" style="width: 5%" value="<?=self::$money_card?>"> 元<br>
			<label for="item_1">錢包:</label>
			<input type="number" id="cash" name="cash" style="width: 5%" value="<?=self::$my_money?>"> 元<br>
			<label for="passwd">Password:</label>
			<input type="text" id="passwd" name="passwd" style="width: 5%"><br>
			<input type="submit" value="送出">
		</form>
	</div>
</section>