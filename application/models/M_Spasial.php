<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/01/2019
 * Time: 19:13
 */

defined('BASEPATH') or exit('No direct script access allowed');

class M_Spasial extends CI_Model
{
    private $schema = 'spv.';
    private $t_fak_anggaran_lokasi = 'fak_anggaran_lokasi';
    public function get_anggaran_lokasi_jalan()
    {
        $this->db->select('fak_anggaran_lokasi_id,dim_waktu_id,dim_organisasi_id,dim_kegiatan_id,nilai_anggaran,nilai_anggaran_p,tipe_spasial,keterangan,geom_pt,ST_AsGeoJSON(geom_ln) as garis');
        $this->db->from($this->schema . $this->t_fak_anggaran_lokasi);
        $query = $this->db->get();
        return $query;
    }

    public function get_anggaran_lokasi_area()
    {
        $this->db->select('fak_anggaran_lokasi_id,dim_waktu_id,dim_organisasi_id,dim_kegiatan_id,nilai_anggaran,nilai_anggaran_p,tipe_spasial,keterangan,geom_pt,ST_AsGeoJSON(geom_ar) as area');
        $this->db->from($this->schema . $this->t_fak_anggaran_lokasi);
        $query = $this->db->get();
        return $query;
    }

    public function get_anggaran_lokasi_titik()
    {
        $this->db->select('fak_anggaran_lokasi_id,dim_waktu_id,dim_organisasi_id,dim_kegiatan_id,nilai_anggaran,nilai_anggaran_p,tipe_spasial,keterangan,geom_pt,ST_AsGeoJSON(geom_pt) as point');
        $this->db->from($this->schema . $this->t_fak_anggaran_lokasi);
        $query = $this->db->get();
        return $query;
    }
}