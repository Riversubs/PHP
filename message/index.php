<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文本留言板</title>
</head>
<body>
	<?php
		include ("./menu.php");
	?>
	<center>
		<h3>留言列表</h3>
		<table width="700" border="1">
			<tr>
				<th>标题</th>
				<th>作者</th>
				<th>内容</th>
				<th>操作</th>
			</tr>
			<?php
				//把lu.db中的数据读取出来
				//1.读取数据
				$info = rtrim(file_get_contents("ly.db"),"@");

				//2.使用中间的@进行拆分
				$list = explode("@",$info);

				//判断ly.db是否有留言，没有留言输出友好提示
				if ($list[0] ==="") {
					die("没有留言");
				}

				//把$list数组进行循环遍历，输出到表格
				foreach ($list as $k => $value) {
					//使用##$list循环输出的对应值
					$ly = explode("##", "$value");
					echo "<tr align='center'>";
					echo "<td>{$ly[0]}</td>";
					echo "<td>{$ly[1]}</td>";
					echo "<td>{$ly[2]}</td>";
					echo "<td><a href='delete.php?id={$k}'>删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</center>
</body>
</html>