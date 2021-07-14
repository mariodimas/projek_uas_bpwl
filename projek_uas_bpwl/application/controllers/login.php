<?php
class login extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    function index()
    {
        if ($this->session->userdata('status')=='login') {
            redirect(base_url("admin"));
        }else {
            $this->load->view('v_login');
        }
    }
    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => ($password)
        );

        

        $cek = $this->m_login->cek_login("login",$where)->num_rows();
        if ($cek > 0) {

            if ($username == "Admin" ) {
                $data_session=array(
                    'nama' => $username,
                    'status' => "login");
                $this->session->set_userdata($data_session);
                
            redirect(base_url("admin"));

            }else {
                $data_session=array(
                    'nama' => $username,
                    'status' => "login");
                $this->session->set_userdata($data_session);
                
            redirect(base_url("user"));
                
            }
            
        }else{
            $this->load->view('v_notfound');
        }
    }

    function register(){
        $this->load->view('v_daftar');
    }

    function aksi_register(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => ($password)
        );
        $cek = $this->m_login->daftar_user("login",$data);
        if($cek > 0){
            redirect(base_url("login"));           
        }else{
            echo "Pendaftaran gagal !";
        }

    }

    function forgot(){
        if(isset($_POST['submit-step-one'])){
            $data = [
                'username' => $_POST['username']
            ];

        if($this->m_login->cek_username("login", $data)->num_rows()){
            $this->load->view('v_lupa2',$data);
        }else{
            $this->load->view('v_notfound');}
        }else if(isset($_POST['submit-step-two'])){
            $data = [
                'username' => $_POST['username'],
                'password' => ($_POST['password'])
            ];

        if($this->m_login->set_password("login", $data)){
            $this->load->view('v_lupa3');
        }}
        else{
            $this->load->view('v_lupa1');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}