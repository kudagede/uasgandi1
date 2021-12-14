<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $bajuModel = model('App\Models\BajuModel', false);
        helper('date');

        $dataBaju['dataBaju'] = $bajuModel->findAll();
        $data = [
            "judul_halaman" => "home",
            "halaman_aktif" => "index"
        ];

        echo view('/template/header.php');
        echo view('/template/body.php', $dataBaju);
        echo view('/template/footer.php');
    }
}
