<header>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Meow App!</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav navbar-right">
					<li><a href=""><i class="fa fa-home"></i></a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="sign-up.php">Sign Up</a></li>
					<li><a href="https://github.com/rlewis2892/meow-app-2" target="_blank">GitHub</a></li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</header>

<main class="bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Sign Up Here</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<p>Sniff other cat's butt and hang jaw half open thereafter. Sun bathe soft kitty warm kitty little ball of furr stretch, or lick the curtain just to be annoying for pooping rainbow while flying in a toasted bread costume in space sit in box for eats owners hair then claws head.</p>
			</div>
			<div class="col-md-6">
				<!--Begin Contact Form-->
				<form id="contact-form">
					<div class="form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>
					</div>
					<div class="form-group">
						<label for="email">Email <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="pass">Password <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</div>
							<input type="password" class="form-control" id="pass" name="pass" placeholder="Name">
						</div>
					</div>

					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</form>

				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>