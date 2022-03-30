<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Admin</title>
</head>
<style>
  
</style>
<body>
<div id="login">
        <h3 class="text-center text-white pt-5">Trang Đăng Nhập Quản Lý</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="process_login.php" method="post">
                            <h3 class="text-center text-info">Đăng Nhập</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật Khẩu</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Ghi Nhớ</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <!-- <input type="submit" name="submit" class="btn btn-info btn-md" value="submit"> -->
                                <button class="btn btn-info btn-md" >Đăng Nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>