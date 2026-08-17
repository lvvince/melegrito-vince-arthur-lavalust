<!DOCTYPE html>
<html>
<head>
    <title>Vince Arthur Melegrito | Student Home</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0f172a; color: #e2e8f0; margin: 0; padding: 40px; }
        .card { max-width: 500px; margin: auto; background: #1e293b; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.4); }
        h1 { color: #38bdf8; }
        nav a { color: #38bdf8; text-decoration: none; margin-right: 15px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .info p { margin: 6px 0; }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
        <h1>Student Information</h1>
        <div class="info">
            <p><strong>Student ID:</strong> <?= $student_id ?></p>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Course:</strong> <?= $course ?></p>
            <p><strong>Year Level:</strong> <?= $year ?></p>
            <p><strong>Section:</strong> <?= $section ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
        </div>
        <?php $_SESSION['vincearthurmelegrito_profile_access'] = true; ?>
    </div>
</body>
</html>