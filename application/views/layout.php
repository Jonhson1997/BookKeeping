<?php
	$position = $this->uri->segment(1);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>記帳系統</title>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css')?>">
	    <link rel="stylesheet" href="<?= base_url('public/css/style.css')?>">
		<link rel="stylesheet" href="<?= base_url('public/js/jquery-ui-1.12.1/jquery-ui.css')?>">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?= base_url('public/js/bootstrap.min.js')?>"></script>
		<script src="<?= base_url('public/js/jquery-ui-1.12.1/jquery-ui.js')?>"></script>
		<script src="<?= base_url('public/js/jquery-ui-1.12.1/jquery.canvasjs.min.js')?>"></script>
	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item <?=($position==null || $position == 'home')?'active':''?>">
							<a class="nav-link" href="<?=base_url('')?>">List</a>
						</li>
						<li class="nav-item <?=($position=='setting')?'active':''?>">
							<a class="nav-link" href="<?=base_url('setting')?>">Setting</a>
						</li>
						<li class="nav-item <?=($position=='stat')?'active':''?>">
							<a class="nav-link" href="<?=base_url('stat')?>">Stat</a>
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Report
						  	</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">食物類</a>
								<a class="dropdown-item" href="#">飲料類</a>
								<a class="dropdown-item" href="#">交通類</a>
								<a class="dropdown-item" href="#">日常用品類</a>
								<a class="dropdown-item" href="#">衣物類</a>
								<a class="dropdown-item" href="#">雜項類</a>
								<a class="dropdown-item" href="#">收入類</a>
							  	<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li> -->
					    <form class="form-inline my-2 my-lg-0 mr-2" action="<?=base_url('')?>" method="GET">
					    	<input class="form-control mr-sm-2" type="search" id="date" placeholder="日期" name="date" autocomplete="off" value="<?=$_SESSION['date']?>">
					    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					    	<button class="btn btn-outline-dark my-2 my-sm-0 ml-1" type="button" onClick="today()">Today</button>
					    </form>
					</ul>
					<div>
					    <button class="btn btn-outline-primary mr-2" data-type="role" data-val="Lomo">Lomo</button>
					    <button class="btn btn-outline-danger mr-2" data-type="role" data-val="Gogi">Gogi</button>
					    <button class="btn btn-outline-info mr-2" data-type="role" data-val="All">All</button>
					</div>
				</div>
			</nav>
			<?=$content?>
		</div>
	</body>
</html>
<script type="text/javascript">
	function initList()
	{
		$('div[data-type="list"]').removeClass();
		if($('div[data-type="list"]').attr('data-notable') != 1)
		{
			$('div[data-type="list"]').addClass('table-responsive');
		}
		else if($('div[data-type="list"]').attr('data-col') != 1)
		{
			$('div[data-type="list"]').addClass('col-sm-12');
		}
		else
		{
			$('div[data-type="list"]').addClass('row');
		}
		$('div[data-type="list"]').addClass('hide');
		$('div[data-type="list"][data-id="'+"<?=$_SESSION['role']?>"+'_list"]').removeClass('hide');
		$('div[data-type="list"][data-id="'+"<?=$_SESSION['role']?>"+'_stat_list"]').removeClass('hide');
	}

	function changeRole(role)
	{
		$('div[data-type="list"]').removeClass();
		if($('div[data-type="list"]').attr('data-notable') != 1)
		{
			$('div[data-type="list"]').addClass('table-responsive');
		}
		else if($('div[data-type="list"]').attr('data-col') != 1)
		{
			$('div[data-type="list"]').addClass('col-sm-12');
		}
		else
		{
			$('div[data-type="list"]').addClass('row');
		}
		$('div[data-type="list"]').addClass('hide');
		$('div[data-type="list"][data-id="'+role+'_list"]').removeClass('hide');
		$('div[data-type="list"][data-id="'+role+'_stat_list"]').removeClass('hide');
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('setting/changeRole')?>',
            dataType: 'json',
            data: {'role':role},
            success: function(data){
                // console.log(data);
            },
            error: function(e){
                alert('系統忙碌中,請稍後再試!');
                // console.log(e);
            }
        })
	}

	function today()
	{
		window.location.href = "<?=base_url('')?>";
	}
