<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReportModel;

class Report extends BaseController
{
    protected $reportModel;

    public function __construct()
    {
        $this->reportModel = new ReportModel();
    }

    public function index()
    {
        $report = $this->reportModel->findAll();
        return view('report/index', ['report' => $report]);
    }

    public function tambah()
    {
        helper('form');

        if ($this->request->getMethod() == 'post') {
            $report = [
                'hari' => $this->request->getPost('hari'),
                'nama_user' => $this->request->getPost('nama_user'),
                'kegiatan' => $this->request->getPost('kegiatan'),
                'tantangan' => $this->request->getPost('tantangan'),
                'solusi' => $this->request->getPost('solusi'),
                'kegiatan_esok' => $this->request->getPost('kegiatan_esok'),
                'masukan' => $this->request->getPost('masukan'),
            ];

            if ($this->reportModel->insert($report)) {
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/report');
            }
        }

        return view('report/tambah');
    }

    public function delete($id)
    {
        $report = $this->reportModel->find($id);

        if (!$report) {
            // Jika data tidak ditemukan, mungkin Anda ingin menampilkan pesan error atau melakukan redirect ke halaman tertentu
            return redirect()->to('/report')->with('error', 'Data not found');
        }

        $this->reportModel->delete($id);

        // Set flash message
        session()->setFlashdata('success', 'Data berhasil dihapus');

        return redirect()->to('/report');
    }
}
