<?php
session_start();

if(!isset($_SESSION['useremail']) || !isset($_SESSION['usertoken'])){
    header('location:login.php');
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/73c766774e.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="stylesheet/style.css">
    <title>Page 2</title>
</head>
<body>
    <div class="container-fluid custom-bg">
        <div class="container">
            <div class="box-container">
                <div class="login-con">
                    <h1 class="text-center text-cu-1">Page 2</h1>
                        <div class="email-show-b">
                            Your Id = <?php echo $_SESSION['useremail']; ?>
                        </div>
                        <div class="log-out-btn" id="log_out">
                            <i class="fas fa-power-off"></i>
                            <div class="log-out-btn-sub1"></div>
                            <div class="log-out-btn-sub2"></div>
                            <div class="log-out-btn-sub3"></div>
                            <div class="log-out-btn-sub4"></div>
                        </div>
                        <a href="page1.php"><i class="fas fa-arrow-circle-right text-cu-1 m-auto"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <script>
        $(document).ready(function () {
            $('#log_out').click(function (){
                $.ajax({
                    type : 'POST',
                    url : 'ajax-process/logout.php',
                    success : function(response){
                        window.location.href = "login.php";
                        console.log(response);
                    }
                });
            })
        });
    </script>

</body>
</html>