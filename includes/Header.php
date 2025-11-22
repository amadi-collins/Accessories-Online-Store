<?php

require_once dirname(__FILE__).'/../core/url.php';

$LOGO_PATH =  base_url('assets/images/logo.jpg');

$header = <<<HTML
    <header>
        <div class="header flex ac sb">
            <div class="logo"><img src="$LOGO_PATH" alt="Logo"></div>
            <div class="nav">
                <nav>
                    <ul class="flex ac">
                        <li>Home</li>
                        <li>Products</li>
                        <li>Contact</li>
                        <li>Location</li>
                    </ul>
                </nav>
            </div>
            <div class="icons flex ac" style="gap: 10px">
                <div><i class="bi bi-bag"></i></div>
                <div class="esmac-d btn flex ac ctr">Get Started</div>
            </div>
        </div>
    </header>
HTML;

echo $header;
?>