<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
	<title>Đăng kí hệ thống</title>
	<style>
        body{
            background: #ccc;
        }
        form{
            margin:2rem 25%;
            padding: 1rem;
            background-color: #fff;
            border-radius:1rem;
        }
    </style>
</head>
<body>
	<form action="dangki_dangnhap.php" method="post">
	<div id="form-dangki">
		<h2>đăng kí hệ thống quản trị</h2>
		<center><span style="color:red;"></center>
	    <ul>
	        <li><label>tài khoản</label><input type="text" name="tk" id="tk" /></li>
	        <li><label>mật khẩu</label><input type="password" name="mk"id="mk" /></li>
	        <li><label>ghi nhớ</label><input type="checkbox" name="check" checked="checked" /></li>
	        <li><input type="submit" name="dangki" value="Đăng kí" /></li>
	    </ul>
	</div>
	<a href="dangnhap.php" class="btn">Đăng nhập</a>
	</form>
</body>
</html>
