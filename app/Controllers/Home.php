<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$staf = $this->staf->selectCount('staf_id')->first();
		$guru = $this->guru->selectCount('guru_id')->first();
		$siswa = $this->siswa->selectCount('siswa_id')->first();

		$pegawai = $this->pegawai->select('jml_pegawai')->orderBy('tgl_insert', 'DESC')->limit(1)->first();
		$pensiun = $this->pegawai->select('jml_pensiun')->orderBy('tgl_insert', 'DESC')->limit(1)->first();
		$pegawaikeluarga = $this->pegawai->select('jml_kpegawai')->orderBy('tgl_insert', 'DESC')->limit(1)->first();
		$pensiunkeluarga = $this->pegawai->select('jml_kpensiun')->orderBy('tgl_insert', 'DESC')->limit(1)->first();

		$kelas = $this->kelas->selectCount('kelas_id')->first();
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$berita = $this->berita->published();
		$list_staf = $this->staf->orderBy('staf_id')->get()->getResultArray();
		$gallery = $this->gallery->list();
		$kategori = $this->kategori->list();
		$data = [
			'title' => 'YAN HC JABAR',
			'pegawai' => $pegawai,
			'pegawaikeluarga' => $pegawaikeluarga,
			'pensiun' => $pensiun,
			'pensiunkeluarga' => $pensiunkeluarga,
			'kelas' => $kelas,
			'konfigurasi' => $konfigurasi,
			'berita' => $berita,
			'list_staf' => $list_staf,
			'gallery' => $gallery,
			'kategori' => $kategori,
		];
		return view('front/layout/menu', $data);
	}

	public function bpjs()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/bpjs', $data);
	}

	public function bpjstk()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/bpjstk', $data);
	}

	public function reskeskacamata()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/reskeskacamata', $data);
	}

	public function timhc()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/timhc', $data);
	}

	public function reskeskesehatan()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/reskeskesehatan', $data);
	}

	public function syaratpensiun()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/syaratpensiun', $data);
	}

	public function healthtalk()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/agenda/healthtalk', $data);
	}

	public function mcu()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/agenda/mcu', $data);
	}
	
	public function vaksin()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/agenda/vaksin', $data);
	}

	public function tanggungan()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/tanggungan', $data);
	}

	public function absensi()
	{
		
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/info/absensi', $data);
	}

	public function detail_berita($slug_berita = null)
	{
		if (!isset($slug_berita)) return redirect()->to('/home#berita');
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$berita = $this->berita->detail_berita($slug_berita);
		$kategori = $this->kategori->list();
		if ($berita) {
			$data = [
				'title'  => 'Berita - ' . $berita->judul_berita,
				'konfigurasi' => $konfigurasi,
				'berita' => $berita,
				'kategori' => $kategori,
			];
			return view('front/berita/detail', $data);
		} else {
			return redirect()->to('/home#berita');
		}
	}

	public function detail_gallery($id = null)
	{
		if (!isset($id)) return redirect()->to('/home#gallery');
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$gallery = $this->gallery->detail_gallery($id);
		$list_foto = $this->foto->detail_foto($id);
		$kategori = $this->kategori->list();
		if ($gallery) {
			$data = [
				'title'  => 'Gallery - ' . $gallery->nama_gallery,
				'konfigurasi' => $konfigurasi,
				'gallery' => $gallery,
				'list_foto' => $list_foto,
				'kategori' => $kategori,
			];
			return view('front/gallery/detail', $data);
		} else {
			return redirect()->to('/home#gallery');
		}
	}

	public function cekspp()
	{
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$kategori = $this->kategori->list();
		$data = [
			'title' => 'Cek SPP',
			'konfigurasi' => $konfigurasi,
			'kategori' => $kategori,
		];
		return view('front/spp/list', $data);
	}

	public function searchspp()
	{
		$keyword  = $this->request->getVar('keyword');
		if (!isset($keyword)) return redirect()->to('cekspp');
		$check = $this->spp->get_spp_keyword($keyword);
		if ($check) {

			$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
			$kategori = $this->kategori->list();
			$data = [
				'title' => 'Cek SPP',
				'konfigurasi' => $konfigurasi,
				'kategori' => $kategori,
				'spp'	=> $check,
			];
			return view('front/spp/search', $data);
		} else {
			session()->setFlashdata('alert', 'Nis yang anda masukkan tidak terdaftar!');
			return redirect()->to('cekspp');
		}
	}

	public function kelulusan()
	{
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$kategori = $this->kategori->list();
		$data = [
			'title' => 'Pengumuman Kelulusan',
			'konfigurasi' => $konfigurasi,
			'kategori' => $kategori,
		];
		return view('front/kelulusan/list', $data);
	}

	public function searchkelulusan()
	{
		$keyword  = $this->request->getVar('keyword');
		if (!isset($keyword)) return redirect()->to('kelulusan');
		$check = $this->kelulusan->get_kelulusan_keyword($keyword);
		if ($check) {
			$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
			$kategori = $this->kategori->list();
			$data = [
				'title' => 'Pengumuman Kelulusan',
				'konfigurasi' => $konfigurasi,
				'kategori' => $kategori,
				'kelulusan'	=> $check,
			];
			return view('front/kelulusan/search', $data);
		} else {
			session()->setFlashdata('alert', 'No. ujian yang anda masukkan tidak terdaftar!');
			return redirect()->to('kelulusan');
		}
	}
	
	public function premi()
	{
		$konfigurasi = $this->konfigurasi->orderBy('konfigurasi_id')->first();
		$data = [
			'title' => 'YAN HC JABAR',
			'konfigurasi' => $konfigurasi,
		];
		return view('front/premi/premi', $data);
	}

	public function premisubmit()
    {
		if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'harikerjapln' => [
                    'label' => 'harikerjapln',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'koefisien' => [
                    'label' => 'koefisien',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'harikerja' => [
                    'label' => 'harikerja',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'harilibur' => [
                    'label' => 'harilibur',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'hariagama' => [
                    'label' => 'hariagama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'harikerja2' => [
                    'label' => 'harikerja2',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'harilibur2' => [
                    'label' => 'harilibur2',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'hariagama2' => [
                    'label' => 'hariagama2',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'grade'      => $validation->getError('grade'),
                        'tarif'     => $validation->getError('tarif'),
                        'harikerjapln'          => $validation->getError('harikerjapln'),
                        'koefisien'          => $validation->getError('koefisien'),
                        'harikerja'     => $validation->getError('harikerja'),
                        'harilibur'      => $validation->getError('harilibur'),
                        'hariagama'      => $validation->getError('hariagama'),
						'harikerja2'     => $validation->getError('harikerja2'),
                        'harilibur2'      => $validation->getError('harilibur2'),
                        'hariagama2'      => $validation->getError('hariagama2'),
                    ]
                ];
            } else {
                /*$simpandata = [
                    'grade'     => $this->request->getVar('grade'),
                    'tarif'    => $this->request->getVar('tarif'),
                    'harikerjapln'         => $this->request->getVar('harikerjapln'),
                    'koefisien'         => $this->request->getVar('koefisien'),
                    'harikerja'    => $this->request->getVar('harikerja'),
                    'harilibur'     => $this->request->getVar('harilibur'),
                    'hariagama'     => $this->request->getVar('hariagama'),
                ];*/
				$hitung_kerja = ($this->request->getVar('harikerja')+$this->request->getVar('harikerja2')) * 1;
				$hitung_libur = ($this->request->getVar('harilibur')+$this->request->getVar('harilibur2')) * 1.5;
				$hitung_agama = ($this->request->getVar('hariagama')+$this->request->getVar('hariagama2'))* 4;

				$total = ($hitung_kerja + $hitung_libur + $hitung_agama);
				//log_message('error',$total);

				$realisasi = $total/$this->request->getVar('harikerjapln');
				//$tarif = $this->request->getVar('tarif');
				$rp_realisasi= round(($realisasi * $this->request->getVar('koefisien')),2);

				$cekhariganti = $this->request->getVar('harikerja2')+$this->request->getVar('harilibur2')+$this->request->getVar('hariagama2');
				$cekhariagama = $this->request->getVar('hariagama')+$this->request->getVar('hariagama2');

				if ($cekhariagama >= 2) {
					$koefkali='1.5';
				} else {
					$koefkali='1.3';
				}

				if($rp_realisasi > $koefkali) {
					$rp_realisasi_max=$koefkali;
				} else {
					$rp_realisasi_max = $rp_realisasi;
				}

				if ($cekhariganti > 0) {
					$rp_realisasi_max=$rp_realisasi;
				}

				//$persen = round($rp_realisasi/ $tarif * 100).'%';

				//log_message('error','realisasi : '.$realisasi);
				//log_message('error','tarif : '.$tarif);
				//log_message('error','rp_realiasi : '.$rp_realisasi);

                $konfigurasi_id = $this->request->getVar('konfigurasi_id');
                //$this->konfigurasi->update($konfigurasi_id, $simpandata);
                $msg = [
                    'sukses' => number_format($rp_realisasi_max,2),
					'realisasi_hari' => '(('.$this->request->getVar('harikerja').'+'.$this->request->getVar('harikerja2').') X 1) + (('.$this->request->getVar('harilibur').'+'.$this->request->getVar('harilibur2').') X 1,5) + (('.$this->request->getVar('hariagama').'+'.$this->request->getVar('hariagama').') X 4) = '.$total,
					'realisasi' => '('.$total.'/'.$this->request->getVar('harikerjapln').') X '.$this->request->getVar('koefisien').' = '. number_format($rp_realisasi,2),
					'rp_realisasi' => $rp_realisasi,
					'rp_realisasi_max' => $rp_realisasi_max
					
                ];
				//$a = 'DATA||' . $kode_hc . '||' . $tgl_tagihan . '||' . $filter_kode_vendor . '||' . $filter_nama_vendor . '||' . $filter_no_tagihan . '||' . $filter_kode_vendor_sap . '||' . $aktif;
		        //$this->session->set_flashdata('data', $a);
            }
            echo json_encode($msg);
        }
    }
}
