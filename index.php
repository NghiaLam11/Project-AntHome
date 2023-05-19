<?php 
 $dm='http://localhost/aWork/LamHienNghia - AntHome/';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo $dm; ?>"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css?version=<?php echo time(); ?>" />

	<script src="public/js/jquery.js"></script>
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title>Document</title>
	<style>
		.w-1200 {
			max-width: 1140px !important;
			margin: 0 auto !important;
		}
		.ff-primary {
			font-family: 'Exo', sans-serif;
		}
		.hidden-scroll::-webkit-scrollbar{
			display: none;
		}
		.text__hover:hover {
			color: rgba(236, 79, 33, 1.0) !important;
			cursor: pointer !important;
		}
		.text__hover-link:hover {
			text-decoration: underline !important;
		}
		.cate__hover:hover {
			box-shadow: 0 0 5px 0.1px rgba(0, 0, 0, 0.5);
			transform: translateY(-5px);
			transition: all 0.35s linear;
			color: orange;
		}

		.hot__hover:hover {
			box-shadow: 0 0 5px 0.1px rgba(0, 0, 0, 0.5);
			transition: all 0.2s linear;
		}
		.hot__hover-child:hover{
			border: 1px solid orange;
		}
		.hot__hover-btn:hover{
			background-color: orange;
			color: white;
		}	
		.ghouse__hover-btn:hover{
			background-color: orange;
			color: white;
		}
		.handbook__hover:hover {
			transform: scale(1.1);
			transition: transform 0.35s linear;
		}
		.cate__hover, .hot__hover, .handbook__hover {
			transition: all 0.35s linear;
		}
		.accordion-button:focus {
			box-shadow: 0 0 0 0 transparent !important;
		}
		.form-control:focus {
			box-shadow: 0 0 0 0 transparent !important;
		}
	</style>
</head>
<body>
	<div class="container-fluid overflow-hidden ff-primary p-0">
		<?php 
		if(@$_GET['p']){
			
			$p=$_GET['p'];
				require "page/header.php";
				require "page/".$p.".php";
				require "page/footer.php";
		} else{

			require "page/header.php";
			require "page/trangchu.php";
			require "page/footer.php";
		}
		?>
	</div>

	
</html>