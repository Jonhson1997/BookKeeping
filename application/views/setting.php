<div class="table-responsive" data-type="list" data-id="Lomo_list">
	<h1 class="text-center">Lomo</h1>
	<div>
		<div class="btn-group" role="group">
		    <button type="button" class="btn btn-secondary" data-type="add_setting" data-id="Lomo_add_setting" data-role="Lomo">+</button>
		</div>
	</div>
	<ul class="list-group col-sm-4 mb-2 my-2">
		<?php if(count($arr['Lomo']) > 0):?>
			<?php foreach($arr['Lomo'] as $k => $v):?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<?=$v['name']?>
					<div>
						<button class="btn btn-primary" data-type="edit_setting" data-role="Lomo" data-id="Lomo_edit_setting" data-item-id="<?=$v['id']?>" data-item-name="<?=$v['name']?>" data-item-cost="<?=$v['cost']?>"><?=$v['cost']?></button>
						<button type="button" class="btn btn-danger" data-type="del_setting" data-role="Lomo" data-id="Lomo_del_setting" data-item-id="<?=$v['id']?>" >Del</button>
					</div>
				</li>
			<?php endforeach;?>
		<?php else:?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				暫無資料
			</li>
		<?php endif;?>
	</ul>
	<form data-type="add_setting_dialog" data-id="Lomo_add_setting_dialog" method="post" data-role="Lomo" action="<?=base_url('setting/add')?>">
		<div class="row">
		    <label for="Lomo_add_setting_name" class="col-sm-4 my-1">名稱</label>
		    <input type="text" name="name" id="Lomo_add_setting_name" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Lomo_add_setting_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Lomo_add_setting_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="edit_setting_dialog" data-id="Lomo_edit_setting_dialog" data-role="Lomo" method="post" action="<?=base_url('setting/edit')?>">
		<div class="row">
			<input type="text" name="id" id="Lomo_edit_setting_id" class="hide">
		    <label for="Lomo_edit_setting_name" class="col-sm-4 my-1">名稱</label>
		    <input type="text" name="name" id="Lomo_edit_setting_name" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Lomo_edit_setting_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Lomo_edit_setting_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="del_setting_dialog" data-id="Lomo_del_setting_dialog" method="post" data-role="Lomo" action="<?=base_url('setting/del')?>">
		<div class="row">
			<input type="text" name="id" id="Lomo_del_setting_id" class="hide">
			<div class="text-center col-sm-12 mt-3">確定要刪除嗎</div>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
</div>
<div class="table-responsive" data-type="list" data-id="Gogi_list">
	<h1 class="text-center">Gogi</h1>
	<div>
		<div class="btn-group" role="group">
		    <button type="button" class="btn btn-secondary" data-type="add_setting" data-id="Gogi_add_setting" data-role="Gogi">+</button>
		</div>
	</div>
	<ul class="list-group col-sm-4 mb-2 my-2">
		<?php if(count($arr['Gogi']) > 0):?>
			<?php foreach($arr['Gogi'] as $k => $v):?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<?=$v['name']?>
					<div>
						<button class="btn btn-primary" data-type="edit_setting" data-role="Gogi" data-id="Gogi_edit_setting" data-item-id="<?=$v['id']?>" data-item-name="<?=$v['name']?>" data-item-cost="<?=$v['cost']?>"><?=$v['cost']?></button>
						<button type="button" class="btn btn-danger" data-type="del_setting" data-role="Gogi" data-id="Gogi_del_setting" data-item-id="<?=$v['id']?>" >Del</button>
					</div>
				</li>
			<?php endforeach;?>
		<?php else:?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				暫無資料
			</li>
		<?php endif;?>
	</ul>
	<form data-type="add_setting_dialog" data-id="Gogi_add_setting_dialog" method="post" data-role="Gogi" action="<?=base_url('setting/add')?>">
		<div class="row">
		    <label for="Gogi_add_setting_name" class="col-sm-4 my-1">名稱</label>
		    <input type="text" name="name" id="Gogi_add_setting_name" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Gogi_add_setting_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Gogi_add_setting_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="edit_setting_dialog" data-id="Gogi_edit_setting_dialog" data-role="Gogi" method="post" action="<?=base_url('setting/edit')?>">
		<div class="row">
			<input type="text" name="id" id="Gogi_edit_setting_id" class="hide">
		    <label for="Gogi_edit_setting_name" class="col-sm-4 my-1">名稱</label>
		    <input type="text" name="name" id="Gogi_edit_setting_name" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <label for="Gogi_edit_setting_cost" class="col-sm-4 my-1">金額</label>
		    <input type="text" name="cost" id="Gogi_edit_setting_cost" value="" class="col-sm-8 my-1 form-control" autocomplete="off" required>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
	<form data-type="del_setting_dialog" data-id="Gogi_del_setting_dialog" method="post" data-role="Gogi" action="<?=base_url('setting/del')?>">
		<div class="row">
			<input type="text" name="id" id="Gogi_del_setting_id" class="hide">
			<div class="text-center col-sm-12 mt-3">確定要刪除嗎</div>
		    <!-- Allow form submission with keyboard without duplicating the dialog button -->
		    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		</div>
	</form>
</div>
<div class="table-responsive" data-type="list" data-id="All_list">
	<h1 class="text-center">All</h1>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="list-group col-sm-4 mb-2 my-2">
					<?php if(count($arr['Lomo']) > 0):?>
						<?php foreach($arr['Lomo'] as $k => $v):?>
							<li class="list-group-item d-flex justify-content-between align-items-center text-primary">
								<?=$v['name']?>
								<div>
									<button class="btn btn-primary"><?=$v['cost']?></button>
								</div>
							</li>
						<?php endforeach;?>
					<?php else:?>
						<li class="list-group-item d-flex justify-content-between align-items-center text-primary">
							暫無資料
						</li>
					<?php endif;?>
				</ul>
			</div>
			<div class="col-sm-12">
				<ul class="list-group col-sm-4 mb-2 my-2">
					<?php if(count($arr['Gogi']) > 0):?>
						<?php foreach($arr['Gogi'] as $k => $v):?>
							<li class="list-group-item d-flex justify-content-between align-items-center text-danger">
								<?=$v['name']?>
								<div>
									<button class="btn btn-primary"><?=$v['cost']?></button>
								</div>
							</li>
						<?php endforeach;?>
					<?php else:?>
						<li class="list-group-item d-flex justify-content-between align-items-center text-danger">
							暫無資料
						</li>
					<?php endif;?>
				</ul>
			</div>
		</div>
	</div>
</div>