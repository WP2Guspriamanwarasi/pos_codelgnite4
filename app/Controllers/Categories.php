<?php

namespace App\Controllers;

class Categories extends BaseController
{
    public function index()
    {
        $data['title'] = "Categories";
        $data['activeMenu'] = "categories";

        echo view("template/template_header", $data);
        echo view('categories_view', $data);
        echo view("template/template_footer");

    }
}
