<?php
$hostname = "servername";
    $dbname = "dbname";
    $username = "username";
    $pw = "password";
    $pdo = new PDO ("mssql:host=$hostname;dbname=$dbname","$username","$pw");
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

  	  $sql = "select name FROM tbl_name";
      $query = $pdo->prepare($sql);
      $query->execute();
     
      for($i=0; $row = $query->fetch(); $i++){
        echo $i." - ".$row['name']."<br/>";
      }

      unset($pdo);
      unset($query);
?>
