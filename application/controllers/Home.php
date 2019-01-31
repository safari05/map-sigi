<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/01/2019
 * Time: 19:13
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Spasial');
    }
    public function index()
    {

        $this->template->load('template', 'map');
    }

    public function getDataMap()
    {
        $table = $this->input->get('table');
        $fields = $this->input->get('fields');

        //turn fields array into formatted string
        $fieldstr = "";
        foreach ($fields as $i => $field) {
            $fieldstr = $fieldstr . "l.$field, ";
        }
        //get the geometry as geojson in WGS84
        $fieldstr = $fieldstr . "ST_AsGeoJSON(ST_Transform(l.geom_ln geometry,4326))";
        //create basic sql statement
        $sql = "SELECT $fieldstr FROM $table l";
        echo $sql;

    }

    public function getAnggaranLokasiJalan()
    {
        $data = $this->M_Spasial->get_anggaran_lokasi_jalan()->result();
        // inisialisasi empty array
        $features = [];
        foreach ($data as $row) {
            unset($row->geom_ln);
            $geometry_garis = $row->garis = json_decode($row->garis);
            unset($row->garis);
            $feature = ["type" => "Feature", "geometry" => $geometry_garis, "properties" => $row];
            array_push($features, $feature);
        }
        $featureCollection = ["type" => "FeatureCollection", "features" => $features];
        echo json_encode($featureCollection);
    }

    public function getAnggaranLokasiArea()
    {
        $data = $this->M_Spasial->get_anggaran_lokasi_area()->result();
        // inisialisasi empty array
        $features = [];
        foreach ($data as $row) {
            unset($row->geom_ln);
            $geometry_garis = $row->area = json_decode($row->area);
            unset($row->garis);
            $feature = ["type" => "Feature", "geometry" => $geometry_garis, "properties" => $row];
            array_push($features, $feature);
        }
        $featureCollection = ["type" => "FeatureCollection", "features" => $features];
        echo json_encode($featureCollection);
    }
    public function getAnggaranLokasiTitik()
    {
        $data = $this->M_Spasial->get_anggaran_lokasi_titik()->result();
        // inisialisasi empty array
        $features = [];
        foreach ($data as $row) {
            unset($row->geom_ln);
            $geometry_garis = $row->point = json_decode($row->point);
            unset($row->garis);
            $feature = ["type" => "Feature", "geometry" => $geometry_garis, "properties" => $row];
            array_push($features, $feature);
        }
        $featureCollection = ["type" => "FeatureCollection", "features" => $features];
        echo json_encode($featureCollection);
    }
}