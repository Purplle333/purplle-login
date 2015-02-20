<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('entry');
			
			//return $query->result_array();
			return $query->result_array();
		}
	$query = $this->db->get_where('entry', array('slug' => $slug));
	return $query->row_array();
	}
	
	public function set_news()
	{
	//$this->load->helper('url');

	//$slug = url_title($this->input->post('title'), 'dash', TRUE);

	$data = array(
		'Name' => $this->input->post('name'),
		'Email' => $this->input->post('email'),
		'Password' => $this->input->post('password'),
		'Text' => $this->input->post('text')
	);

	return $this->db->insert('entry', $data);
	}
}