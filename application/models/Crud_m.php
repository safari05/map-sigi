<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_m extends CI_Model {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	function read($table, $where = null, $orderby = null, $limit = null, $page = null){
		$this->db->select("*");
		$this->db->from($table);

		if($where != null){
			$this->db->where($where);
		}

		if($orderby != null){
			$this->db->order_by($orderby);
		}

		if($limit != null && $page == null){
			$this->db->limit($limit);
		}

		if($limit != null && $page != null){
			$this->db->limit($limit, $page);
		}

		return $this->db->get();
	}

	function search($tabel, $data_format, $data_content, $state, $city, $scale, $producer, $from, $to, $limit = null, $page = null, $orderby = null){
		$this->db->select("*");
		$this->db->from($tabel);

		if($data_format != null){
			$this->db->where_in('data_format', $data_format);
		}

		if($data_content != null){
			$this->db->where_in('data_content', $data_content);
		}

		if($state != null){
			$this->db->or_where_in('state', $state);
		}

		if($city != null){
			$this->db->or_where_in('city', $city);
		}

		if($scale != null){
			$this->db->where_in('scale', $scale);
		}

		if($producer != null){
			$this->db->where('producer', $scale);
		}

		if(($from != null) && ($to != null)){
			$this->db->where("date_part('year', date_produce) >= ".$from." AND date_part('year', date_produce) <= ".$to."");
		}

		if($limit != null && $page == null){
			$this->db->limit($limit);
		}

		if($limit != null && $page != null){
			$this->db->limit($limit, $page);
		}

		if($orderby != null){
			$this->db->order_by($orderby);
		}
		
		return $this->db->get();
	}

	function search_text($table, $text, $limit = null, $page = null, $orderby = null){
		$this->db->select("*");
		$this->db->from($table);

		$this->db->where($text);

		if($limit != null && $page == null){
			$this->db->limit($limit);
		}

		if($limit != null && $page != null){
			$this->db->limit($limit, $page);
		}

		if($orderby != null){
			$this->db->order_by($orderby);
		}

		return $this->db->get();
	}

	function select($table,$where){
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	function selectstate($table,$where){
		$this->db->distinct();
		$this->db->select("state");
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	function selectcity($table,$where){
		$this->db->distinct();
		$this->db->select("city");
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	function distinct($field, $tabel){
		$this->db->distinct();
		$this->db->select($field);
		$this->db->from($tabel);
		$this->db->order_by($field,'ASC');
		return $this->db->get();
	}

	function recommended(){
		$sub_query_from = "rating = (SELECT MAX(rating) FROM public.tb_metadata)";
		$this->db->select("*");
		$this->db->from('public.tb_metadata');
		$this->db->where($sub_query_from);
		$this->db->limit(6);
		return $this->db->get();
	}

	function update($table, $data, $where){
        return $this->db->update($table, $data, $where); 
    }

    function insert($tabel, $data){
		$this->db->insert($tabel,$data);
		if ($this->db->affected_rows() > 0 ) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

    function max_id($id, $tabel){
		$this->db->select_max($id);
		$this->db->from($tabel);
		return $this->db->get();
	}

	function get_scale($id){
		$this->db->distinct();
		$this->db->select('scale');
		$this->db->from('tb_metadata');
		$this->db->where('data_format', $id);
		$this->db->order_by('scale', 'ASC');
		return $this->db->get();
	}

	function get_all_scale(){
		$this->db->distinct();
		$this->db->select('scale');
		$this->db->from('tb_metadata');
		$this->db->order_by('scale', 'ASC');
		return $this->db->get();
	}

}
