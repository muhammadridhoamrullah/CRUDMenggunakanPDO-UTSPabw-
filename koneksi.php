<?php
session_start(); // ini adalah kode untuk memulai session
        $host = "ridhoamrullah10.my.id";
        $Username = "ridhoamr_test";
        $Password = "Qwer10101999";

        try{
            $conn = new PDO("mysql:host=ridhoamrullah10.my.id; dbname=ridhoamr_mycrud", "ridhoamr_test", "Qwer10101999");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_POST['login'])) { // mengecek apakah form variabelnya ada isinya
                if (isset($_POST["login"])) {
                  if (empty($_POST["Username"]) || empty($_POST["Username"])) {
                    $message = '<label> isi dulu</label>';
                  }else{
                    $query = "SELECT * FROM login WHERE Username =:Username AND Password =:Password";
                    $statment = $conn->prepare($query);
                    $statment->execute(
                      array(
                        'Username' => $_POST["Username"],
                        'Password' => $_POST["Password"]
                      )

                    );
                    $count = $statment->rowCount();

                    if ($count > 0 ) {
                      $_SESSION["Username"] = $_POST["Username"];
                      header("location:form.php ");
                    }else{
                      $message = '<label>wrong</label>';
                    }
                  }
                }
                
            }
            
        }catch (PDOException $e){
            echo "ERROR : " .$e->getMessage();
        }


?>