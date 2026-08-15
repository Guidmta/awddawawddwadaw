<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEELMTA - User Control Panel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0b0e14;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(11, 14, 20, 0.85);
            z-index: 1;
        }

        .ucp-wrapper {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }

        .ucp-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .ucp-logo {
            width: 60px;
            height: auto;
            margin-bottom: 12px;
            object-fit: contain;
        }

        .ucp-brand {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
            color: #a0a5b5;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        h1 {
            font-size: 22px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .ucp-card {
            background-color: #121722;
            border: 1px solid #1a202c;
            border-radius: 10px;
            width: 100%;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        .card-top-bar {
            padding: 15px 20px;
            border-bottom: 1px solid #1a202c;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            color: #a0a5b5;
            font-weight: 600;
        }

        .card-top-bar span {
            color: #ffffff;
            font-weight: 700;
        }

        .card-body {
            padding: 25px 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            color: #a0a5b5;
            margin-bottom: 8px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .input-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-box input {
            width: 100%;
            padding: 12px 15px 12px 42px;
            background-color: #0b0e14;
            border: 1px solid #1a202c;
            border-radius: 6px;
            color: #ffffff;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s;
        }

        .input-box input:focus {
            border-color: #28a745;
        }

        .input-icon {
            position: absolute;
            left: 14px;
            color: #a0a5b5;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
            font-size: 13px;
            color: #a0a5b5;
            cursor: pointer;
        }

        .checkbox-group input {
            accent-color: #28a745;
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .btn-login {
            width: 100%;
            background-color: #28a745;
            color: #ffffff;
            padding: 12px;
            border-radius: 6px;
            border: none;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background 0.2s, transform 0.2s;
        }

        .btn-login:hover {
            background-color: #218838;
        }

        .ucp-footer {
            margin-top: 25px;
            font-size: 12px;
            color: #6c757d;
            text-align: center;
            letter-spacing: 0.5px;
        }

        .back-home {
            display: inline-block;
            margin-top: 15px;
            color: #a0a5b5;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.2s;
        }

        .back-home:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="ucp-wrapper">
        
        <div class="ucp-header">
            <img src="./logo.png" alt="SEELMTA Logo" class="ucp-logo">
            <div class="ucp-brand">SEELMTA</div>
            <h1>User Control Panel</h1>
        </div>

        <div class="ucp-card">
            <div class="card-top-bar">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>
                FIÓK &nbsp;<span>Belépés</span>
            </div>
            
            <div class="card-body">
                <form action="login.php" method="POST">
                    
                    <div class="form-group">
                        <label for="username">Felhasználónév</label>
                        <div class="input-box">
                            <span class="input-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </span>
                            <input type="text" id="username" name="username" required placeholder="Felhasználónév">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Jelszó</label>
                        <div class="input-box">
                            <span class="input-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            </span>
                            <input type="password" id="password" name="password" required placeholder="Jelszó">
                        </div>
                    </div>

                    <label class="checkbox-group">
                        <input type="checkbox" name="remember"> Adatok megjegyzése
                    </label>

                    <button type="submit" class="btn-login">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>
                        Bejelentkezés
                    </button>

                </form>
            </div>
        </div>

        <a href="index.html" class="back-home">← Vissza a főoldalra</a>

        <div class="ucp-footer">
            © 2026 SEELMTA · seelmta.hu
        </div>

    </div>

</body>
</html>