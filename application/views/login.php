<div class="header label-success"><h2>PhpChat</h2></div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4 class="">Login Here</h4>
		</div>
		<div class="col-md-6">
			<form action="<?=base_url()?>chat" method="post">
			  	<div class="form-group">
			    	<label for="exampleInputEmail1">Email address</label>
			    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleInputPassword1">Password</label>
			    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-md-6">
			<p class="padding-10-ver">If you are a new User, <a href="<?=base_url()?>signup">Register Here</a></p>
			<p>Go Back to <a href="<?=base_url()?>">Home</a></p>
		</div>
	</div>
</div>

