<div class="table-responsive hide" data-type="list" data-id="Lomo_list">
	<h1 class="text-center">Lomo</h1>
	<ul class="list-group col-sm-4 mb-2">
		<button type="button" class="list-group-item list-group-item-action bg-primary active" data-toggle="collapse" data-target="#Lomo_status" aria-expanded="false" aria-controls="Lomo_status">
		<h3 class="text-center">存款狀態</h3>
		</button>
		<div class="collapse" id="Lomo_status">
			<?php if(count($setting_arr['Lomo']) > 0):?>
				<?php foreach($setting_arr['Lomo'] as $k => $v):?>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<?=$v['name']?>
						<span class="badge badge-primary badge-pill"><?=$v['cost']?></span>
					</li>
				<?php endforeach;?>
			<?php else:?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					暫無資料
				</li>
			<?php endif;?>
			<!-- <li class="list-group-item d-flex justify-content-between align-items-center disabled">
				更新時間: <?=@$lomo_file?>
			</li> -->
		</div>
	</ul>
	<table class="table table-bordered table-dark">
		<thead>
			<tr>
				<th scope="col" width="1%" class="text-right">Date.</th>
				<th scope="col" width="5%" class="text-right">類別</th>
				<th scope="col" width="1%" class="text-right">金額</th>
				<th scope="col" width="15%" class="text-right">備註</th>
				<th scope="col" width="1%"></th>
				<th scope="col" width="1%"><button type="button" class="btn btn-primary col-sm-12" data-type="add" data-id="Lomo_add" data-role="Lomo">Add</button></th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($lomo_arr) > 0):?>
				<?php foreach($lomo_arr as $k => $v):?>
					<tr>
						<td class="text-right"><?=$v['date']?></td>
						<td class="text-right"><?=$v['type']?></td>
						<td class="text-right"><?=$v['cost']?></td>
						<td class="text-right"><?=$v['memo']?></td>
						<td><button type="button" class="btn btn-warning col-sm-12" data-type="edit" data-role="Lomo" data-id="Lomo_edit" data-item-id="<?=$v['id']?>" data-item-date="<?=$v['date']?>"  data-item-type="<?=$v['type']?>" data-item-cost="<?=$v['cost']?>" data-item-memo="<?=$v['memo']?>">Edit</button></td>
						<td><button type="button" class="btn btn-danger col-sm-12" data-type="del" data-role="Lomo" data-id="Lomo_del" data-item-id="<?=$v['id']?>" data-item-date="<?=$v['date']?>">Del</button></td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
				<tr>
					<td colspan="6" class="text-center">暫無資料</td>
				</tr>
			<?php endif;?>
		</tbody>
		<tfoot>
			<tr>
				<td class="text-right" colspan="2">總計</td>
				<td class="text-right" colspan="1"><?=$lomo_sum?></td>
			</tr>
		</tfoot>
	</table>
	<form data-type="add_dialog" data-id="Lomo_add_dialog" method="post" data-role="Lomo" action="<?=base_url('home/add')?>">
		<div class="row">
			<input type="text" class="hide" name="date" value="<?=$_SESSION['date']?>">
		    <select class="col-sm-12 form-control my-1" name="type" id="Lomo_add_type" required>
		    	<option selected disabled>類別</option>
		    	<option value="食物類">食物類</option>
		    	<option value="飲料類">飲料類</option>
		    	<option value="交通類">交通類</option>
		    	<option value="日常用品類">日常用品類</option>
		    	<option value="衣物類">衣物類</option>
		    	<option value="雜項類">雜項類</option>
		    	<option value="收入類">收入類</option>
		    </select>
		    <label for="Lomo_add_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Lomo_add_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Lomo_add_memo" class="col-sm-4 my-1">備註</label>
		    <input type="text" name="memo" id="Lomo_add_memo" value="" class="col-sm-8 my-1 form-control" autocomplete="off">
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="edit_dialog" data-id="Lomo_edit_dialog" method="post" data-role="Lomo" action="<?=base_url('home/edit')?>">
		<div class="row">
			<input type="text" name="id" id="Lomo_edit_id" class="hide">
			<input type="text" class="hide" name="date" id="Lomo_edit_date" value="<?=$_SESSION['date']?>">
		    <select class="col-sm-12 form-control my-1" name="type" id="Lomo_edit_type" required>
		    	<option value="食物類">食物類</option>
		    	<option value="飲料類">飲料類</option>
		    	<option value="交通類">交通類</option>
		    	<option value="日常用品類">日常用品類</option>
		    	<option value="衣物類">衣物類</option>
		    	<option value="雜項類">雜項類</option>
		    	<option value="收入類">收入類</option>
		    </select>
		    <label for="Lomo_edit_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Lomo_edit_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Lomo_edit_memo" class="col-sm-4 my-1">備註</label>
		    <input type="text" name="memo" id="Lomo_edit_memo" value="" class="col-sm-8 my-1 form-control" autocomplete="off">
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="del_dialog" data-id="Lomo_del_dialog" method="post" data-role="Lomo" action="<?=base_url('home/del')?>">
		<div class="row">
			<input type="text" name="id" id="Lomo_del_id" class="hide">
			<div class="text-center col-sm-12 mt-3">確定要刪除嗎</div>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
