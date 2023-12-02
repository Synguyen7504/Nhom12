<?php
echo 'fdafasdf';
unset($_SESSION['tk']);
session_unset();
session_destroy();
header("Location: ../layout/dangnhap.php");
