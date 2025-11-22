<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once dirname(__FILE__).'/../../core/url.php';?>
    <?php require_once dirname(__FILE__).'/../../includes/Link.php';?>
    <?php require_once dirname(__FILE__).'/../../includes/Header.php';?>
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/core.css');?>">
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/login.css');?>">
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/header.css');?>">

    
    <title>Log-in To Continue</title>
</head>
<body class="flex  col ac ctr" style="width: 100%;height: 100%;font-family: 'Poppins'">
    
    <main>
        <!--<style>
            .header .nav, .header i, .header .btn{display: none;}
        </style>-->
        <?php base_url('includes/Header.php')?>
        <section class="wrapper flex ac ctr">
            <div class="container flex ac ctr">
                <div class="img flex ac ctr t-ctr col">
                    <img src="<?php echo base_url('assets/images/login-vector.jpg'); ?>" alt="Smartphone">
                </div>
                <div class="form flex ac ctr col">
                     <div class="text flex ac ctr col t-ctr">
                        <h2>Welcome Back</h2>
                        <p>Your trusted destination for quality devices, seamless service, and smart shopping.</p>
                    </div>
                    <br>
                    <form  id="login">
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" placeholder="" name="email" id="email">
                        </div>
                        <div class="input">
                            <label for="password">Password</label>
                            <input type="password" placeholder="" name="password" id="password">
                        </div>
                        <p style="text-align: right;font-size: 13px"><a href="#">Forgot password?</a></p>
                        <br>
                        <div class="flex ac ctr t-ctr" ><button type="submit" class="btn flex ac ctr" style="color: #fff;background: #000;width: 250px">Login</button></div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer" style="font-size: 13px;">
            <div class="flex ac ctr t-ctr">All Rights Reserved &copy; <script>document.write(new Date().getFullYear())</script></div>
        </section>
    </footer>
</body>
<script src="<?php echo base_url('src/apps/auth/login.js'); ?>"></script>
</html>