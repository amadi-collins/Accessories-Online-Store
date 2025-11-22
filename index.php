<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once dirname(__FILE__).'/includes/Link.php';?>
    <?php require_once dirname(__FILE__).'/core/url.php';?>
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/core.css');?>">
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/header.css');?>">
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/main.css');?>">
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/banner.css');?>">
    <link rel="stylesheet" href="<?php  echo base_url('src/styles/categories.css');?>">
    <title>ESMAC Communications</title>
</head>
<body>
    <?php require_once dirname(__FILE__).'/includes/Header.php';?>
    <main>
        <?php require_once dirname(__FILE__).'/includes/Banner.php';?>
       <!-- <section class="categories">
            <div class="flex sa">
               <div class="flex ac">
                <ul class="flex b">
                    <li>New</li>
                    <li>Ex-UK/Ex-US</li>
                    <li>Latest</li>
                    <li>Laptops</li>
                </ul>
               </div>
                <div class="search-bar">
                    <form action="" id="search_products" class="flex ac">
                        <input type="search" placeholder="Search your favourite smartphone here" required>
                        <button class="btn esmac flex ac ctr">SEARCH</button>
                    </form>
                </div>
            </div>
        </section>-->
        <br>
        <section class="search flex ac ctr col">
            <div class="container flex ac ctr col">
            <div class="h flex col ac ctr t-ctr">
                <h2>Find What You Are Looking For</h2>
                <p>Search across our latest arrivals, trusted brands, and exclusive deals.</p>
            </div>
            <div class="form flex ac ctr">
                <input type="search" placeholder="Search smarter, Shop better">
                <div class="btn">Search</div>
            </div>
            </div>
        </section>
        <br>
        <section class="our-products flex ac ctr" style="gap: 15px">
                <div class="ex-uk flex ac">
                    <div>
                        <h4>Ex-UK Flagships</h4>
                        <p>Upgrade to affordable high performance phones.</p>
                    </div>
                    <div><img src="<?php  echo base_url('assets/images/Samsung S25 Ultra.jpeg');?>" alt=""></div>
                </div>
                <div class="cards flex">
                    <div class="card">
                        <div>Brand New</div>
                        <div><img src="<?php  echo base_url('assets/images/The Xiaomi 12 Pro _ 5G in Noir Black is a powerful….jpeg');?>" alt=""></div>
                    </div>
                    <div class="card">
                        <div>Ex-UK/US</div>
                        <div><img src="<?php  echo base_url('assets/images/Descubra quais smartphones da empresa oferecem a….jpeg');?>" alt=""></div>
                    </div>
                    <div class="card">
                        <div>Lipa Pole Pole</div>
                        <div><img src="<?php  echo base_url('assets/images/Smartphone LG.jpeg');?>" alt=""></div>
                    </div>
                    <div class="card">
                        <div>Iphone</div>
                        <div><img src="<?php  echo base_url('assets/images/Get a sneak peek into the upcoming iPhone 15 Plus….jpeg');?>" alt=""></div>
                    </div>
                    <div class="card">
                        <div>Samsung</div>
                        <div><img src="<?php  echo base_url('assets/images/Japanese Multinational Corporation Sharp jumps….jpeg');?>" alt=""></div>
                    </div>
                    <div class="card">
                        <div>Others</div>
                        <div><img src="<?php  echo base_url('assets/images/Xiaomi has officially introduced its latest….jpeg');?>" alt=""></div>
                    </div>
                </div>
            </section>

        <section class="explore t-ctr">
            <div>
                <div class="l b t-ctr flex ac ctr col">
                <span>Explore <script>const Month = ["January","February","March","April","May","June","July","August","Sepetember","October","November","December"];const currentMonth = new Date().getMonth();console.log(currentMonth);document.write(Month[currentMonth])</script> Deals</span>
            </div>
            <p>Every drop is deliberate. Every price, a decision</p>
            </div>
        </section>
        
            <section class="products flex ac ctr">
                <section class="container">
                    <div class="product">
                    <div class="img"><img src="<?php  echo base_url('assets/images/Samsung S25 Ultra.jpeg');?>" alt=""></div>
                    <div class="desc">
                        <div><h3>Samsung Galaxy S21+ 5G</h3></div>
                        <div class="spec flex ac ctr" style="font-size: 13px">
                            <div>8GB</div>
                            <div>|</div>
                            <div>256GB</div>
                        </div>
                        <div class="btn flex ac ctr">Buy Now</div>
                    </div>
                </div>
                </section>
            </section>

    </main>
</body>
<script type="module" src="<?php  echo base_url('/src/apps/main.js');?>"></script>
</html>