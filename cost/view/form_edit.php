<section>
	<div>
		<h1>修改紀錄</h1>
		<form action="edit.php" method="POST">
			<input class="hide" type="text" id="id" name="id" value="">
			<label for="date">日期:</label>
			<input type="date" id="date" name="date" onchange="handler(event);"><br>
			<label for="food_1">早餐:</label>
			<input type="number" id="food_1_edit" name="food_1" style="width: 5%"> 元
			<select name="food_1_type">
				<option value="cash" id="food_1_type_edit_cash">現金</option>
				<option value="card" id="food_1_type_edit_card">悠遊卡</option>
			</select>
			<label for="food_2">午餐:</label>
			<input type="number" id="food_2_edit" name="food_2" style="width: 5%"> 元
			<select name="food_2_type">
				<option value="cash" id="food_2_type_edit_cash">現金</option>
				<option value="card" id="food_2_type_edit_card">悠遊卡</option>
			</select>
			<label for="food_3">晚餐:</label>
			<input type="number" id="food_3_edit" name="food_3" style="width: 5%"> 元
			<select name="food_3_type">
				<option value="cash" id="food_3_type_edit_cash">現金</option>
				<option value="card" id="food_3_type_edit_card">悠遊卡</option>
			</select><br>
			<label for="item_1">雜項1:</label>
			<input type="number" id="item_1_edit" name="item_1" style="width: 5%"> 元
			<select name="item_1_type">
				<option value="cash" id="item_1_type_edit_cash">現金</option>
				<option value="card" id="item_1_type_edit_card">悠遊卡</option>
			</select>
			<label for="item_2">雜項2:</label>
			<input type="number" id="item_2_edit" name="item_2" style="width: 5%"> 元
			<select name="item_2_type">
				<option value="cash" id="item_2_type_edit_cash">現金</option>
				<option value="card" id="item_2_type_edit_card">悠遊卡</option>
			</select>
			<label for="item_3">雜項3:</label>
			<input type="number" id="item_3_edit" name="item_3" style="width: 5%"> 元
			<select name="item_3_type">
				<option value="cash" id="item_3_type_edit_cash">現金</option>
				<option value="card" id="item_3_type_edit_card">悠遊卡</option>
			</select><br>
			<label for="passwd">Password:</label>
			<input type="text" id="passwd" name="passwd" style="width: 5%"><br>
			<input type="submit" value="送出">
		</form>
	</div>
</section>

<script>
	function handler(e){
	  	var value = e.target.value;
	    var url = "get.php";
	    $.ajax({
		    type:'POST',
		    dataType:'JSON',
	        url : url,
	        data: {
	        	date:value,
	        },
	        success:function(data){
	            if(data == 'nodata')
	            {
	            	alert('尚未建立此筆資料!');
	            }
	            else
	            {
		        	$('input[id=id]').val(data['id']);
		        	$('input[id=food_1_edit]').val(data['food_1']);
		        	if(data['food_1_type'] == 'card')
		        	{
		        		$('option[id=food_1_type_edit_card]').attr('selected','true');
		        	}
		        	$('input[id=food_2_edit]').val(data['food_2']);
		        	if(data['food_2_type'] == 'card')
		        	{
		        		$('option[id=food_2_type_edit_card]').attr('selected','true');
		        	}
		        	$('input[id=food_3_edit]').val(data['food_3']);
		        	if(data['food_3_type'] == 'card')
		        	{
		        		$('option[id=food_3_type_edit_card]').attr('selected','true');
		        	}
		        	$('input[id=item_1_edit]').val(data['item_1']);
		        	if(data['item_1_type'] == 'card')
		        	{
		        		$('option[id=item_1_type_edit_card]').attr('selected','true');
		        	}
		        	$('input[id=item_2_edit]').val(data['item_2']);
		        	if(data['item_2_type'] == 'card')
		        	{
		        		$('option[id=item_2_type_edit_card]').attr('selected','true');
		        	}
		        	$('input[id=item_3_edit]').val(data['item_3']);
		        	if(data['item_3_type'] == 'card')
		        	{
		        		$('option[id=item_3_type_edit_card]').attr('selected','true');
		        	}
	            }
	        },
	        error:function(e){
	            console.log(e);
	            alert('系統忙碌中，請稍後再重試，感謝。');
	        }
	    });
	}
</script>