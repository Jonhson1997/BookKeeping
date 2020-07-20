<?php array_push($types,'總花費');?>
<div class="form-inline">
	<div class="form-group mx-auto my-2">
		<input type="text" class="form-control" id="date_s" placeholder="起始日">
		<input type="text" class="hide" name="date_s">
		<span class="ml-2 mr-2"> ~ </span>
		<input type="text" class="form-control" id="date_e" placeholder="截止日">
		<input type="text" class="hide" name="date_e">
		<input class="btn btn-primary ml-2 " type="button" id="date_ok" value="ok">
	</div>
</div>
<div class="row" data-type="list" data-id="Lomo_stat_list" data-notable="1" data-col="1">
	<?php foreach($types as $k => $v):?>
		<?php if(($k+1)==1 || (($k+1)>4 && ($k+1)%4==1)):?>
		<ul class="list-group col-sm-4">
		<?php endif;?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<?=$v?>
				<div>
					<span class="badge badge-primary badge-pill" data-id="Lomo_<?=$v?>" data-type="cost"></span>
					<span class="badge badge-danger badge-pill" data-id="Lomo_<?=$v?>" data-type="count"></span>
				</div>
			</li>
		<?php if(($k+1)!=1 && (($k+1)%4==0 || $k == count($types))):?>
		</ul>
		<?php endif;?>
	<?php endforeach;?>
</div>
<div class="row" data-type="list" data-id="Gogi_stat_list" data-notable="1" data-col="1">
	<?php foreach($types as $k => $v):?>
		<?php if(($k+1)==1 || (($k+1)>4 && ($k+1)%4==1)):?>
		<ul class="list-group col-sm-4">
		<?php endif;?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<?=$v?>
				<div>
					<span class="badge badge-primary badge-pill" data-id="Gogi_<?=$v?>" data-type="cost"></span>
					<span class="badge badge-danger badge-pill" data-id="Gogi_<?=$v?>" data-type="count"></span>
				</div>
			</li>
		<?php if(($k+1)!=1 && (($k+1)%4==0 || $k == count($types))):?>
		</ul>
		<?php endif;?>
	<?php endforeach;?>
</div>
<div class="row" data-type="list" data-id="All_stat_list" data-notable="1" data-col="1">
	<?php foreach($types as $k => $v):?>
		<?php if(($k+1)==1 || (($k+1)>4 && ($k+1)%4==1)):?>
		<ul class="list-group col-sm-4">
		<?php endif;?>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<?=$v?>
				<div>
					<span class="badge badge-primary badge-pill" data-id="All_<?=$v?>" data-type="cost"></span>
					<span class="badge badge-danger badge-pill" data-id="All_<?=$v?>" data-type="count"></span>
				</div>
			</li>
		<?php if(($k+1)!=1 && (($k+1)%4==0 || $k == count($types))):?>
		</ul>
		<?php endif;?>
	<?php endforeach;?>
</div>
<div class="row">
	<div id="Lomo_chartContainer" class="col-sm-12"  data-type="list" data-id="Lomo_list" data-notable="1"></div>
</div>
<div class="row">
	<div id="Gogi_chartContainer" class="col-sm-12"  data-type="list" data-id="Gogi_list" data-notable="1"></div>
</div>
<div class="row">
	<div id="All_chartContainer" class="col-sm-12"  data-type="list" data-id="All_list" data-notable="1"></div>
</div>
<script type="text/javascript">
window.onload = function () {
	date_s = '';
	date_e = '';
	function ajaxGetData()
	{
		dataPoints = {
			Lomo:[],
			Gogi:[],
			All:[],
		}
		options = {
			Lomo:{
				// animationEnabled: true,
				title: {
					text: "Lomo"
				},
				width:$( window ).width(),
				data: [{
					type: "doughnut",
					innerRadius: "60%",
					showInLegend: true,
					legendText: "{label}",
					indexLabel: "{label}: #percent% ({size})",
					dataPoints: dataPoints['Lomo']
				}],
				backgroundColor: null
			},
			Gogi:{
				// animationEnabled: true,
				title: {
					text: "Gogi"
				},
				width:$( window ).width(),
				data: [{
					type: "doughnut",
					innerRadius: "60%",
					showInLegend: true,
					legendText: "{label}",
					indexLabel: "{label}: #percent% ({size})",
					dataPoints: dataPoints['Gogi']
				}],
				backgroundColor: null
			},
			All:{
				// animationEnabled: true,
				title: {
					text: "All"
				},
				width:$( window ).width(),
				data: [{
					type: "doughnut",
					innerRadius: "60%",
					showInLegend: true,
					legendText: "{label}",
					indexLabel: "{label}: #percent% ({size})",
					dataPoints: dataPoints['All']
				}],
				backgroundColor: null
			},
		}
		$.ajax({
		    type: 'POST',
		    url: '<?php echo base_url('stat/getAjaxData')?>',
		    dataType: 'json',
		    data: {
		    	date_s:date_s,
		    	date_e:date_e
		    },
		    success: function(data){
		    	var types = data.types;
		    	var cost_arr = data.cost_arr;
		    	var filter_arr = data.filter_arr;
		    	var data = {types:types,cost_arr:cost_arr,filter_arr:filter_arr};
		    	var Lomo_cost_sum = 0;
		    	var Gogi_cost_sum = 0;
		    	var All_cost_sum = 0;
		    	$.each(types, function( key, value ) {
					$('[data-type="cost"][data-id="Lomo_'+value+'"]').text(cost_arr[value]['Lomo']+' $');
					$('[data-type="count"][data-id="Lomo_'+value+'"]').text(filter_arr[value]['Lomo'].length+' 筆');
					$('[data-type="cost"][data-id="Gogi_'+value+'"]').text(cost_arr[value]['Gogi']+' $');
					$('[data-type="count"][data-id="Gogi_'+value+'"]').text(filter_arr[value]['Gogi'].length+' 筆');
					$('[data-type="cost"][data-id="All_'+value+'"]').text(cost_arr[value]['All']+' $');
					$('[data-type="count"][data-id="All_'+value+'"]').text(filter_arr[value]['All'].length+' 筆');
					if(value != '收入類')
					{
						Lomo_cost_sum += cost_arr[value]['Lomo'];
						Gogi_cost_sum += cost_arr[value]['Gogi'];
						All_cost_sum += cost_arr[value]['All'];
					}
				});
				$('[data-type="cost"][data-id="Lomo_總花費"]').text(Lomo_cost_sum+' $');
				$('[data-type="cost"][data-id="Gogi_總花費"]').text(Gogi_cost_sum+' $');
				$('[data-type="cost"][data-id="All_總花費"]').text(All_cost_sum+' $');
		        addData(data,'Lomo');
		        addData(data,'Gogi');
		        addData(data,'All');
		    },
		    error: function(e){
		        alert('系統忙碌中,請稍後再試!');
		        // console.log(e);
		    }
		})
	}
	function addData(data,role) {
		for (var i = 0; i < data['types'].length; i++) {
			if(data['types'][i] == '收入類')
			{
				continue;
			}
			dataPoints[role].push({
				label: data.types[i],
				y: data.cost_arr[data.types[i]][role],
				size: data.filter_arr[data.types[i]][role].length
			});
		}
		$("#"+role+"_chartContainer").CanvasJSChart(options[role]);
	}
	ajaxGetData();
	$('#date_ok').on('click',function(){
		if(date_e == '')
		{
			date_e = $.datepicker.formatDate('yy/mm/dd', new Date());
		}
		ajaxGetData();
	});
}
</script>