<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<caption>table title and/or explanatory text</caption>
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên Sp</th>
				<th>Giá</th>
				<th>Số Lượng</th>
			</tr>
		</thead>
		<tbody>
			<!-- @foreach($cart->items as $cc)
			<tr>
				<td>$loop->index+1</td>
				<td>$cc['name']</td>
				<td>$cc['price']</td>
				<td>$cc['quantity']</td>
			</tr>
			@endforeach -->
		</tbody>
	</table>
</body>
</html>