<!doctype html >
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>تستی 1</title>
</head>
<style>
    body {
        background-color: #efefef;
        font-family: IRANSans;
    }

    form {
        background-color: #fff;
        border-radius: 5px;
    }

    }
</style>
<body>
<h3 class="text-center mt-5">کار با فرم ها در PHP</h3>
<div class="container my-5">
    <div class="row ">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 my-5">
            <form class="border py-5 px-4 my-5" method="POST"
                  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <div class="mb-3">
                    <label for="inputEmail" class="col-form-label mb-3">نام کاربری</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputEmail" placeholder="نام کاربری ..."
                               name="username">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="col-form-label mb-3">کلمه عبور</label>
                    <div class="col-sm-12">
                        <input  type="password" class="form-control text-end" id="myInput"
                               placeholder="Your Password" name="password" >
                        <input type="checkbox" onclick="myFunction()"> Show Password
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myInput");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>

                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-sm-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" name="remember-me">
                            <label class="form-check-label" for="gridCheck">
                                مرا بخاطر بسپار
                            </label>
                        </div>
                    </div>

                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3" name="submit" value="btn-login">ورود</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';


if (isset($_POST['submit']) && $_POST['submit'] == "btn-login") {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['username']) && !empty($_POST['password']) && empty($_POST['remember-me'])) {
            echo $_POST['username'];
            echo ' عزیز, شما با موفقیت وارد شدی';
        } else {
             echo 'تکمیل کردن تمامی فیلد ها الزامی است';
        }
    }
}
//echo '<pre>';
//var_dump($_GET);
//echo '</pre>';
exit;
?>

</body>
</html>
