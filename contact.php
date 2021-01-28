<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Lefty Lettered</title>
    <link rel="shortcut icon" href="images/logos/LL Laurel.png" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<?php include('contact-form-handler.php'); ?>
<body>
    <div class="container">
    
      <header>
        <div class="nav-wrapper">
                <div class="logo" id="logo">
                    <a href="index.html"><img src="images/logos/LL Logo.png" alt="Lefty Lettered" /></a>
                </div>
        
                <div class="navbar" id="navigation">
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                    <div class="dropdown">
                      <button class="dropbtn" onclick="window.location.href='portfolio.html';">Portfolio
                      </button>
                      <div class="dropdown-content">
                        <a href="weddings.html">Weddings</a>
                        <a href="chalkboards.html">Chalkboards</a>
                        <a href="customprojects.html">Custom Projects</a>
                      </div>
                    </div> 
                    <a href="contact.html" class="active">Contact</a>
                    <a href="javascript:void(0);" class="icon" onclick="hamburgerNav()">
                        <i class="fa fa-bars"></i>
                    </a>
                  </div>

         </div>
    </header>
    
    <div class="content-wrapper">
        <div class="content-page-blurb">
            <h1>Got an idea?</h1>
            <h3>Let's chat. Give me your info and I'll get in touch with you ASAP!</h3>
        </div>
        
    </div>

    <form class="contact" method="post" action="<?= $_SERVER['PHP_SELF'] ?>" role="form">
        <fieldset>
   
         <div class="formRow">
           <label for="name">Name*</label>
           <input name="name" id="name" type="text" value="<?= $name ?>" placeholder="first and last name" />
			<span class="error"><?= $name_error ?></span>
         </div>
   
         <div class="formRow">
           <label for="email">E-mail Address*</label>
           <input name="email" id="email" type="text" value="<?= $email ?>" placeholder="email address" />
			 <span class="error"><?= $email_error ?></span>
         </div>
   
         <div class="formRow">
           <label for="phone">Phone Number*</label>
           <input name="phone" id="phone" type="text" value="<?= $phone ?>" placeholder="phone number" />
			 <span class="error"><?= $phone_error ?></span>
         </div>
   
         <div class="formRow">
           <label for="message">What do you have in mind?</label>
           <textarea name="message" id="message" type="text" value="<?= $message ?>"> </textarea>
         </div>
   
       </fieldset>
   
       <div id="button">
         <input type="submit" value="Send Message"/>
       </div>
		<div class="success"><?= $success; ?></div>
   
     </form>

     <footer>
      <div class="footer-header">
          <h2>Lefty Lettered</h2> 
      </div>
      <div class="three-column-footer">
          <div class="column">
              <h3>Contact Me</h3> 
              Phone: <a href="tel:5735613338"></a>573-561-3338 <br>
              Email: <a href="mailto:bmbequette@gmail.com">bmbequette@gmail.com</a>
              
          </div>

          <div class="column">
              <img src="images/logos/LL Laurel-white.png" alt="Lefty Lettered" />
          </div>

          <div class="column">
              <h3>Follow Me</h3> 
              Instagram: <a href="https://www.instagram.com/brereuther/"> @brereuther </a>
          </div>
      </div>
          
      <div class="footer-links">
          Saint Louis, MO | &copy; Breanna Bequette 2020 | <a href="about.html">Privacy Policy</a> | <a href="about.html">Sitemap</a>
      </div>
   	</footer>
    
    
    </div>

  <script src="app.js"></script>

</body>
</html>
