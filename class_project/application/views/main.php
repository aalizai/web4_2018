<!DOCTYPE  html>
<html>
	<header>
		<title> <?php if(isset($title)) echo $title;?></title>
	</header>
	<body>
		
		<div id="container">
			<div id="banneer">
				<img alt="Computer Science Faculty Forum"
				 src="<?php echo base_url('pictures/banner.png')?>"/>
			</div>
			<div id="contents">
				<h1><?php if(isset($page_title)) echo $page_title?></h1>
				<?php $this->load->view($page);?>
			</div>
		</div>
	</body>
</html>