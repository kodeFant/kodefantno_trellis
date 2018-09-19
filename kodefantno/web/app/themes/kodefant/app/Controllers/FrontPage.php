<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function frontpage_header_tittel()
    {
        return get_field('frontpage_header_tittel');
    }
    public function frontpage_header_text()
    {
        return get_field('frontpage_header_text');
    }
}
