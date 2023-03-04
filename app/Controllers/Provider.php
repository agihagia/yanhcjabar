<?php

namespace App\Controllers;

class Provider extends BaseController
{
    public function index()
    {
        $konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		
        $data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
        return view('front/provider/index', $data);
    }

    public function getdata()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'provider',
                'list' => $this->provider->list()


            ];
            $msg = [
                'data' => view('front/provider/list', $data)
            ];
            echo json_encode($msg);
        }
    }

}
