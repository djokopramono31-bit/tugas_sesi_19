<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body style="font-family:sans-serif; display:flex; justify-content:center; margin-top:100px;">
<div style="border:1px solid #ccc; padding:30px; border-radius:10px;">
<h2>Login Admin</h2>
<form method="POST" action="/login">
@csrf
<div>Email: <br><input type="email" name="email" value="admin@gmail.com" style="width:250px; padding:8px;"></div><br>
<div>Password: <br><input type="password" name="password" value="password" style="width:250px; padding:8px;"></div><br>
<button type="submit" style="padding:10px 20px;">Login</button>
</form>
</div>
</body>
</html>