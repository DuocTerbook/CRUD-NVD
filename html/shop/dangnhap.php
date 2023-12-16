<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
	<title>Đăng nhập hệ thống</title>
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
	<div id="form-dangnhap">
		<h2>Đăng nhập hệ thống quản trị</h2>
		<center><span style="color:red;"></center>
	    <ul>
	        <li><label>Tài khoản</label><input type="text" name="tk" id="tk" /></li>
	        <li><label>Mật khẩu</label><input type="password" name="mk"id="mk" /></li>
	        <li><label>Ghi nhớ</label><input type="checkbox" name="check" checked="checked" /></li>
			<li><input type="submit" name="dangnhap" value="Đăng nhập" /></li>
	    </ul>
	</div>
	<a href="dangki.php" class="btn">Đăng kí</a>
	</form>
</body>
</html>