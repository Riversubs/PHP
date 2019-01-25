<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>万年历</title>
</head>
<body>
	<?php 
		//获取所需要的信息
		//获取当前的年份
		$year = empty($_GET["year"])?date("Y"):$_GET["year"];
		//获取当前的月份
		$month = empty($_GET["month"])?date("m"):$_GET["month"];
		//获取月份有几千
		$days = date("t",strtotime("{$year}-{$month}"));
		//获取当下月的1号是星期几
		$week = date("w",strtotime("{$year}-{$month}-1"));
	?>
	<center>
		<h1><?php echo $year."年".$month."月" ?></h1>
		<?php
			//下一月
			$nextyear = $listyear = $year;
			$nextmonth = $month + 1;
			if ($nextmonth > 12) {
				$nextmonth = 1;
				$nextyear++;
			}

			//上一月
			$listmonth = $month - 1;
			if ($listmonth < 1) {
				$listmonth = 12;
				$listyear--;
			}


			echo "<a href='php18.php?year={$listyear}&month={$listmonth}'>上一月</a>";
			echo " | ";
			echo "<a href='php18.php?year={$nextyear}&month={$nextmonth}'>下一月</a>";
			echo " | ";
			echo "<a href='php18.php'>回到今天</a>";
		?>
		<br/>
		<br/>
		<table width="700" border="1">
			<tr>
				<th>星期日</th>
				<th>星期一</th>
				<th>星期二</th>
				<th>星期三</th>
				<th>星期四</th>
				<th>星期五</th>
				<th>星期六</th>
			</tr> 
			<?php
				//循环输出日期
				$d = 1;
				while ($d <= $days) {
					echo "<tr>";
					//循环一周
					for ($i=0; $i < 7; $i++) { 
						//在内层输出的时候再过滤一次
						if ($d <= $days && ($i >=$week || $d > 1)){
							echo "<td>".$d."</td>";
							$d++;
						} else {
							echo "<td>&nbsp;</td>";
						}
					}
					echo "</tr>";
				}
			?>
		</table>
		<br/>
	</center>
</body>
</html>