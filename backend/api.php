<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Status</title>
    <style>

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 28px;
        }

        p {
            color: #555;
            line-height: 1.6;
            font-size: 18px;
        }

        .badge {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Xin chào</h1>
        <h1>🚀 Đây là Backend PHP</h1>
        <p>Code đã được update tự động qua GitHub Actions!</p>
        
        <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = date('H:i:s d/m/Y');
            echo "<div class='badge'>Server Time: $time</div>";
        ?>
    </div>

</body>
</html>