<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'info@rkbuilt.co.uk';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>RK Carpentry & Construction</title>
    <meta charset="utf-8" />
    <meta
      name="google-site-verification"
      content="YtDnJf2xZ9S0TzugbpKUfxMDVNABjuOh1v8Qw06qeTc"
    />
    <meta
      name="description"
      content="RK Carpentry & Construction, A small business operating within Cambridgeshire providing a wide range of building services 
    from small projects to extensions, bathroom refurbishments and kitchen fittings.
	High standards and reliable personal service. Cambridge 2020. "
    />
    <meta
      name="keywords"
      content="RK, Construction, rkbuilt ,Carpentry, Cambridge, Cambridgeshire, Kitchen, Extension, Bathroom"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cantarell:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <!-- Wrapper -->
    <div class="wrapper">
      <div class="background">
        <h1>Welcome</h1>
      </div>
      <!-- Navbar -->
      <div class="nav" id="nav">
        <div id="navbar-left">
          <a href="#"
            ><img
              src="../img/logo.png"
              alt="RK Logo"
              height="auto"
              width="80px"
              id="logo"
          /></a>
          <?php if($msg != ''): ?>
    		    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	    <?php endif; ?>
        </div>
        <div class="navbar-right" id="navbar-right">
          <a class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          <a href="#header">Projects</a>
          <a href="#services">Services</a>
          <a href="#contact">Contact</a>
        </div>
      </div>

      <!-- Header/Home -->
      <div id="header">
        <h2>RK <br />Carpentry & Construction</h2>
        <hr />
        <p>
          A small business operating within Cambridgeshire providing a wide
          range of building services from small projects to extensions, bathroom
          refurbishments and kitchen fittings. High standards and reliable
          personal service.
        </p>
        <hr />
      </div>
      <!-- Projects -->
      <div class="projects" id="projects">
        <h3>Projects</h3>
        <div class="project-item-container">
          <div class="project-item">
            <h4>Garden Office</h4>
            <img src="../img/project4.jpg" alt="Garden Office" />
          </div>
          <div class="project-item">
            <h4>Garden Conversion</h4>
            <img src="../img/project2.jpg" alt="Garden Conversion" />
          </div>
          <div class="project-item">
            <h4>Extension</h4>
            <img src="../img/Project3.jpg" alt="Extension" />
          </div>
          <p>For more information and pictures please visit our Favebook page!</p>
        </div>
        
      </div>
      <hr />
      <!-- Services -->
      <div class="services" id="services">
        <h3>Services</h3>
        <div class="services-item-container">
          <div class="services-item">
            <h4>Planning</h4>
            
            <img src="../img/service1.jpg" alt="" />
            <p>
              From start to finish we plan your next project to make your dream
              come true
            </p>
          </div>
          <div class="services-item">
            <h4>Outdoor converisons</h4>
            <img src="../img/service2.jpg" alt="" />
            <p>
              Garden, front yard and all around the house conversions tome make
              give your home a proper look.
            </p>
          </div>
          <div class="services-item">
            <h4>Building works</h4>
            <img src="../img/service3.jpg" alt="" />
            <p>
              Building repairs, fixing anything broken so you don't have to
              worry for a long time
            </p>
          </div>
          <div class="services-item">
            <h4>Tiling, bathroom redesign</h4>
            <img src="../img/service4.jpg" alt="" />
            <p>
              Choose your custom materials from tiles and appliances, our expert
              is always there to help you.
            </p>
          </div>
        </div>
      </div>
      <hr />
      <!-- Contact -->
      <div class="contact" id="contact">
        <h3>Contact</h3>
        <p>Feel free to contact us to discuss your next project through telephone, e-mail or just send us a message down below.</p>
        <p>Telephone: <br />
          07837054702
        </p>
        <p>
          E-mail: <br />
          rk.carpentry.construction@gmail.com</br><a href="https://www.facebook.com/R-K-Construction-113041873781510/" class="facebook"><img alt="Facebook" src="../img/facebook.jpg" width="70px" height="70px"></a>
        </p>
        
        <div class="contact-form">
          <?php if($msg != ''): ?>
    		    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    	    <?php endif; ?>
    	    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form">
            <div class="form-item">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-item">
              <label>E-mail</label>
              <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-item">
              <label>Message</label>
              <textarea type="text" name="message" class="form-control-message" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <label> By pressing 'Submit' I understand my personal data will be sent to RK Carpentry & Construction,so they can reply to my enquiry.</label><br>
            <button type="submit" name="submit" class="submit-btn">Submit</button>
            
         </form>
        </div>
      </div>
      <!-- Footer -->
      
      <div id="footer">
        <p>R.K. Copyright &#169 Design: andro</p>
      </div>
    </div>
    <script src="../js/main.js"></script>
  </body>
</html>
