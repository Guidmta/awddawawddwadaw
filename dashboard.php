<?php
session_start();
// Ha nincs bejelentkezve, visszadobjuk a belépéshez
if (!isset($_SESSION['user'])) {
    header("Location: ucp.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEELMTA - Vezérlőpult</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #09060f 0%, #130b1f 50%, #050508 100%);
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .dashboard-container {
            text-align: center;
            background-color: #120e1c;
            border: 1px solid #281d3f;
            border-radius: 10px;
            padding: 40px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        }

        h1 {
            font-size: 24px;
            color: #28a745;
            margin-bottom: 15px;
        }

        p {
            color: #a0a5b5;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .btn-logout {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            display: inline-block;
            transition: background 0.2s;
        }

        .btn-logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <h1>Üdvözlünk a SEELMTA UCP-n, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
        <p>Ez itt még üres, de hamarosan ide építjük be a karakterlapokat, statisztikákat és a többi funkciót!</p>
        <a href="logout.php" class="btn-logout">Kijelentkezés</a>
    </div>

</body>
</html>