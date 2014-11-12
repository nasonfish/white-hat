<html>
<head>
</head>
<body>
  <h2>Welcome!</h2>
  <p>Source code can be found <a href="https://github.com/nasonfish/white-hat/tree/master/webpass" target="_blank">here</a>!</p>
  <hr/>
  <?php if(trim(file_get_contents("pass.txt")) === $_GET["password"]){ ?>
    <p>Welcome to the admin panel for the web application.</p>
    <p>Printing secret data:</p>
    <pre>I hear that computer programming is dangerous. People could get ahold of your passwords.</pre>
  <?php } else { ?>
    <p>Welcome, normal user. You have no access to anything. Please go away.</p>
  <?php } ?>
</body>
</html>
