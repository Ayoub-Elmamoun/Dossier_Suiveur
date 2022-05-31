<?php 

class admin {

    private $admin_Username;
    private $admin_email;
    private $admin_password;
    private $admin_id;


    // admin_Username geters and seters
    public function set_admin_Username($admin_Username) 
    {
    $this->admin_Username = $admin_Username;
    }
    public function get_admin_Username() 
    {
    return $this->admin_Username;
    }
    

    // admin_email geters and seters
    public function set_admin_email($admin_email) 
    {
    $this->admin_email = $admin_email;
    }
    public function get_admin_email() 
    {
    return $this->admin_email;
    }

    // admin_password geters and seters
    public function set_admin_password($admin_password) 
    {
    $this->admin_password = $admin_password;
    }
    public function get_admin_password() 
    {
    return $this->admin_password;
    }

    // admin_id geters and seters
    public function set_admin_id($admin_id) 
    {
    $this->admin_id = $admin_id;
    }
    public function get_admin_id() 
    {
    return $this->admin_id;
    }
    

}
?>  