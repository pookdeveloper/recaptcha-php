

<!DOCTYPE html>
<html>
    <head>
    	<title>Ejemplo reCAPTCHA 2.0 con PHP</title>
    	<script src='https://www.google.com/recaptcha/api.js'></script>
        <script src='https://www.google.com/recaptcha/api.js?render=6Lexh2wUAAAAALoP3f93OazoPfximbX7wcsdY334'></script>
	</head>
	<body>


	<h1>Example of recaptcha</h1>

<div class="g-recaptcha" data-sitekey="6Le2h2wUAAAAAFE-iCS44GW-80yE-pygJLRcxz_b"></div>


<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6Lexh2wUAAAAALoP3f93OazoPfximbX7wcsdY334"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>




<script>
grecaptcha.ready(function() {
grecaptcha.execute('6Lexh2wUAAAAALoP3f93OazoPfximbX7wcsdY334', {action: 'action_name'})
.then(function(token) {
});
});
</script>


    
	</body>
</html>