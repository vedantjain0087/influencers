<?php
class Dbmodel extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function login($email, $password)
    {
        $this->db->select('fullname, email, mobile, gender, state, city, profile_picture, primary_foi, secondary_foi_1, secondary_foi_2, instagram, facebook');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        if ($query->num_rows()) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function if_user_exist($email)
    {
        $query = $this->db->where(['email' => $email])->get('users');
        if ($query->num_rows()) {
            return true;

        } else {
            return false;
        }
    }

    public function register_step1($fullname, $mobile, $email)
    {
        $data = array(
            'fullname' => $fullname,
            'mobile' => $mobile,
            'email' => $email,
        );
        $this->db->insert('users', $data);
        return true;
    }

    public function create_campaign($name, $imagename, $platform, $exp_date, $description, $url, $activity, $terms)
    {
        $data = array(
            'name' => $name,
            'imagename' => $imagename,
            'platform' => $platform,
            'exp_date' => $exp_date,
            'description' => $description,
            'url' => $url,
            'activity' => $activity,
            'terms' => $terms,
        );
        $this->db->insert('live_campaigns', $data);
        return true;
    }

    public function live_campaigns()
    {
        $query = $this->db->get('live_campaigns');
        if ($query->num_rows()) {
            return $query->result();
        }
    }

    public function invited_campaigns($email)
    {
        $query = $this->db->where(['email' => $email])->get('users');
        if ($query->num_rows()) {
            $primary_foi = $query->row()->primary_foi;
            $secondary_foi_1 = $query->row()->secondary_foi_1;
            $secondary_foi_2 = $query->row()->secondary_foi_2;
            $this->db->from('live_campaigns');
            $this->db->where('platform =', $primary_foi);
            $this->db->or_where('platform =', $secondary_foi_1);
            $this->db->or_where('platform =', $secondary_foi_2);
            $query = $this->db->get();
            return $query->result();

        }
    }

    public function applied_campaigns($email)
    {
        $this->db->select('*');
        $this->db->from('live_campaigns');
        $this->db->join('user_live_campaign_stats', 'user_live_campaign_stats.campaign_id = live_campaigns.id');
        $this->db->where('user_email =', $email);
        $this->db->where('applied =', 'yes');
        $query = $this->db->get();
        return $query->result();
    }

    public function completed_campaigns($email)
    {
        $this->db->select('*');
        $this->db->from('live_campaigns');
        $this->db->join('user_live_campaign_stats', 'user_live_campaign_stats.campaign_id = live_campaigns.id');
        $this->db->where('user_email =', $email);
        $this->db->where('completed =', 'yes');
        $query = $this->db->get();
        return $query->result();
    }

    public function approved_campaigns($email)
    {
        $this->db->select('*');
        $this->db->from('live_campaigns');
        $this->db->join('user_live_campaign_stats', 'user_live_campaign_stats.campaign_id = live_campaigns.id');
        $this->db->where('user_email =', $email);
        $this->db->where('approved =', 'yes');
        $query = $this->db->get();
        return $query->result();
    }

    public function submitted_campaign($email)
    {
        $this->db->select('*');
        $this->db->from('live_campaigns');
        $this->db->join('user_live_campaign_stats', 'user_live_campaign_stats.campaign_id = live_campaigns.id');
        $this->db->where('user_email =', $email);
        $this->db->where('submitted =', 'yes');
        $query = $this->db->get();
        return $query->result();
    }

    public function apply_for_campaign($email, $campaign_id)
    {
        $data = array(
            'campaign_id' => $campaign_id,
            'user_email' => $email,
            'applied' => 'yes',
        );
        $this->db->insert('user_live_campaign_stats', $data);
        return true;
    }

    public function approve_for_campaign($email, $campaign_id)
    {
        $data = array(
            'applied' => 'no',
            'approved' => 'yes',
        );
        $this->db->where('user_email', $email);
        $this->db->where('campaign_id', $campaign_id);
        $this->db->update('user_live_campaign_stats', $data);
        return true;
    }

    public function submit_for_campaign($email, $campaign_id)
    {
        $data = array(
            'approved' => 'no',
            "submitted" => 'yes',
        );
        $this->db->where('user_email', $email);
        $this->db->where('campaign_id', $campaign_id);
        $this->db->update('user_live_campaign_stats', $data);
        return true;
    }

    public function complete_for_campaign($email, $campaign_id)
    {
        $data = array(
            'submitted' => 'no',
            'completed' => 'yes',
        );
        $this->db->where('user_email', $email);
        $this->db->where('campaign_id', $campaign_id);
        $this->db->update('user_live_campaign_stats', $data);
        return true;
    }

    public function add_connection($from, $to)
    {
        $this->db->select('*');
        $this->db->from('connections');
        $this->db->where('user1 =', $from);
        $this->db->where('user2 =', $to);
        $this->db->or_where('user1 =', $to);
        $this->db->where('user2 =', $from);
        $query = $this->db->get();
        if (!$query->num_rows()) {
            $data = array(
                'user1' => $from,
                'user2' => $to,
            );
            $this->db->insert('connections', $data);
            return true;
        }
        return true;

    }
    public function explore($email)
    {
        $this->db->from('users');
        $this->db->where('email !=', $email);
        $this->db->select('fullname, email, mobile, gender, state, city, profile_picture, primary_foi, secondary_foi_1, secondary_foi_2, instagram, facebook');
        $query = $this->db->get();
        return $query->result();
    }

    public function connections($email)
    {
        $this->db->from('connections');
        $this->db->where('user1 =', $email);
        $this->db->or_where('user2 =', $email);
        $query = $this->db->get();
        return $query->result();
    }

    public function profile($email)
    {
        $this->db->select('fullname, email, ,description, mobile, gender, state, city, profile_picture, primary_foi, secondary_foi_1, secondary_foi_2, instagram, facebook');
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function update_profile($email, $fullname, $mobile, $city, $state, $primary_foi, $secondary_foi_1, $secondary_foi_2, $description)
    {
        $data = array(
            'fullname' => $fullname,
            'mobile' => $mobile,
            'city' => $city,
            'state' => $state,
            'primary_foi' => $primary_foi,
            'secondary_foi_1' => $secondary_foi_1,
            'secondary_foi_2' => $secondary_foi_2,
            'description' => $description
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
        return true;
    }

    public function update_password($email, $new_pass)
    {
        $data = array(
            'password' => $new_pass,
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
        return true;
    }

}
