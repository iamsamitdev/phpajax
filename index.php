<?php 
	$name = "Samit Koyom";
	$age = "30";
	$profile = "samit.jpg"
 ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>หน้าแรก</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body bgcolor="#0B99EB">

    	<h1>หน้าแรก</h1>

	<script type="text/javascript">
		var name ="สามิตร โกยม";
		var age = 35;
		let brand = "Samsung";
		const pi = 3.14;
		name = "Somkid";

		document.write("สวัสดีทุกท่าน<br>");
		document.write("<i>ยินดีต้อนรับ</i><br>");
		document.write("สวัสดีคุณ "+name);
		document.write("<br>โทรศัพท์ยี่ห้อ "+ brand);
		document.write("<br>PI is "+ pi+"<br>");

		var status = confirm("Are your sure to delete ?");
		document.write(status);

		var result = prompt("กรุณาป้อนชื่อ","สามิตร");
		document.write(result);

	</script>

    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<div class="box">
		<ul>
			<li><a href="">A1</a></li>
			<li><a href="">A2</a></li>
			<li><a href="">A3</a></li>
			<li><a href="">A4</a></li>
		</ul>
	</div>

	<div class="box">
		<ul>
			<li><a href="">a</a></li>
			<li><a href="">b</a></li>
			<li><a href="">c</a></li>
			<li><a href="">d</a></li>
		</ul>
	</div>


    	<?php 
    		echo "Hello ".$name;
    	 ?>
        
        <script src="assets/Frontend/js/main.js"></script>
    </body>
</html>