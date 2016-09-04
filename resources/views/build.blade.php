<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            @if ($channel==='docs')
                <p>
                 项目文档正在建设中,敬请期待
                </p>
                <ul>
                    <li>价值观产品文档</li>
                    <li>文档产品文档</li>
                    <li>个人介绍产品文档</li>
                    <li>日志产品文档</li>
                    <li>阅读产品文档</li>
                    <li>推荐产品文档</li>
                    <li>人脉产品文档</li>
                </ul>
            @endif
            @if ($channel==='introduction')
                个人介绍,品牌建设,成长记录正在建设中
            @endif
            @if ($channel==='anti-cheat-guide')
                骗术公开,原理,机制,防骗指南
            @endif
            @if ($channel==='value')
                价值观塑造,概念定义项目正在建设中
            @endif
            @if ($channel==='post')
                个人日志管理项目正在建设中
            @endif
            @if ($channel==='read')
                阅读项目正在建设中
            @endif
            @if ($channel==='recommend')
                个人推荐【工具、技巧】项目正在建设中
            @endif
            @if ($channel==='contact')
                个人社交人脉项目建设中
            @endif
        </div>
    </div>
</div>
</body>
</html>
