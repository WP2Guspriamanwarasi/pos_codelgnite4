<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['title'] = "Customers";
        $data['activeMenu'] = "customers";

        echo view("template/template_header", $data);
        echo view('customers_view', $data);
        echo view("template/template_footer");

    }
}
