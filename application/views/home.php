<?php if(isset($logged_in)&&($logged_in==TRUE)) {?>

<div class="header label-success"><h2>PhpChat</h2></div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Rooms Available</h4>
			<div>
				<div class="room_list">
					<a class="btn btn-primary btn-block btn-lg" href="<?=base_url()?>room/1">Room 1</a>
					<a class="btn btn-primary btn-block btn-lg" href="<?=base_url()?>room/2">Room 2</a>
					<a class="btn btn-primary btn-block btn-lg" href="<?=base_url()?>room/3">Room 3</a>
					<a class="btn btn-primary btn-block btn-lg" href="<?=base_url()?>room/4">Room 4</a>
					<a class="btn btn-primary btn-block btn-lg" href="<?=base_url()?>room/5">Room 5</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }else{ ?>

<div class="header label-success"><h2>PhpChat</h2></div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Welcome</h4>
			<p><a href="<?=base_url()?>login" class="btn btn-primary">Login</a></p>
			<p><a href="<?=base_url()?>signup" class="btn btn-primary">Register</a></p>
		</div>
	</div>
</div>

<?php } ?>