<?php




class User
{

  public $Email ="rufatfq@code.edu.az";
  public $Password = "123";
  
   function Login($email,$pass){
    if($this->Email ==$email && $this->Password==$pass){
        echo("Xos Gelmisiniz ". $email);
    }
    else{
        echo("parol ve ya email yanlisdir");
    }
 
}
}

    $usr = new User();
    $usr->Login( $_POST['email'],$_POST['pass']);
   
    
?>