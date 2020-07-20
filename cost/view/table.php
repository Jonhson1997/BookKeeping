<?php
	$result = self::get_list();
	self::$all_sum = 0;
	foreach (array_reverse($result) as $key => $value){?>
	    <tr>
	        <td><?= $value['date']?></td>
	        <td><?= (!empty($value['food_1']))?'$'.$value['food_1']:''?></td>
	        <td><?= (!empty($value['food_2']))?'$'.$value['food_2']:''?></td>
	        <td><?= (!empty($value['food_3']))?'$'.$value['food_3']:''?></td>
	        <td><?= (!empty($value['item_1']))?'$'.$value['item_1']:''?></td>
	        <td><?= (!empty($value['item_2']))?'$'.$value['item_2']:''?></td>
	        <td><?= (!empty($value['item_3']))?'$'.$value['item_3']:''?></td>
	        <td><?= '$'.$value['sum'];?></td>
	    </tr>
	<?php
	    self::$all_sum+=$value['sum'];
	    if(strtotime(self::$start_date) <= strtotime($value['date'])) {
	    	if($value['food_1_type'] == 'card')
	    	{
	    		self::$cost_money_package2 += intval($value['food_1']);
	    	}
	    	else
	    	{
	    		self::$cost_money += intval($value['food_1']);
	    	}
	    	if($value['food_2_type'] == 'card')
	    	{
	    		self::$cost_money_package2 += intval($value['food_2']);
	    	}
	    	else
	    	{
	    		self::$cost_money += intval($value['food_2']);
	    	}
	    	if($value['food_3_type'] == 'card')
	    	{
	    		self::$cost_money_package2 += intval($value['food_3']);
	    	}
	    	else
	    	{
	    		self::$cost_money += intval($value['food_3']);
	    	}
	    	if($value['item_1_type'] == 'card')
	    	{
	    		self::$cost_money_package2 += intval($value['item_1']);
	    	}
	    	else
	    	{
	    		self::$cost_money += intval($value['item_1']);
	    	}
	    	if($value['item_2_type'] == 'card')
	    	{
	    		self::$cost_money_package2 += intval($value['item_2']);
	    	}
	    	else
	    	{
	    		self::$cost_money += intval($value['item_2']);
	    	}
	    	if($value['item_3_type'] == 'card')
	    	{
	    		self::$cost_money_package2 += intval($value['item_3']);
	    	}
	    	else
	    	{
	    		self::$cost_money += intval($value['item_3']);
	    	}
	    }
	    if(strtotime(self::$this_month_start) <= strtotime($value['date']) && strtotime($value['date']) <= strtotime(self::$this_month_end)) {
	    	self::$this_month_cost += intval($value['sum']);
	    }
    }
?>