	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">TECH<span> PRINT</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <?php
	          	if(!(isset($_SESSION['id_user']))) 
	          	{
	          		echo'
	          			 <li class="nav-item">
	          			 	<a href="login.php" class="nav-link">
	          			 		Login
	          			 	</a>
	          			 </li>
	          		';
	          	}
	          	else
	          	{
	          		echo'
	          			 <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          '.strtoupper($_SESSION['nom']).'
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item" href="profile.php">Profile</a>
					          <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>
					        </div>
					      </li>
	          		';

	          	}
	          ?>

	        </ul>
	      </div>
	    </div>
	  </nav>