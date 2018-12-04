
<head>
	<title>Koplak Food</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai Aldefa, <?php echo $this-> session->userdata("nama"); ?> </h2>
	<a href="<?php echo base_url('login/logout'); ?>"> 
	<button>Logout</button></a>
</body>
