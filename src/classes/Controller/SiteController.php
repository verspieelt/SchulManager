<?php

namespace Controller;

class SiteController
{
    public function load($page, $otherData = false)
    {
        if($otherData) {
            include "src/views/".$page.".php";
        } else {
            include "src/templates/header.php";
            include "src/views/".$page.".php";
            include "src/templates/footer.php";

        }
    }
}
