<?php

require_once(__DIR__ . '/../../bootstrap.php');

if (is_post()) {
    unset($_SESSION['admin']);
    redirect('/admin/login.php');
}
