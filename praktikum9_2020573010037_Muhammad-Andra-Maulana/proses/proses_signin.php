<?php  
        session_start();
        require "koneksi.php";
        $email =$_POST['email'];
        $password =$_POST['password'];

        $hasil = mysqli_query($conn,"select * from user WHERE email='$email' AND password ='$password'");
        $row = mysqli_fetch_array($hasil);
        if ($hasil){
                if (isset($row['email']) && isset($row['password']) && $row['email'] == $email && $row['password'] == $password) {
                echo "email ada";
                echo "<script>window.location='../index.php';</script>";
                $_SESSION['email']=$row['email'];
                // header("Location: ../index.php");
                }
                else{ 
                        echo "<script>alert ('Mohon maaf email atau password yang anda masukkan salah')</script>";
                        // echo "<script>window.location='proses_signin.php';</script>";
                }
        }
                else{
                        echo "Terjadi kesalahan";
                }
?>
