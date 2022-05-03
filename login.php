<?php
include_once('includes/dbh.inc.php');
include_once('includes/pd.inc.php');
?>

<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <title>تسجيل الدخول </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<?php include('header.php');?>
    <div class="separador"></div>
    <div class="overlay">

        <form name="myForm" method="post" action="login.php" class="form-control">

            <div class="con">
                <h2>تسجيل الدخول</h2>
                <div class="field-set">
                    <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                    </span>

                    <input class="form-input" id="username" name="username" type="text" placeholder="اسم المستخدم"
                        required />
                    <br>
                    <span class="input-item">
                        <i class="fa fa-key"></i>
                    </span>
                    <input class="form-input" id="password" name="password" type="password" placeholder="كلمة المرور"
                        required />


                    <span style="color:red;"><strong><?php include('error.php'); ?></strong></span>

                    <input class="log-in" id="log_in" name="log_in" type="submit" value="دخول">

                </div>

            </div>
        </form>
    </div>


    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>