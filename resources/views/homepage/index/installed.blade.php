@extends('homepage.layout.master')
@section('homepageTitle', 'WILLKOMMEN | INFINITE CMS')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-size: 200% 200%;
            animation: gradientAnimation 5s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
            max-width: 400px;
            width: 100%;
        }

        .logo {
            width: 150px;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .install-btn {
            background-color: #00c6ff;
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            box-shadow: 0px 15px 20px rgba(0, 198, 255, 0.4);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .install-btn:hover {
            background-color: #0072ff;
            box-shadow: 0px 15px 25px rgba(0, 114, 255, 0.6);
            transform: translateY(-5px);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            p {
                font-size: 1rem;
            }
            .install-btn {
                font-size: 1rem;
                padding: 10px 30px;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Logo: Infinity symbol -->
        <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50">
            <path fill="none" stroke="#ffffff" stroke-width="8" d="M10,25 C10,10 40,10 50,25 C60,40 90,40 90,25 C90,10 60,10 50,25 C40,40 10,40 10,25 Z" />
        </svg>

        <h1>App Not Initialized</h1>
        <p>This application hasn't been initialized yet. Press the button below to install it and get started.</p>
        <button class="install-btn"><a href="{{route('login')}}">Install Application</a></button>
    </div>
</body>
</html>
