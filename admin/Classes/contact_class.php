<?php 
class contact extends DB {
     // Insert  Contact Function 
  public function addContact($message,$name,$email,$subject){
      $sql = "INSERT INTO contact(Message,Name,Email,Subject) VALUES (?,?,?,?)";
      $result = $this->connection()->prepare($sql);
      $result->execute(array($message,$name,$email,$subject));
  }
  // fetch Contact function
  public function fetchContact(){
      $sql = "SELECT * FROM contact";
      $result = $this->connection()->query($sql);
      if ($result->rowCount()>0){
          while ($rows = $result->fetch()){
            $data [] = $rows;
          }   
      }return $data;
  }
}