<?php
	
public function register()
        {
             
        
            $this->form_validation->set_rules('Phonenumber', 'Phonenumber', 'required');    
            $this->form_validation->set_rules('password', 'password', 'required|');    
                       
            if ($this->form_validation->run() == FALSE) {   
                $this->load->view('header');
                $this->load->view('register');
                $this->load->view('footer');
            }else{                
                if($this->user_model->isDuplicate($this->input->post('Phonenumber'))){
                    $this->session->set_flashdata('flash_message', 'user phone number already exists');
                    redirect(site_url().'main/login');
                }else{
                    
                    $clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
                    $id = $this->user_model->insertUser($clean); 
                    $token = $this->user_model->insertToken($id);                                        
                    
                    $qstring = base64_encode($token);                    
                    $url = site_url() . 'main/complete/token/' . $qstring;
                    $link = '<a href="' . $url . '">' . $url . '</a>'; 
                               
                    $message = '';                     
                    $message .= '<strong>You have signed up with our website</strong><br>';
                    $message .= '<strong>Please click:</strong> ' . $link;                          
 
                    echo $message; //send this in email
                    exit;
                     
                    
                };              
            }
        }
?>