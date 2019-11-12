<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_Controller extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('commonChild_model');
    }

	public function index()
	{
		$this->form_validation->set_rules('string1', 'String1', 'max_length[5000]|callback_uppercase_Check',
            array(
                'max_length' => 'La cadena no debe superar los 5000 caracteres.')
        );
         $this->form_validation->set_rules('string2', 'String2', 'max_length[5000]|callback_uppercase_Check',
            array(
                'max_length' => 'La cadena no debe superar los 5000 caracteres.')
        );

        $string1 = $this->input->post('string1');
        $string2 = $this->input->post('string2');

        if ($this->form_validation->run() == false) {
            $result['result'] = null;
            $this->load->view('page', $result); 
        } else {
            $result['result'] = $this->commonChild_model->commonChildFunction($string1, $string2);
            $this->load->view('page', $result);   
        }
	}

    public function uppercase_Check($string)
    {    
        if ($string != strtoupper($string)) {                
            $this->form_validation->set_message('uppercase_Check', 'Debe ingresar en MAYUSCULAS');
            return false;
        } else {
            return true;
        }
    }  
}
