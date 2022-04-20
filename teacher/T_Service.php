<?php
//
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: index.php");
}
?>
<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <title>خدمات المدربة</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style.css">

    </head>
    <body>
        <div class="header">
            <a href="T_Service.php">
                <img class="logo" src="../images/logo.svg" alt="" style="width:170px;margin-right: 5%;"/></a>
                <h3>الكلية التقنية الرقمية للبنات بالأحساء</h3>
            <a href="../logout.php">خروج</a>
        </div>
        <div class="separador"></div>
        <div class="contant">
            <div class="container-fluid">
                <section class="services">

                    <div class="s-heading">
                        <h1>خد<font color="#3399ff">ما</font>ت  المدربة</h1>
                        <p>الرجاء اختيار أحد الخدمات التالية:</p>
                    </div>
                    <!--services-box-container------------------->
                    <div class="s-box-container">
                        <div style="overflow-x:auto;"> 

                            <table>
                                <tr>
                                    <td>
                                        <div class="s-box">
                                            <div class="bar"></div>
                                            <img src="../images/list.png" alt="1"/>
                                            <h1> المخالفات</h1>
                                            <p> تقدم هذه الخدمة لرصد مخالفات الزي والمخالفات الاخرى.</p>
                                            <a class="s-btn" href="violation.php">الانتقال الى هذه الخدمة</a>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="s-box">
                                            <div class="bar"></div>
                                            <img alt="2"src="../images/tel.png"/>
                                            <h1>روابط التلقرام</h1>
                                            <p>تقدم هذه الخدمة روابط الشعب لتواصل مع المتدربات.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="s-box">
                                            <div class="bar"></div>
                                            <img src="../images/gu.png" alt="1"/>
                                            <h1> الارشاد</h1>
                                            <p>تقدم هذه الخدمة التواصل مع الارشاد.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="s-box">
                                            <div class="bar"></div>
                                            <img src="../images/at.png" alt="1"/>
                                            <h1> الحضور والغياب </h1>
                                            <p> تقدم هذه الخدمة تحضير الطالبات ورصد الحضور والغياب.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="s-box">
                                            <div class="bar"></div>
                                            <img src="../images/sc.jpg" alt="1"/>
                                            <h1> الجدول</h1>
                                            <p> تقدم هذه الخدمة الأطلاع على جدول المواد والمحاضرات وارقام المعامل.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
