<html>
<head>
</head>
<body>
  <?php if(file_get_contents("pass.txt") == $_GET["password"]){ ?>
    <p>Welcome to the admin panel for the web application.</p>
    <p>Printing secret data:</p>
    <pre>I hear that computer programming is dangerous. People could get ahold of your passwords.</pre>
  <?php } else { ?>
    <p>Welcome, normal user. You have no access to anything. Please go away.</p>
  <?php } ?>
</body>
</html>
