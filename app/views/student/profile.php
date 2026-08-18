<!DOCTYPE html>
<html>
<head>
    <title>ICTBins | Student Profile</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #0f172a; color: #e2e8f0; margin: 0; padding: 40px; }
        .card { max-width: 500px; margin: auto; background: #1e293b; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.4); }
        h1 { color: #34d399; }
        nav a { color: #34d399; text-decoration: none; margin-right: 15px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .info p { margin: 6px 0; }
        .badge { display: inline-block; background: #34d399; color: #0f172a; padding: 3px 10px; border-radius: 20px; font-size: 12px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
        <span class="badge">Nakapasok kana sa aking info maraming salamat</span>
        <h1>Student Profile</h1>
        <div class="info">
            <p><strong>Student ID:</strong> <?= $student_id ?></p>
            <p><strong>Name:</strong> <?= $name ?></p>
            <p><strong>Course:</strong> <?= $course ?></p>
            <p><strong>Year Level:</strong> <?= $year ?></p>
            <p><strong>Section:</strong> <?= $section ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Address:</strong> <?= $address ?></p>
            <p><strong>Contact:</strong> <?= $contact ?></p>
            <p><strong>Skill:</strong> <?= $skill ?></p>
            <p><strong>Hobbies:</strong> <?= $hobbies ?></p>
        </div>
    </div>
</body>
</html>