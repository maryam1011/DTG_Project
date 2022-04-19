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


        <div class="header">
            <img class="logo" src="images/logo.svg" alt="" style="width:170px;margin-right: 5%;"/>
            <h3>الكلية التقنية الرقمية للبنات بالأحساء</h3>
        </div>
        <div class="separador"></div>
        <div class="overlay">

            <form name="myForm" method="post" action="index.php" class="form-control">
                <span style="color:red;"><strong><?php include('error.php'); ?></strong></span>

                <div class="con">
                    <h2>تسجيل الدخول</h2>
                    <div class="field-set">
                        <span class="input-item">
                            <i class="fa fa-user-circle"></i>
                        </span>

                        <input class="form-input" id="username" name="username" type="text" placeholder="اسم المستخدم" required/>
                        <br>
                        <span class="input-item">
                            <i class="fa fa-key"></i>
                        </span>
                        <input class="form-input" id="password" name="password" type="password" placeholder="كلمة المرور" required/>


                        <br>
                        <label>هل انتي مدربة او متدربة؟</label>
                        <br>
                        <div id="icon">
                            <img src="images/techer.png" class="users">
                            <input required="" type="radio" name="user" value="user1" id="teacher" checked/> <span class="spuser">مدربة</span>
                            <img src="images/stu.png" class="users">
                            <input type="radio" name="user" value="user2" id="trainer"/>  <span class="spuser">متدربة</span>
                        </div>
                        <input class="log-in" id="log_in" name="log_in" type="submit" value="دخول">

                    </div>

                </div>
            </form>
        </div>

        <script>

//            document.getElementById('submit').onclick = function () {
//                this.disabled = true;
//
//                let x = document.forms["myForm"]["username"].value;
//                let y = document.forms["myForm"]["password"].value;
//                if (x == "") {
//                    alert("يجب ادخال اسم المستخدم");
//
//                } else if (y == "") {
//                    alert("يجب ادخال كلمة السر");
//
//                } else if (x != "" && y != "") {
//                    var teacher = document.getElementById("teacher");
//                    var trainer = document.getElementById("trainer");
//
//                    if (teacher.checked == true) {
//
//                        location.href = "http://localhost:8383/IT/coachServise.html"
//                    } else if (trainer.checked == true) {
//                        location.href = "http://localhost:8383/IT/stServise.html";
//                    } else {
//                        alert("يرجى اختيار النوع");
//                    }
//
//                }
//
//            }
        </script>

    </body>
</html>

