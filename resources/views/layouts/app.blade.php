<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Tugas Kelompok 2</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }
        nav {
            background: #1e40af;
            color: #fff;
            padding: 14px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .brand { font-weight: bold; font-size: 18px; }
        nav .menu { display: flex; align-items: center; gap: 16px; }
        nav a { color: #fff; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        nav button {
            background: #dc2626;
            color: #fff;
            border: 0;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
        }
        nav button:hover { background: #b91c1c; }
        .card {
            max-width: 420px;
            margin: 40px auto;
            background: #fff;
            padding: 28px;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }
        h2 { margin-top: 0; }
        label { display: block; margin-bottom: 6px; font-weight: bold; font-size: 14px; }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
        }
        input:focus { outline: 2px solid #3b82f6; border-color: #3b82f6; }
        .field { margin-bottom: 16px; }
        .error { color: #dc2626; font-size: 13px; margin-top: 4px; display: block; }
        .btn {
            width: 100%;
            background: #1e40af;
            color: #fff;
            border: 0;
            padding: 12px;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }
        .btn:hover { background: #1e3a8a; }
        .link { text-align: center; margin-top: 16px; font-size: 14px; }
        .link a { color: #1e40af; }
        .success {
            background: #dcfce7;
            color: #166534;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Tugas Kelompok 2</span>

        <div class="menu">
            @auth
                <span>Halo, {{ auth()->user()->name }}</span>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="/login">Login</a>
                <a href="/register">Daftar</a>
            @endauth
        </div>
    </nav>

    <main class="card">
        @yield('content')
    </main>
</body>
</html>