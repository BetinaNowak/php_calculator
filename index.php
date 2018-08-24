<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<title>Calculator</title>
</head>

<body>

		<style>
			
		h1 {
			text-align: center;
		}
		
		.form-control {
			width: 400px;
			
		}
		
		.jumbotron {
			width: 500px;
			margin: auto;
		}
		
		p {
			font-size: 18px;
		}
		
		
	</style>
	
	<br/><h1 class="display-4">Calculator</h1><br/>

	<!-- action: sends the action back to website -->

	<form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
<div class="jumbotron">
		<input type="text" class="form-control" name="val1" required><br/>
		<input type="text" class="form-control" name="val2" required><br/><br/>
	
		<p>Choose operator and calculate:</p>
	
		<button type="submit" class="btn btn-outline-secondary" name="operator" value="add">+</button>
		<button type="submit" class="btn btn-outline-secondary" name="operator" value="sub">-</button>
		<button type="submit" class="btn btn-outline-secondary" name="operator" value="mul">*</button>
		<button type="submit" class="btn btn-outline-secondary" name="operator" value="div">/</button>
		<button type="submit" class="btn btn-outline-secondary" name="operator" value="mod">%</button>
		<button type="submit" class="btn btn-outline-secondary" name="operator" value="exp">^</button>
	<br/><br/>


	</form>

	<br/>


	<?php 
	
	// $v1 = $_GET['val1'];
	// $v2 = $_GET['val2'];
		  
	
	if (isset($_GET['operator'])) {
		 
		
	$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_FLOAT) or die ('Illegal 1st value parameter');
	
	$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_FLOAT) or die ('Illegal 2nd value parameter');	  
		
	$op = $_GET['operator'];
	
	
		
		echo 'Result: ';
		  
	switch ($op) {
		case 'add':
			$res = $v1 + $v2;
			$opchar = '+';
		break;	
			
		case 'sub':
			$res = $v1 - $v2;
			$opchar = '-';
		break;	
			
		case 'mul':
			$res = $v1 * $v2;
			$opchar = '*';
		break;	
			
		case 'div':
			$res = $v1 / $v2;
			$opchar = '/';
		break;	
		
		case 'mod':
			$res = $v1 % $v2;
			$opchar = '%';
		break;	
		
		case 'exp':
			$res = $v1 ** $v2;
			$opchar = '^';
		break;	
	
		default: 
			$res = 'Unknown operator'. ''.$op.'';
			$opchar = $op;
	}
		  
		
		
		  echo $v1.' '.$opchar.' '.$v2.' = '.$res;

	}
	?>
</div>


	
</body>

</html>