<?php

require_once dirname(__FILE__).'/../core/url.php';

$LOGO_PATH =  base_url('assets/images/logo.jpg');

ob_start();
include_once dirname(__FILE__).'/../api/products/Filter.php';

$Filters = ob_get_clean();

$header = "
    <header>
        <div class=\"header flex ac sb\">
            <div class=\"logo\"><img src=\"$LOGO_PATH\" alt=\"Logo\"></div>
            <div class=\"nav\">
                <nav>
                    <ugitl class=\"flex ac\">
                        <li><span>Home</span></li>
                        <li>
                            <span>Products</span>
                            <nav class=\"sub-menu\">
                                $Filters
                            </nav>
                        </li>
                        <li><span>Contact</span></li>
                        <li><span>Location</span></li>
                    </ul>
                </nav>
            </div>
            <div class=\"icons flex ac\" style=\"gap: 10px\">
                <div><i class=\"bi bi-bag\"></i></div>
                <div class=\"esmac-d btn flex ac ctr\">Get Started</div>
            </div>
        </div>
    </header>
";

echo $header;
?>
