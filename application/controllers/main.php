<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
        //load model
        $this->load->model('dbmodel');
    }
    public function index()
    {
        echo ("welcome");
    }

    public function send_email($receiver_email, $receiver_name)
    {
        $this->load->library('email');
        $config = array();
        ini_set("SMTP", "ssl://smtp.gmail.com");
        ini_set("smtp_port", "587");
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'email'; //email
        $config['smtp_pass'] = 'password'; //paassword
        $config['smtp_port'] = 587;
        $config['smtp_crypto'] = 'tls';
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('email', 'username'); //Sender Details
        $this->email->to($receiver_email, $receiver_name);
        $this->email->subject('QuaffMedia: Verify Your email');
        //Insert action url
        $message = 'Hi ' . $receiver_name . ', You have registered for QuaffMedia. <br> Click <a href="">here</a> to verify your email';
        $this->email->message($message);
        try {
            if (!$this->email->send()) {
                return false;
                // die($this->email->print_debugger());
            } else {
                return true;
            }

        } catch (Exception $e) {
            return false;
        }
    }

    public function register()
    {
        $click = $this->input->post('submit');
        if ($click) {
            $fullname = $this->input->post('fullname');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
            $ifuser = $this->dbmodel->if_user_exist($email);
            if ($ifuser) {
                $this->session->set_flashdata('register_message', 'The user already exists!');
                //Add the route back to register page
                redirect(base_url('index.php/main/register'));
            } else {
                //Add Form validations Skipping them for now
                $status = $this->dbmodel->register_step1($fullname, $mobile, $email);
                if ($status) {
                    $this->send_email($receiver_email, $receiver_name);
                    //Load new route
                    redirect(base_url('index.php/main/message'));
                } else {
                    $this->session->set_flashdata('register_message', 'There was some error in storing data!');
                    //Add the route back to register page
                    redirect(base_url('index.php/main/register'));
                }
            }
        } else {
            redirect(base_url('/'));
        }
    }

    public function login()
    {
        if ($this->session->userdata('email')) {
            $searchuser = $this->session->userdata('email');

            //Do Something here
        } else {
            $click = $this->input->post('submit');
            if ($click) {
                $this->session->set_userdata('email', $this->input->post('email'));
            } else {
                redirect(base_url('/'));

            }

        }
    }

    public function create_campaign()
    {
        $click = $this->input->post('submit');
        if ($click) {
            $config['upload_path'] = APPPATH . "../images/";
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('campaign_image')) {
                $this->session->set_flashdata('create_campaign_message', $this->upload->display_errors());
                redirect(base_url('index.php/main/create_campaign'));

            } else {
                $file_data = $this->upload->data();
                $imagename = $file_data['file_name'];
                $name = $this->input->post('name');
                $platform = $this->input->post('platform');
                $exp_date = $this->input->post('exp_date');
                $description = $this->input->post('description');
                $url = $this->input->post('url');
                $activity = $this->input->post('activity');
                $terms = $this->input->post('terms');
                $if_done = $this->dbmodel->create_campaign($name, $imagename, $platform, $exp_date, $description, $url, $activity, $terms);
                if (!$if_done) {
                    $this->session->set_flashdata('create_campaign_message', 'There was some error in storing data!');
                    redirect(base_url('index.php/main/create_campaign'));

                } else {
                    $this->session->set_flashdata('create_campaign_message', 'Campaign Created Succesfully');
                    redirect(base_url('index.php/main/create_campaign'));
                }
            }
        } else {
            redirect(base_url('/'));
        }
    }

    //Fetch Live Campaign

    public function fetch_live_campaign()
    {
        $passdata['live_campaigns'] = $this->dbmodel->live_campaigns();
        // $this->load->view('',)
    }

    //Fetch All data for campaign page

    public function campaign_page()
    {
        $email = $this->session->userdata('email');
        $passdata['live_campaigns'] = $this->dbmodel->live_campaigns();
        $passdata['invited_campaigns'] = $this->dbmodel->invited_campaigns($email);
        $passdata['applied_campaigns'] = $this->dbmodel->applied_campaigns($email);
        $passdata['approved_campaigns'] = $this->dbmodel->approved_campaigns($email);
        $passdata['submitted_campaign'] = $this->dbmodel->submitted_campaign($email);
        $passdata['completed_campaigns'] = $this->dbmodel->completed_campaigns($email);
        $this->load->view('campaign_page', $passdata);
    }

    //Code For Dealing operation on Live campaigns

    public function apply_for_campaign()
    {
        $email = $this->session->userdata('email');
        $campaign_id = $this->input->post('campaign_id');
        $if_done = $this->dbmodel->apply_for_campaign($email, $campaign_id);
        if (!$if_done) {
            $this->session->set_flashdata('apply_for_campaign_message', 'There was some error in storing data!');
            redirect(base_url('index.php/main/apply_for_campaign'));

        } else {
            $this->session->set_flashdata('apply_for_campaign_message', 'Applied For campaign Successfully');
            redirect(base_url('index.php/main/apply_for_campaign'));
        }
    }

    public function approve_for_campaign()
    {
        $email = $this->session->userdata('email');
        $campaign_id = $this->input->post('campaign_id');
        $if_done = $this->dbmodel->approve_for_campaign($email, $campaign_id);
        if (!$if_done) {
            $this->session->set_flashdata('approve_for_campaign_message', 'There was some error in storing data!');
            redirect(base_url('index.php/main/apply_for_campaign'));

        } else {
            $this->session->set_flashdata('approve_for_campaign_message', 'Approved for campaign successfully');
            redirect(base_url('index.php/main/apply_for_campaign'));
        }
    }

    public function submit_for_campaign()
    {
        $email = $this->session->userdata('email');
        $campaign_id = $this->input->post('campaign_id');
        $if_done = $this->dbmodel->submit_for_campaign($email, $campaign_id);
        if (!$if_done) {
            $this->session->set_flashdata('submit_for_campaign_message', 'There was some error in storing data!');
            redirect(base_url('index.php/main/submit_for_campaign'));

        } else {
            $this->session->set_flashdata('submit_for_campaign_message', 'Submitted for campaign successfully');
            redirect(base_url('index.php/main/submit_for_campaign'));
        }
    }

    public function complete_for_campaign()
    {
        $email = $this->session->userdata('email');
        $campaign_id = $this->input->post('campaign_id');
        $if_done = $this->dbmodel->complete_for_campaign($email, $campaign_id);
        if (!$if_done) {
            $this->session->set_flashdata('complete_for_campaign_message', 'There was some error in storing data!');
            redirect(base_url('index.php/main/complete_for_campaign'));
        } else {
            $this->session->set_flashdata('complete_for_campaign_message', 'Campaign completed successfully');
            redirect(base_url('index.php/main/complete_for_campaign'));
        }
    }

    public function add_connection()
    {
        $from = $this->session->userdata('email');
        $to = $this->input->post('to');
        $if_done = $this->dbmodel->add_connection($from, $to);
        if (!$if_done) {
            echo ("success");
            // $this->session->set_flashdata('complete_for_campaign_message', 'There was some error in storing data!');
            // redirect(base_url('index.php/main/complete_for_campaign'));
        } else {
            echo ("error");
            // $this->session->set_flashdata('complete_for_campaign_message', 'Campaign completed successfully');
            // redirect(base_url('index.php/main/complete_for_campaign'));
        }
    }

    public function explore()
    {
        $passdate['profiles'] = $this->dbmodel->explore();
        $this->load->view('explore', $passdata);
    }

    public function profile()
    {
        $email = $this->session->userdata('email');
        $passdate['user_profile'] = $this->dbmodel->profile($email);
        $this->load->view('profile', $passdata);
    }

    public function update_password()
    {
        $email = $this->session->userdata('email');
        $new_pass = $this->input->post('new_pass');
        $if_done = $this->dbmodel->update_password($email, $new_pass);
        if (!$if_done) {
            echo ("success");
            // $this->session->set_flashdata('complete_for_campaign_message', 'There was some error in storing data!');
            // redirect(base_url('index.php/main/complete_for_campaign'));
        } else {
            echo ("error");
            // $this->session->set_flashdata('complete_for_campaign_message', 'Campaign completed successfully');
            // redirect(base_url('index.php/main/complete_for_campaign'));
        }
    }
    // public function applied_campaigns()
    // {
    //     // $email = $this->input->post('email');
    //     $res = $this->dbmodel->explore();
    //     var_dump($res);
    // }
}
