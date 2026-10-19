<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: sans-serif; padding: 30px; }
        .card { border: 1px solid #ddd; padding: 20px; border-radius: 10px; max-width: 600px; }
        .btn { background: red; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Selamat Datang Admin! 🎉</h1>
        <p>Anda berhasil login sebagai:</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Role:</strong> {{ Auth::user()->role }}</p>
        <p><strong>Tugas Sesi 19 - Middleware Admin Berhasil!</strong></p>
        
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn">Logout</button>
        </form>
    </div>
</body>
</html>