</div>
<div class="table-responsive hide" data-type="list" data-id="Gogi_list">
	<h1 class="text-center">Gogi</h1>
	<ul class="list-group col-sm-4 mb-2">
		<button type="button" class="list-group-item list-group-item-action bg-danger active" data-toggle="collapse" data-target="#Gogi_status" aria-expanded="false" aria-controls="Gogi_status">
		<h3 class="text-center">存款狀態</h3>
		</button>
		<div class="collapse" id="Gogi_status">
			<?php if(count($setting_arr['Gogi']) > 0):?>
				<?php foreach($setting_arr['Gogi'] as $k => $v):?>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<?=$v['name']?>
						<span class="badge badge-primary badge-pill"><?=$v['cost']?></span>
					</li>
				<?php endforeach;?>
			<?php else:?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					暫無資料
				</li>
			<?php endif;?>
			<!-- <li class="list-group-item d-flex justify-content-between align-items-center disabled">
				更新時間: <?=@$gogi_file?>
			</li> -->
		</div>
	</ul>
	<table class="table table-bordered table-dark">
		<thead>
			<tr>
				<th scope="col" width="1%" class="text-right">Date.</th>
				<th scope="col" width="3%" class="text-right">類別</th>
				<th scope="col" width="1%" class="text-right">金額</th>
				<th scope="col" width="15%" class="text-right">備註</th>
				<th scope="col" width="1%"></th>
				<th scope="col" width="1%"><button type="button" class="btn btn-primary col-sm-12" data-type="add" data-id="Gogi_add" data-role="Gogi">Add</button></th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($gogi_arr) > 0):?>
				<?php foreach($gogi_arr as $k => $v):?>
					<tr>
						<td class="text-right"><?=$v['date']?></td>
						<td class="text-right"><?=$v['type']?></td>
						<td class="text-right"><?=$v['cost']?></td>
						<td class="text-right"><?=$v['memo']?></td>
						<td><button type="button" class="btn btn-warning col-sm-12" data-type="edit" data-role="Gogi" data-id="Gogi_edit" data-item-id="<?=$v['id']?>" data-item-date="<?=$v['date']?>" data-item-type="<?=$v['type']?>" data-item-cost="<?=$v['cost']?>" data-item-memo="<?=$v['memo']?>">Edit</button></td>
						<td><button type="button" class="btn btn-danger col-sm-12" data-type="del" data-role="Gogi" data-id="Gogi_del" data-item-id="<?=$v['id']?>" data-item-date="<?=$v['date']?>">Del</button></td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
				<tr>
					<td colspan="6" class="text-center">暫無資料</td>
				</tr>
			<?php endif;?>
		</tbody>
		<tfoot>
			<tr>
				<td class="text-right" colspan="2">總計</td>
				<td class="text-right" colspan="1"><?=$gogi_sum?></td>
			</tr>
		</tfoot>
	</table>
	<form data-type="add_dialog" data-id="Gogi_add_dialog" data-role="Gogi" method="post" action="<?=base_url('home/add')?>">
		<div class="row">
			<input type="text" class="hide" name="date" value="<?=$_SESSION['date']?>">
		    <select class="col-sm-12 form-control my-1" name="type" id="Gogi_add_type" required>
		    	<option selected disabled>類別</option>
		    	<option value="食物類">食物類</option>
		    	<option value="飲料類">飲料類</option>
		    	<option value="交通類">交通類</option>
		    	<option value="日常用品類">日常用品類</option>
		    	<option value="衣物類">衣物類</option>
		    	<option value="雜項類">雜項類</option>
		    	<option value="收入類">收入類</option>
		    </select>
		    <label for="Gogi_add_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Gogi_add_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Gogi_add_memo" class="col-sm-4 my-1">備註</label>
		    <input type="text" name="memo" id="Gogi_add_memo" value="" class="col-sm-8 my-1 form-control" autocomplete="off">
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="edit_dialog" data-id="Gogi_edit_dialog" data-role="Gogi" method="post" action="<?=base_url('home/edit')?>">
		<div class="row">
			<input type="text" name="id" id="Gogi_edit_id" class="hide">
			<input type="text" class="hide" name="date" id="Gogi_edit_date" value="<?=$_SESSION['date']?>">
		    <select class="col-sm-12 form-control my-1" name="type" id="Gogi_edit_type" required>
		    	<option value="食物類">食物類</option>
		    	<option value="飲料類">飲料類</option>
		    	<option value="交通類">交通類</option>
		    	<option value="日常用品類">日常用品類</option>
		    	<option value="衣物類">衣物類</option>
		    	<option value="雜項類">雜項類</option>
		    	<option value="收入類">收入類</option>
		    </select>
		    <label for="Gogi_edit_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Gogi_edit_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Gogi_edit_memo" class="col-sm-4 my-1">備註</label>
		    <input type="text" name="memo" id="Gogi_edit_memo" value="" class="col-sm-8 my-1 form-control" autocomplete="off">
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="del_dialog" data-id="Gogi_del_dialog" method="post" data-role="Gogi" action="<?=base_url('home/del')?>">
		<div class="row">
			<input type="text" name="id" id="Gogi_del_id" class="hide">
			<div class="text-center col-sm-12 mt-3">確定要刪除嗎</div>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
