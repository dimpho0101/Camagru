<?php

echo $_POST['name'];
echo "<h1>Redirecting you to your dashboard</h1>";
header('Refresh:0; url=dashboard.html');