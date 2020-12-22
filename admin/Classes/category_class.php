<?php 
class category extends DB {
             // Add category function                           
    public function addCategory($name){
        $sql = "INSERT INTO categories (Name) VALUES (?)";
        $result = $this->connection()->prepare($sql);
        $result->execute(array($name));
  }
              // Fetch category function  
  public function fetchCategory(){
      $sql = "SELECT * FROM categories ";
      $result = $this->connection()->query($sql);
      if ($result->rowCount() > 0){
        while ($rows = $result->fetch()){
            $data [] = $rows;
        }
        return $data;
    }
      }
                    // Delete category function  
      public function deleteCategory($id){
          $sql = "DELETE FROM categories WHERE Id = '$id'";
          $result = $this->connection()->prepare($sql);
          $result->execute();
      }
      public function fetchCategories(){
        $sql = "SELECT * FROM categories ";
        $result = $this->connection()->query($sql);
          $row = $result->fetch();
  }
    
}