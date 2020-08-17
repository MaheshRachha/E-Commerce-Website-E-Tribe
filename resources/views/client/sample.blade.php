<html>

<head>
	<title>Sample</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
	<table class="table table-bordered" >
		<thead>
			<tr>
				<th>Numbers</th>
			</tr>
		</thead>
		<tbody>
			@for( $i=1 ; $i <= 10 ; $i++ )
				<tr>
				<td> {{$i}} </td>
				</tr>
			@endfor
		</tbody>
		
	</table>
</body>

</html>