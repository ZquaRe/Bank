<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model
{

    /**
     * User_Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserProfile($Username,$Email,$Phone)
    {

        $User = $this->db->select('id,username,email,phone_number,name,surname,isAdmin')->
        where('username', $Username)->
        or_where('email', $Email)->
        or_where('phone_number', $Phone)->
        get('users')->result();
        if ($User)
            return $User[0];
        else
            return false;
    }

    #endregion

    /***
     * @param array $Data
     * @return bool
     */
 /*   public function doRegister($Data = Array())
    {
        //Eğer kullanıcı adı sistemde kayıtlı değilse işleme al.
        if (!$this->getUserProfile($Data) {
            $Add = $this->AddUser(array(
                'username' => $Data['Username'],
                'email' => $Data['Mail'],
                'password' => password_hash($Data['password'], PASSWORD_DEFAULT)
                //'Avatar' => ' '
            ));
            if ($Add) { return true; } else { return false; }
        }
    }*/

    public function doLogin($Data = Array())
    {
        //Eğer kullanıcı adı sistemde kayıtlıysa işleme al


        if ($this->getUserProfile($Data['username'],$Data['username'],$Data['username'])) {

            $User = $this->db->select('username,password')->where('username', trim($Data['username']))->or_where('email', trim($Data['email']))->or_where('phone_number', trim($Data['phone_number']))->get('users')->result();
            
            if($User){
           
        if (password_verify($Data['Password'], trim($User[0]->password))) 
                { return true; } else{ return false; }
            return true;
        
        }
        }

            else return false;
        }
    

        public function AddUser($Data = Array())
        {
            return $this->db->insert('users', $Data);
        }


    }
