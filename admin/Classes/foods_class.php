<?php

        
class Foods extends DB{
           // Foods Insert function
  public function addfood($name,$folder,$price,$description,$foodcategory){
      $sql ="INSERT INTO foods(Name,Image,Price,Description,food_category) VALUES(?,?,?,?,?) ";
      $result = $this->connection()->prepare($sql);
      $result->execute(array($name,$folder,$price,$description,$foodcategory));
  }
        // food category fetch function
  public function food_category(){
      $sql = "SELECT * FROM categories";
      $result = $this->connection()->query($sql);
      if ($result->rowCount()>0){
          while ($rows = $result->fetch()){
              $data [] = $rows ;
          }return $data;
      }
  }
  public function categoryName(){
    $sql = "  SELECT categories.Name  FROM categories Inner Join foods On foods.food_category = categories.Id ";
    $result = $this->connection()->query($sql);
         $data = $result->fetch();
          $row [] = $data ;
        return $data;
}
       // Foods Fetch function
  public function fetch_foods(){
    $sql = "SELECT * FROM foods " ;
    $result = $this->connection()->query($sql);
    if ($result->rowCount()>0){
        while ($rows = $result->fetch()){
            $data [] = $rows ;
        }return $data;
    }
  }
    // Foods Delete function
    public function deleteFood($id){
        $sql="DELETE FROM foods WHERE Id = '$id'";
        $result = $this->connection()->prepare($sql);
        $result->execute();
    }
    public function fetch_food_dinner(){
        $sql = "SELECT * FROM foods  WHERE food_category = 23 " ;
        $result = $this->connection()->query($sql);
        if ($result->rowCount()>0){
            while ($rows = $result->fetch()){
                $data [] = $rows ;
            }return $data;
        }
      }
      public function fetch_food_lunch(){
        $sql = "SELECT * FROM foods  WHERE food_category = 22 " ;
        $result = $this->connection()->query($sql);
        if ($result->rowCount()>0){
            while ($rows = $result->fetch()){
                $data [] = $rows ;
            }return $data;
        }
      }
      public function fetch_food_breakfast(){
        $sql = "SELECT * FROM foods  WHERE food_category = 24 " ;
        $result = $this->connection()->query($sql);
        if ($result->rowCount()>0){
            while ($rows = $result->fetch()){
                $data [] = $rows ;
            }return $data;
        }
      }
}
  