</script>
<script type="text/javascript">
	initList();
    $("#date").datepicker({
    	dateFormat: "yy/mm/dd"
    });
    $("#date_s").datepicker({
    	dateFormat: "yy/mm/dd",
	    onSelect: function(dateText, inst) {
	    	date_s = dateText;
	    }
    });
    $("#date_e").datepicker({
    	dateFormat: "yy/mm/dd",
	    onSelect: function(dateText, inst) {
	    	date_e = dateText;
	    }
    });
    $('button[data-type="role"]').on('click',function(){
		changeRole($(this).attr('data-val'));
	});
    /* Index */
    $('[data-type="add"]').on('click',function(){
        $('[data-id="'+$(this).attr('data-id')+'_dialog"]').dialog("open");
    });
    $('[data-type="edit"]').on('click',function(){
        $('[data-id="'+$(this).attr('data-id')+'_dialog"]').dialog("open");
        $('#'+$(this).attr('data-role')+'_edit_id').val($(this).attr('data-item-id'));
        $('#'+$(this).attr('data-role')+'_edit_date').val($(this).attr('data-item-date'));
        $('#'+$(this).attr('data-role')+'_edit_type').val($(this).attr('data-item-type'));
        $('#'+$(this).attr('data-role')+'_edit_cost').val($(this).attr('data-item-cost'));
        $('#'+$(this).attr('data-role')+'_edit_memo').val($(this).attr('data-item-memo'));
    });
    $('[data-type="del"]').on('click',function(){
        $('[data-id="'+$(this).attr('data-id')+'_dialog"]').dialog("open");
        $('#'+$(this).attr('data-role')+'_del_id').val($(this).attr('data-item-id'));
        $('#'+$(this).attr('data-role')+'_del_date').val($(this).attr('data-item-date'));
    });
	$('[data-type="add_dialog"]').dialog({
		autoOpen: false,
		height: 400,
		width: 350,
		modal: true,
		title: 'Add',
	    buttons: {
	        "Ok": function() {
	        	var type = $('#'+$(this).attr('data-role')+'_add_type').val()
				var cost = $('#'+$(this).attr('data-role')+'_add_cost').val()
				var memo = $('#'+$(this).attr('data-role')+'_add_memo').val()
	        	if(type != null && cost != '' && $.isNumeric(cost))
	        	{
	            	$(this).submit();
	            	$(this).dialog("close");
	        	}
	        	else
	        	{
	        		if(type == null)
	        		{
	        			alert('請選擇分類');
	        		}
	        		else if(cost == '')
	        		{
	        			alert('請輸入金額');
	        		}
	        		else if(!$.isNumeric(cost))
	        		{
	        			alert('金額須為數字');
	        		}
	        	}
	    	},
	        "Cancel": function() { $(this).dialog("close"); }
	    }
	});
	$('[data-type="edit_dialog"]').dialog({
		autoOpen: false,
		height: 400,
		width: 350,
		modal: true,
		title: 'Edit',
	    buttons: {
	        "Ok": function() {
	        	var type = $('#'+$(this).attr('data-role')+'_edit_type').val()
				var cost = $('#'+$(this).attr('data-role')+'_edit_cost').val()
				var memo = $('#'+$(this).attr('data-role')+'_edit_memo').val()
	        	if(type != null && cost != '' && $.isNumeric(cost))
	        	{
	            	$(this).submit();
	            	$(this).dialog("close");
	        	}
	        	else
	        	{
	        		if(type == null)
	        		{
	        			alert('請選擇分類');
	        		}
	        		else if(cost == '')
	        		{
	        			alert('請輸入金額');
	        		}
	        		else if(!$.isNumeric(cost))
	        		{
	        			alert('金額須為數字');
	        		}
	        	}
	    	},
	        "Cancel": function() { $(this).dialog("close"); }
	    }
	});
	$('[data-type="del_dialog"]').dialog({
		autoOpen: false,
		height: 200,
		width: 350,
		modal: true,
		title: 'Del',
	    buttons: {
	        "Ok": function() {
	            $(this).submit();
	            $(this).dialog("close");
	    	},
	        "Cancel": function() { $(this).dialog("close"); }
	    }
	});
	/* Setting */
    $('[data-type="add_setting"]').on('click',function(){
        $('[data-id="'+$(this).attr('data-id')+'_dialog"]').dialog("open");
    });
    $('[data-type="edit_setting"]').on('click',function(){
        $('[data-id="'+$(this).attr('data-id')+'_dialog"]').dialog("open");
        $('#'+$(this).attr('data-role')+'_edit_setting_id').val($(this).attr('data-item-id'));
        $('#'+$(this).attr('data-role')+'_edit_setting_name').val($(this).attr('data-item-name'));
        $('#'+$(this).attr('data-role')+'_edit_setting_cost').val($(this).attr('data-item-cost'));
    });
    $('[data-type="del_setting"]').on('click',function(){
        $('[data-id="'+$(this).attr('data-id')+'_dialog"]').dialog("open");
        $('#'+$(this).attr('data-role')+'_del_setting_id').val($(this).attr('data-item-id'));
    });

	$('[data-type="add_setting_dialog"]').dialog({
		autoOpen: false,
		height: 250,
		width: 350,
		modal: true,
		title: 'Add',
	    buttons: {
	        "Ok": function() {
	        	var name = $('#'+$(this).attr('data-role')+'_add_setting_name').val()
				var cost = $('#'+$(this).attr('data-role')+'_add_setting_cost').val()
	        	if(name != '' && cost != '' && $.isNumeric(cost))
	        	{
	            	$(this).submit();
	            	$(this).dialog("close");
	        	}
	        	else
	        	{
	        		if(name == '')
	        		{
	        			alert('請輸入名稱');
	        		}
	        		else if(cost == '')
	        		{
	        			alert('請輸入金額');
	        		}
	        		else if(!$.isNumeric(cost))
	        		{
	        			alert('金額須為數字');
	        		}
	        	}
	    	},
	        "Cancel": function() { $(this).dialog("close"); }
	    }
	});
	$('[data-type="edit_setting_dialog"]').dialog({
		autoOpen: false,
		height: 250,
		width: 350,
		modal: true,
		title: 'Edit',
	    buttons: {
	        "Ok": function() {
	        	var name = $('#'+$(this).attr('data-role')+'_edit_setting_name').val()
				var cost = $('#'+$(this).attr('data-role')+'_edit_setting_cost').val()
	        	if(name != '' && cost != '' && $.isNumeric(cost))
	        	{
	            	$(this).submit();
	            	$(this).dialog("close");
	        	}
	        	else
	        	{
	        		if(name == '')
	        		{
	        			alert('請輸入名稱');
	        		}
	        		else if(cost == '')
	        		{
	        			alert('請輸入金額');
	        		}
	        		else if(!$.isNumeric(cost))
	        		{
	        			alert('金額須為數字');
	        		}
	        	}
	    	},
	        "Cancel": function() { $(this).dialog("close"); }
	    }
	});
	$('[data-type="del_setting_dialog"]').dialog({
		autoOpen: false,
		height: 200,
		width: 350,
		modal: true,
		title: 'Del',
	    buttons: {
	        "Ok": function() {
	            $(this).submit();
	            $(this).dialog("close");
	    	},
	        "Cancel": function() { $(this).dialog("close"); }
	    }
	});
</script>
<?php if(isset($msg) && !empty($msg)):?>
<script type="text/javascript">
	alert("<?=htmlspecialchars($msg)?>");
</script>
<?php endif;?>