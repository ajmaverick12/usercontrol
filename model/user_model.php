<?php
/**
 * Created by ajmaverick12
 * Date - 11/09/2015 at 21:21
 */
class user_model{
    private $db;
    private $user;

    public function __construct(){
        $this->db = new Connection();
        $this->db->connect();
        $this->user=array();
    }

    public function getUser(){
        $query = "SELECT * FROM user";
        $userQuery = mysql_query($query);
        while($row = mysql_fetch_assoc($userQuery)){
            $this->user[]=$row;
        }
        return $this->user;
    }
}
?>
