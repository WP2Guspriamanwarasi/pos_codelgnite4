<?php

namespace App\Controllers;

class Units extends BaseController
{
    public function index()
    {
        $data['title'] = "Units";
        $data['activeMenu'] = "units";

        echo view("template_header", $data);
        echo view('units_view', $data);
        echo view("template_footer");
    }
}
