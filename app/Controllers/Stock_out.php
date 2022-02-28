<?php

namespace App\Controllers;

class Stock_out extends BaseController
{
    public function index()
    {
        $data['title'] = "Stock_out";
        $data['activeMenu'] = "stock_out";

        echo view("template_header", $data);
        echo view('stock_out_view', $data);
        echo view("template_footer");
    }
}
