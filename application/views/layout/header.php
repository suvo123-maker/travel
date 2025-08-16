<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assetes/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('assetes/media.css');?>">
    <link rel="stylesheet" href="<?= base_url('layout/about.php');?>">
    <link rel="stylesheet" href="media.css">
    <title>Travel agency website</title>
</head>

<body>

<header>
        <nav>
            <h4>Wish Trip</h4>
            <ul id="menu_bx">

                <a href="<?php echo base_url('Community'); ?>">Community</a>
                <a href="<?php echo base_url('Specialdeals'); ?>">Special Deals</a>
                <a href="<?php echo base_url('Aboutus'); ?>">About Us</a>
                

               <?php
                if (empty($this->session->userdata('userdata')['name'])) {
                    echo '
                    <li class="li_btn"><a href="#" id="loginBtn">Login</a></li>
                    <li class="li_btn"><a href="#" id="signupBtn">Register</a></li>
                    '; 
                } else {
                    echo '
                    <li><a href="#" id="userStatus">
                    <i class="bi bi-person" style="margin-right:5px;"></i> '

                    . $this->session->userdata('userdata')['name']  .

                    '
                    </a></li><li class="li_btn"><a href="#" id="logoutBtn">Logout</a></li>
                    ';
                }
                
                ?>
            </ul>
            <i class="bi bi-three-dots"></i>
        </nav>