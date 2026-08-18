<!DOCTYPE html>
<html>
<head>
    <title>Vince Arthur Melegrito | Student Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: radial-gradient(circle at top left, #1e1b4b, #0f172a 60%);
            color: #e2e8f0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            max-width: 480px;
            width: 100%;
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(148, 163, 184, 0.15);
            padding: 48px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 36px;
        }
        nav a {
            color: #38bdf8;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover { text-decoration: underline; }
        nav a.active { text-decoration: underline; }
        .badge {
            display: inline-block;
            background: rgba(129, 140, 248, 0.15);
            color: #a5b4fc;
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 18px;
        }
        h1 {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(90deg, #818cf8, #38bdf8);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 8px;
        }
        p.subtitle {
            color: #94a3b8;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 32px;
        }
        .btn {
            display: inline-block;
            padding: 14px 32px;
            background: linear-gradient(90deg, #818cf8, #38bdf8);
            color: #0f172a;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.3px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(129, 140, 248, 0.4);
        }
        .footer {
            margin-top: 32px;
            font-size: 12px;
            color: #475569;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <a href="<?= site_url('student') ?>" class="active">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
        <span class="badge">Student Portal</span>
        <h1>Welcome, Vince Melegrito</h1>
        <p class="subtitle">Welcome to my student information.</p>
        <a href="<?= site_url('student/profile') ?>" class="btn">View Student Profile</a>
        <div class="footer">BSIT · 3-F5 · MCC2024-00249</div>
        <?php $_SESSION['vincearthurmelegrito_profile_access'] = true; ?>
    </div>
</body>
</html>