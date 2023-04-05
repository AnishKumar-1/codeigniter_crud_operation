<?php
class Authenticate extends CI_model{

   public function __construct()
   {
     $this->load->database();
   }
    public function getdata()
    {
        $sql = "SELECT * FROM students";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function register($data)
    {
      if(!empty($data))
      {
       $message="";
        $sql="INSERT INTO students(name,email,mobile,password) VALUES('$data[0]','$data[1]','$data[2]','$data[3]')";
        $query=$this->db->query($sql);
        // $data = array(
        //   'message' => 'registration success'
        //    );
           if($query)
           {
            $this->session->set_flashdata('message','registration success');
           }
          
      }
  
    }
    public function getbyid($id)
    {
      $id=$id['id'];
      $sql="SELECT *FROM students WHERE id=$id";
      $query=$this->db->query($sql);
      return $query->result_array();
    }
    public function updatedata($data)
    {

      $id=$data[4]['id']; 
      $name=$data[0];
      $email=$data[1];
      $mobile=$data[2];
      $password=$data[3];
      $sql="UPDATE students SET name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
     return  $this->db->query($sql);
    }
    public function delete($id)
    {
     $sql="DELETE FROM students WHERE id=$id";
     return $this->db->query($sql);
    }
}
?>