<?php

namespace App\Controllers;

class Items extends BaseController
{
    public function index()
    {
        $data['title'] = "Items";
        $data['activeMenu'] = "items";

        echo view("template_header", $data);
        echo view('items_view', $data);
        echo view("template_footer");

    }
}
