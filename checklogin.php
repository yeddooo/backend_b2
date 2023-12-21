<?php 
  session_start();
  if(isset($_POST['user'])){
    include("connect.php");
    $username = $_POST['user'];
    $password = ($_POST['pass']);

    $sql="SELECT * FROM user_profile WHERE  u_name='".$username."' AND  p_word='".$password."' ";
    $result = mysqli_query($conn,$sql);
				
      if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        if($row["u_status"] == 9){
          $title = 'ผู้ใช้นี้ถูกแบน!'; $text = 'กรุณาติดต่อแอดมิน...'; $delay = '3000'; $link = 'login.php';
          msg_error($title,$text,$delay,$link);
        }elseif($row["level"] == 0){

          $cynpass = 1;
          $sql2 = "UPDATE user_profile SET u_status = '".$cynpass."' WHERE p_word = '". $password."'";
          $query = mysqli_query($conn,$sql2);

          $_SESSION["p_word"] = $row["p_word"];
          header("location: admin_dashboard.php");
          
        }elseif($row["level"] == 7){

          $cynpass = 1;
          $sql2 = "UPDATE user_profile SET u_status = '".$cynpass."' WHERE p_word = '".$p_word."'";
          $query = mysqli_query($conn,$sql2);

          $_SESSION["p_word"] = $row["p_word"];
          header("location: homedear.php");
        }
      }else{

        $title = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'; $text = 'กรุณาลองใหม่อีกครั้ง...'; $delay = '3000'; $link = 'login.php';

 
      }
  }
?>