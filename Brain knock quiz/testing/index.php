<html>
	<head>
		<script src="js/jquery-3.2.1.min.js"></script>
	</head>
	<body>
	</body>
	<script type='text/javascript'>
		var emp1={};
		emp1.id = 1;
		emp1.nm ='Rebel';
		emp1.add ='Rajkot';

		console.log(emp1)
		$.ajax({
			url: "abc.php",
			method: "post",
			data: emp1,
			success: function(res)
			{
				console.log(res);
			}
		})
	</script>
</html>