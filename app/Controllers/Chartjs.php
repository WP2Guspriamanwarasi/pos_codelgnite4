<?php

namespace App\Controllers;

class Chartjs extends BaseController
{
    public function index()
    {
        $data['title'] = "Chart JS";
        $data['activeMenu'] = "chartjs";

        echo view('template/template_header', $data);
        echo view('chartjs_view', $data);
        echo view("template/template_footer");
    }
}
