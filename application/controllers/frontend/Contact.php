<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->data['per_page'] = 5;
        $this->row_setting = $this->config_model->get_by(1);
    }

    function add() {
    	$this->data['row'] = $this->contact_model->defaut_value();
        $condition_contact = array('select' => 'content, name',
                        'where' => array('type' => 'contact'),
                    );
        $this->data['rows_contact'] = $this->single_post_model->get_by($condition_contact);
        
    	if($this->input->post('submit')) {
    		$post = $this->input->post();
            $this->form_validation->set_rules('name','Tên','required');
    		$this->form_validation->set_rules('title','Tiêu đề ','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
    		$this->form_validation->set_rules('phone','Số điện thoại','required|min_length[10]');
    		if ($this->form_validation->run() === TRUE) {
    			$success = TRUE;
                 // print_r($_FILES);die;
                if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {
                    
                    $this->load->library('image_mylib');
                    $file = $this->image_mylib->upload_one_file('file', 'contact','jpg|png|gif|jpeg|JPG|PNG|GIF|JPEG|pdf|PDF|xlsx|XLSX|doc|DOCX|DOCX');
                    
                    if (isset($file['error'])) {
                        $this->data['image_error'] = $file['error'];
                        $success = FALSE;
                    } else {
                        $post['file'] = $file['file_name'];
                    }
                }
                $post['file'] = isset($post['file']) ? $post['file'] : "";
                if($this->input->post('id')) {
                    $post['id_product'] = $this->input->post('id');
                }
    			// **** noi dung mail ****
                $body = '<table border="1" width="100%" style="border-collapse: collapse">';
                $body .= '
                    <tr> 
                        <th colspan="2"><h2>'.$post['title'].'</h2></th>
                    </tr>
                    <tr>
                        <th colspan="2">Thư liên hệ từ website <a href="'.base_url().'">www.'.base_url().'</a></th>
                    </tr>
                    <tr>
                        <th colspan="2">&nbsp;</th>
                    </tr>
                    <tr>
                        <th>Họ tên :</th><td>'.$post['name'].'</td>
                    </tr>
                    <tr>
                        <th>Email :</th><td>'.$post['email'].'</td>
                    </tr>
                    <tr>
                        <th>Phone :</th><td>'.$post['phone'].'</td>
                    </tr>
                    <tr>
                        <th>File :</th>
                        <td><a href="'.base_url()."upload/contact/".$post['file'].'">'.$post['file'].'</a></td>
                    </tr>';
                    if($this->input->post('id')) {
                        $id = $this->input->post('id');
                        $condition_hosting = array(
                            'select' => 'id, name, price, site_title, status,dungluong,bangthong',
                            'where' => array('status' => 1, 'type' => 'hosting', 'id' => $id),
                        );
                        $row_hosting = $this->product_model->get_by($condition_hosting);
                        $body .='
                            <tr>
                            <th>Đăng ký gói :</th>
                            <td><a href="'.base_url().'hosting.html"]">'.$row_hosting["name"].'</a></td>
                            </tr>
                        ';
                    }
                    $body .='
                    
                    <tr>
                        <th>Nội dung :</th><td>'.$post['content'].'</td>
                    </tr>';
                $body .= '</table>';

                $this->load->library('email_mylib');
                $config = $this->email_mylib->email_configs();
                $this->load->library('email', $config);
                // Sender email address
                $this->email->from($post['email'],$post['name']);
                // Receiver email address
                $this->email->to($this->row_setting['email']);
                $this->email->cc($post['email']);
                // $this->email->cc('lamhungspiderman@gmail.com');
                // Subject of email
                $this->email->subject($post['title']);
                // Message in email
                $this->email->message($body);

    			if($success){
    				$post['created'] = time();
    				$result = $this->contact_model->insert($post);
                    if ($this->email->send()){
                    	$this->session->set_flashdata('msg_error_contact', 'Đã gửi thành công');
                        // redirect(base_url('lien-he.html'));
                        echo "<script>alert('Gửi liên hệ thành công')</script>";
                        // die();
                        echo "<script>window.location.href= '".base_url()."index.html'</script>";
                    } else {
                    	
                    	$this->session->set_flashdata('msg_error_contact', "Gửi thất bại vui lòng thử lại sau");
                    	// redirect(base_url('lien-he.html'));
                         echo "<script>alert('Gửi liên hệ thất bại')</script>";
                        echo "<script>window.location.href= history(-1);</script>";
                    }
    			}
    		}
    	}        
        $this->data['tmp'] = "frontend/contact/add";
        $this->load->view('frontend/layout/index', $this->data); 
    }
    function add_contact(){
        $this->data['row'] = $this->contact_model->defaut_value();
        if($this->input->post('id')) {
            $id = $this->input->post('id');
            $condition_hosting = array(
                'select' => 'id, name, price, site_title, status,dungluong,bangthong',
                'where' => array('status' => 1, 'type' => 'hosting', 'id' => $id),
            );
            $row_hosting = $this->product_model->get_by($condition_hosting);
            $this->data['row_hosting'] = $row_hosting;
            $this->load->view('frontend/layout/contact_popup', $this->data); 
        }
    }
}
?>