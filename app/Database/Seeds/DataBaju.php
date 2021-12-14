<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBaju extends Seeder
{
    public function run()
    {
        $data = [
            'baju_title'    => 'Batik Pria',
            'baju_description' => 'Baju Bagus',
            'baju_harga' => '50000'
        ];

        // Simple Queries
        //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('baju')->insert($data);
    }
}
