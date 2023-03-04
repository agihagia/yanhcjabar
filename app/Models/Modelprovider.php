<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelprovider extends Model
{
    protected $table      = 'provider ';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_provider', 'nama_provider', 'vendor_type', 'layanan', 'alamat', 'kota', 'aktif'];

    //backend
    public function list()
    {
        return $this->table('provider')
            ->orderBy('kota', 'ASC')
            ->get()->getResultArray();
    }
}
