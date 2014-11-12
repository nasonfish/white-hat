<html>
<head>
</head>
<body>
<h2>Welcome!</h2>
<p>Source code can be found <a href="https://github.com/nasonfish/white-hat/tree/master/sql-injection">here</a>!</p>
<hr/>
<?php
$connection = new mysqli("localhost", "myuser", "");
$connection->multi_query("INSERT INTO requests (ip, req) VALUES ('" + $_SERVER['REMOTE_ADDR'] + "', '" + $_GET['data'] + "');");
?>
<p>Your request has been recorded.</p>
</body>
</html>