</div>
<div class="table-responsive hide" data-type="list" data-id="All_list">
	<h1 class="text-center">All</h1>
	<ul class="list-group col-sm-8 mb-2">
		<button type="button" class="list-group-item list-group-item-action bg-info active" data-toggle="collapse" data-target="#All_status" aria-expanded="false" aria-controls="All_status">
		<h3 class="text-center">存款狀態</h3>
		</button>
		<div class="collapse" id="All_status">
			<div class="row">
				<div class="col-sm-6">
					<?php if(count($setting_arr['Lomo']) > 0):?>
						<?php foreach($setting_arr['Lomo'] as $k => $v):?>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<?=$v['name']?>
								<span class="badge badge-primary badge-pill"><?=$v['cost']?></span>
							</li>
						<?php endforeach;?>
					<?php else:?>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							暫無資料
						</li>
					<?php endif;?>
					<!-- <li class="list-group-item d-flex justify-content-between align-items-center disabled">
						更新時間: <?=@$lomo_file?>
					</li> -->
				</div>
				<div class="col-sm-6">
					<?php if(count($setting_arr['Gogi']) > 0):?>
						<?php foreach($setting_arr['Gogi'] as $k => $v):?>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<?=$v['name']?>
								<span class="badge badge-primary badge-pill"><?=$v['cost']?></span>
							</li>
						<?php endforeach;?>
					<?php else:?>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							暫無資料
						</li>
					<?php endif;?>
					<!-- <li class="list-group-item d-flex justify-content-between align-items-center disabled">
						更新時間: <?=@$gogi_file?>
					</li> -->
				</div>
			</div>
		</div>
	</ul>
	<table class="table table-bordered table-dark">
		<thead>
			<tr>
				<th scope="col" width="1%" class="text-right">Date.</th>
				<th scope="col" width="1%" class="text-right">類別</th>
				<th scope="col" width="1%" class="text-right">金額</th>
				<th scope="col" width="15%" class="text-right">備註</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($arr) > 0):?>
				<?php foreach($arr as $k => $v):?>
					<tr class="<?=($v['role'] == 'Lomo')?'table-primary':'table-danger'?> text-dark">
						<td class="text-right"><?=$v['date']?></td>
						<td class="text-right"><?=$v['type']?></td>
						<td class="text-right"><?=$v['cost']?></td>
						<td class="text-right"><?=$v['memo']?></td>
					</tr>
				<?php endforeach;?>
			<?php else:?>
				<tr>
					<td colspan="4" class="text-center">暫無資料</td>
				</tr>
			<?php endif;?>
		</tbody>
		<tfoot>
			<tr>
				<td class="text-right" colspan="2">總計</td>
				<td class="text-right" colspan="1"><?=$lomo_sum+$gogi_sum?></td>
			</tr>
		</tfoot>
	</table>
</div>
<div class="btn-group" role="group" aria-label="Basic example">
	<a type="button" href="<?=base_url('?date='.date('Y/m/d',strtotime($_SESSION['date'].'-1 day')))?>" class="btn btn-secondary"><img src="<?=base_url('public/images/left.svg')?>"></a>
	<a type="button" href="<?=base_url('?date='.date('Y/m/d',strtotime($_SESSION['date'].'+1 day')))?>" class="btn btn-secondary"><img src="<?=base_url('public/images/right.svg')?>"></a>
</div>