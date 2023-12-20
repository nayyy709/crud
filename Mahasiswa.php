<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mhs_model = new Mahasiswa_model();
        $all_data_mhs = $mhs_model->findAll();

        return view('mahasiswa', ['all_data_mhs' => $all_data_mhs]);
    }
    public function add_data_mhs()
    {
        return view('add_data_mhs');
    }
    public function proses_add_mhs()
    {
        $mhs_model = new Mahasiswa_model();
        $mhs_model->insert($this->request->getPost());
        return redirect()->to(base_url('mahasiswa'));
    }
    public function edit_data_mhs($id = false)
    {
        $mhs_model = new Mahasiswa_model();
        $data_mhs = $mhs_model->find($id);
        return view('edit_data_mhs', ['data_mhs' => $data_mhs]);
    }
    public function proses_edit_mhs()
    {
        $mhs_model = new Mahasiswa_model();
        $mhs_model->update($this->request->getPost('id_mhs'), $this->request->getPost());
        return redirect()->to(base_url('mahasiswa'));
    }
    public function delete_data_mhs($id = false)
    {
        $mhs_model = new Mahasiswa_model();
        $mhs_model->delete($id);
        return redirect()->to(base_url('mahasiswa'));
    }
}
