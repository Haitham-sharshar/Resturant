<?php 
class users extends DB {
              //Signup function
    public function signup ($name,$email,$username,$gender,$password,$isAdmin){
    $sql = "SELECT Count(Username) AS Num FROM users WHERE Username = ? ";
    $result = $this->connection()->prepare($sql);
    $result->execute(array($username));
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if ($row['Num'] > 0)
    echo " <div class='alert-danger'>Your Username is required! </div>";
        else{
            $sql = "INSERT INTO users(Name,Email,Username,Gender,Password,isAdmin) VALUES (?,?,?,?,?,?)";
            $result = $this->connection()->prepare($sql);
            $result->execute(array($name,$email,$username,$gender,$password,$isAdmin));
            header("location:login.php");
        }
}
                           //Login function
public function login($username,$password){
    $sql = "SELECT * FROM users WHERE Username = ? AND password = ?";
    $result = $this->connection()->prepare($sql);
    $result->execute(array($username,$password));
    if ($result->rowCount()==1){
        $row=$result->fetch();
        session_start();
        $_SESSION['username']=$username;
        if($row['isAdmin']==""){
        header("location:index.php");
    } else{
        header("location:admin/categories.php");
    }
    }else 
    echo "<div class='alert-danger'> Your Username or Password is invalid!</div>";
}

     
}
   