<!DOCTYPE html>
<html>
<head>
    <title>Vince Arthur Melegrito | Student Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: radial-gradient(circle at top left, #052e2b, #0f172a 60%);
            color: #e2e8f0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            max-width: 520px;
            width: 100%;
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(148, 163, 184, 0.15);
            padding: 44px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-bottom: 28px;
        }
        nav a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding-bottom: 4px;
            border-bottom: 2px solid transparent;
            transition: all 0.2s ease;
        }
        nav a:hover, nav a.active {
            color: #34d399;
            border-bottom-color: #34d399;
        }
        .header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }
        h1 {
            font-size: 26px;
            font-weight: 700;
            color: #f1f5f9;
        }
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
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        .info-item {
            background: rgba(15, 23, 42, 0.5);
            padding: 14px 16px;
            border-radius: 10px;
            border-left: 3px solid #34d399;
        }
        .info-item.full { grid-column: 1 / -1; }
        .info-label {
            font-size: 11px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .info-value {
            font-size: 15px;
            color: #e2e8f0;
            font-weight: 500;
            word-break: break-word;
        }
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
        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Student ID</div>
                <div class="info-value"><?= $student_id ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Name</div>
                <div class="info-value"><?= $name ?></div>
            </div>
            <div class="info-item full">
                <div class="info-label">Course</div>
                <div class="info-value"><?= $course ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Year Level</div>
                <div class="info-value"><?= $year ?></div>
            </div>
            <div class="info-item">
                <div class="info-label">Section</div>
                <div class="info-value"><?= $section ?></div>
            </div>
            <div class="info-item full">
                <div class="info-label">Email</div>
                <div class="info-value"><?= $email ?></div>
            </div>
            <div class="info-item full">
                <div class="info-label">Address</div>
                <div class="info-value"><?= $address ?></div>
            </div>
           <div class="info-item">
                <div class="info-label">Contact</div>
                <div class="info-value"><?= $contact ?></div>
            </div>
            <div class="info-item full">
                <div class="info-label">Skills</div>
                <div class="info-value"><?= $skill ?></div>
            </div>
           <div class="info-item full">
                <div class="info-label">Hobbies</div>
            </div>
            <div class="info-item full">
                <div class="info-label">Social Media</div>
                <div class="info-value"><a href="<?= $socmed ?>" target="_blank" style="color:#34d399; text-decoration:none;"><?= $socmed ?></a></div>
            </div>
        </div>
    </div>
</body>
</html>