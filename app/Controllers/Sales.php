<?php

namespace App\Controllers;

class Sales extends BaseController
{
    public function index()
    {
        $data['title'] = "Sales";
        $data['activeMenu'] = "sales";

        echo view("template_header", $data);
        echo view('sales_view', $data);
        echo view("template_footer");

    }
}
