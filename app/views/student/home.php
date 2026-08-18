<!DOCTYPE html>
<html>
<head>
    <title>Vince Arthur Melegrito | Student Home</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0f172a; color: #e2e8f0; margin: 0; padding: 40px; }
        .card { max-width: 500px; margin: auto; background: #1e293b; padding: 40px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.4); text-align: center; }
        h1 { color: #38bdf8; margin-bottom: 10px; }
        p.subtitle { color: #94a3b8; margin-bottom: 30px; }
        nav a { color: #38bdf8; text-decoration: none; margin: 0 10px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .btn { display: inline-block; margin-top: 20px; padding: 12px 28px; background: #38bdf8; color: #0f172a; border-radius: 8px; text-decoration: none; font-weight: bold; }
        .btn:hover { transform: translateY(-2px); }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
        <h1>Welcome</h1>
        <p class="subtitle">Vince Arthur N. Melegrito's Student Information System</p>
        <a href="<?= site_url('student/profile') ?>" class="btn">View Student Profile</a>
        <?php $_SESSION['vincearthurmelegrito_profile_access'] = true; ?>
    </div>
</body>
</html>