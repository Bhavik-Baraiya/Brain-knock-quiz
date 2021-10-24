<html>
	<head>
	</head>
	<body>
	</body>
	<script type='text/javascript'>
		var emp={};
			emp.id = 1;
			emp.nm ='Rebel';
			emp.add ='Rajkot';

			console.log(emp)
			$.ajax({
				url: "abc.php",
				method: "post",
				data: emp,
				success: function(res)
				{
					console.log(res);
				}
			})
	</script>
</html>