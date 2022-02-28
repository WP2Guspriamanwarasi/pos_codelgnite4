<?php

namespace App\Controllers;

class Stock_in extends BaseController
{
    public function index()
    {
        $data['title'] = "Stock_in";
        $data['activeMenu'] = "stock_in";

        echo view("template_header", $data);
        echo view('stock_in_view', $data);
        echo view("template_footer");

    }
}
