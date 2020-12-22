<?php 

class Reservation extends DB{
          // Insert Reservation Data function  
    public function insert_reservation($name,$phone,$date,$food_category,$username_account){
        $sql = "INSERT INTO reservation (Name,Phone,Data,Food_Category,Username_Account) VALUES(?,?,?,?,?)";
        $result =$this->connection()->prepare($sql);
        $result->execute(array($name,$phone,$date,$food_category,$username_account));
    }
       // fetch category function
    public function fetch_category(){
        $sql = "SELECT * FROM categories";
        $result = $this->connection()->query($sql);
        if ($result->rowCount()>0){
            while ($rows = $result->fetch()){
                $data [] = $rows ;
            }return $data;
    }
    
} 
   public function categoryName()
    {
      $sql ="SELECT categories.Name from categories INNER JOIN reservation on Food_Category = categories.Id";
      $result = $this->connection()->query($sql);
      $data = $result->fetch();
      $row [] = $data;
      return $data;  
    }
 
    public function username()
    {
      $sql ="SELECT users.Username from users INNER JOIN reservation on Username_Account = users.id";
      $result = $this->connection()->query($sql);
      $data = $result->fetch();
      $row [] = $data;
      return $data;  
    }

            // fetch username function 
public function fetch_username($username_session){
    $sql = "SELECT * FROM users WHERE Username = '$username_session' ";
    $result = $this->connection()->query($sql);
    if ($result->rowCount()>0){
        while ( $rows = $result->fetch()){
            $data [] = $rows;
        }return $data;
    }
}
          // Fetch Reservation for Dashboard function
   public function fetchAll(){
       $sql = "SELECT * FROM reservation ";
       $result = $this->connection()->query($sql);
       if ($result->rowCount()>0){
           while($rows = $result->fetch()){
               $data [] = $rows;
           }return $data;
       }
   }  
   // Delete reservation function
   public function delete($id){
   $sql = " DELETE FROM reservation WHERE id = '$id'";
   $result = $this->connection()->prepare($sql);
   $result->execute();

   }     
}
?>