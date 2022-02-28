<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['activeMenu'] = "dashboard";

        echo view("template/template_header", $data);
        echo view('dashboard_view', $data);
        echo view("template/template_footer");
    }
}
