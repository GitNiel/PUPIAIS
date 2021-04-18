<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    

    public function login($email, $password) {
        $this->db->query('SELECT * FROM users WHERE email = :email AND password =:password');

        //Bind value
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        
        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }

    }


    // ADD ADMIN/CC ONLY (ONGOING)
    public function register($data) {
        $this->db->query('INSERT INTO users (email, password) VALUES(:email, :password)');

        //Bind values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller. FOR REGISTRATION.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
