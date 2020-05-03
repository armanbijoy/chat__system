<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Simple Chat System || Arman Bijoy</a>
		</div>
		
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-list"></span> Chat Rooms</a></li>
			<li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Users</a></li>
			<li><a href="https://arman-videochat.herokuapp.com/"><span class="glyphicon glyphicon-camera"></span> Live Stream</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Update Photo</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>