<?php
session_start();
echo "<p>La tua password è: {$_SESSION['psw']}</p>";