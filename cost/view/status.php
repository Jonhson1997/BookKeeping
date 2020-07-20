<section>
	<div>
		<h1 class="title"><?=date("Y-m-d H:i:s")?></h1>
		<hr>
		<h1>存款狀況:</h1>
			<div style="padding-left: 5%">
				<h1>台灣銀行: <?=self::$package_1?>$</h1>
				<h1>悠遊卡: <?=self::$package_2 - self::$cost_money_package2?>$</h1>
				<h1>存款: <?=self::$money_card?>$</h1>
				<h1>錢包: <?=self::$my_money - self::$cost_money?>$</h1>
				<h1>總和: <?=self::$package_1 + self::$package_2 + self::$money_card - self::$cost_money_package2 + self::$my_money - self::$cost_money?>$</h1>
			</div>
		<hr>
		<h1>支出狀況:</h1>
			<div style="padding-left: 5%">
				<h1>目前總花費: <?=(isset(self::$all_sum))?self::$all_sum:0?>$</h1>
				<hr>
				<h1>這個月花費: <?=self::$this_month_cost?>$</h1>
				<?php foreach(self::$yearArr as $yk => $yv):?>
					<p>
						<a class="btn btn-danger btn-lg" data-toggle="collapse" href="#y<?=$yv?>" role="button" aria-expanded="false" aria-controls="collapseExample">
						  <?=$yv?>
						</a>
					</p>
					<div class="collapse" id="y<?=$yv?>">
						<div class="">
							<?php foreach(self::$every_month_start as $k => $v): ?>
								<?php
									$y = explode('-',$v);
									if($y[0] == $yv):
								?>
										<?php if(self::get_monthly($v,self::$every_month_end[$k]) != 0 ): ?>
										<hr>
										<h1><?= substr($v, 0,-3)?> 花費: <?= self::get_monthly($v,self::$every_month_end[$k])?>$</h1>
										<?php endif;?>
								<?php endif;?>
							<?php endforeach;?>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		<hr>
		<!-- <h1>10元硬幣: 42個</h1>
		<h1>糧食存量:</h1>
			<div style="padding-left: 5%">
				<h1>蔥燒豬肉麵: 8包</h1>
				<h1>統一脆麵: 10包</h1>
				<h1>來一客 - 海鮮: 9碗</h1>
				<h1>黃金奶油玉米濃湯: 1碗</h1>
				<h1>康寶 - 玉米濃湯: 29包</h1>
				<h1>水: 1箱</h1>
				<h1>飲料: 0箱</h1>
			</div>
		<hr> -->
	</div>
</section>