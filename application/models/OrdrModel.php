<?php defined('BASEPATH') or exit('No direct script access allowed');

class OrdrModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
        $this->tableName = 'ordr';
    }
}

/* End of file OrdrModel.php */
