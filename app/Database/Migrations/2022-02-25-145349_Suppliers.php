<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Suppliers extends Migration
{
    public function up()
    {
        $this->forge->addField([

        
            'id_suppliers'        => [
                    'type'          => 'BIGINT',
                    'constraint'    => 20,
                    'unsigned'      => true,
                    'auto_increment'=> true,

            ],
            'name'             => [
                    'type'      =>'VARCHAR',
                    'constraint'=> '100',              
            ],
            'phone'             => [
                    'type'      =>'VARCHAR',
                    'constraint'=> '100',              
            ],
            'address'             => [
                    'type'      =>'VARCHAR',
                    'constraint'=> '100',              
            ],
            'description' => [
                    'type'      => 'VARCHAR',
                    'constraint'=> '100', 
                    'null'      => true,      
            ],
            'created' => [
                    'type'      => 'DATETIME'
                    'null'      => true,      
            ],
            'updated' => [
                    'type'      => 'DATETIME'
                    'null'      => true,      
            ],
        ]);
        $this->forge->addkey('id_suppliers', true);
        $this->forge->createTable('suppliers');
        
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
