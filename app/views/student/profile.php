<!DOCTYPE html>
<html>
<head>
    <title>Vince Arthur Melegrito | Student Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .card {
            max-width: 500px;
            width: 100%;
            background: #1e293b;
            padding: 35px;
            border-radius: 12px;
        }
        nav a {
            color: #38bdf8;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        nav a:hover { text-decoration: underline; }
        nav a.active { text-decoration: underline; }
        .header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }
        h1 { color: #38bdf8; }
        .badge {
            background: rgba(52, 211, 153, 0.15);
            color: #34d399;
            padding: 5px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        .row span:first-child { color: #94a3b8; }
        .row a { color: #38bdf8; }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>" class="active">Student Profile</a>
        </nav>
        <div class="header-row">
            <h1>Student Profile</h1>
            <span class="badge">Nakapasok kana sa aking info</span>
        </div>

        <div class="row"><span>Student ID</span><span><?= $student_id ?></span></div>
        <div class="row"><span>Name</span><span><?= $name ?></span></div>
        <div class="row"><span>Course</span><span><?= $course ?></span></div>
        <div class="row"><span>Year Level</span><span><?= $year ?></span></div>
        <div class="row"><span>Section</span><span><?= $section ?></span></div>
        <div class="row"><span>Email</span><span><?= $email ?></span></div>
        <div class="row"><span>Address</span><span><?= $address ?></span></div>
        <div class="row"><span>Contact</span><span><?= $contact ?></span></div>
        <div class="row"><span>Skills</span><span><?= $skill ?></span></div>
        <div class="row"><span>Hobbies</span><span><?= $hobbies ?></span></div>
        <div class="row"><span>Social Media</span><a href="<?= $socmed ?>" target="_blank">Facebook</a></div>
    </div>
</body>
</html>