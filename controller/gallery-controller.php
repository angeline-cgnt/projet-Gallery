<?php
session_start();
$login = $_SESSION['login'];

$files = glob("../img/$login*.*");