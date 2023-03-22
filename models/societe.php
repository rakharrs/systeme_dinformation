<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Societe extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($name,$email,$pwd,$creation,$founder,$headquarters,$nif, $stat_num,$fax,$phone,$status,$nif_path,$desc)
    {
       $this->db->insert('societe',
           array(
               'name'=>$name,
               'email'=>$email,
               'mdp'=>$pwd,
               'date_creation'=>$creation,
               'fondateur'=>$founder,
               'siege'=>$headquarters,
               'nif'=>$nif,
               'nif_path'=>$nif_path,
               'num_stat'=>$stat_num,
                'telecopie'=>$fax,
               'telephone'=>$phone,
               'status'=>$status,
                'description'=>$desc,
               'date_exercice'=>"now()"
               )
       );
    }
}