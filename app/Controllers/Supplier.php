<?php

namespace App\Controllers;

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Supplier extends BaseController
{
    public function index()

    {
        $builder = $this->db->table('supplier');
        $query = $builder->get()->getResult();
        $data['supplier'] = $query;
        $data['title'] = "Supplier";
        $data['activeMenu'] = "supplier";

        echo view("template/template_header", $data);
        echo view('supplier/supplier_v_data', $data);
        echo view("template/template_footer");

    }
    public function created()
    {
        $builder = $this->db->table('supplier');
        $query = $builder->get()->getResult();
        $data['supplier'] = $query;
        $data['title'] = "Created data";
        $data['activeMenu'] = "supplier";

        echo view("template/template_header", $data);
        echo view('supplier/add');
        echo view("template/template_footer");
        
    }

    public function store()
     {
        // cara pertama
        // $data = $this-> request->getPost();
        // cara kedua
        $data = [
            'supplier_name' => $this->request->getVar('supplier_name'),
            'phone' => $this->request->getVar('phone'),
            'addr' => $this->request->getVar('addr'),
            'desc' => $this->request->getVar('desc'),
        ];
        $this->db->table('supplier')->insert($data);
        if($this->db->affectedReow() > 0) {
            return redirect()->to(site_url('supplier'))->with('success', 'Data Berhasil Disimpan');
        }
    } 

}
