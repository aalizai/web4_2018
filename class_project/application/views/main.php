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
				 <ul>
	<li><?php echo anchor('users/lang/english','english')?></li>
	<li><?php echo anchor('users/lang/dari','Dari')?></li>
	<li><?php echo anchor('users/lang/pushto','Pushto')?></li>
</ul>
			</div>
			<div id="contents">
				<?php echo $this->lang->line('par_about');?>
				<h1><?php if(isset($page_title)) echo $page_title?></h1>
				<?php $this->load->view($page);?>
			</div>
		</div>
	</body>
</html>