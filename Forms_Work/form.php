<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Work</title>

    <style>
        .container{
            margin-left: 30%;
            margin-top: 10%;
        }
        input{
            padding: 0.5rem 0.6rem 0.6rem 0.6rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        button{
            color: white;
            background: black;
            padding: 1rem 2rem 1rem 2rem;
            text-align: center;
            border-radius: 1rem;
            transition: 0.3s;
        }
        button:hover{
            background: #efefef;
            cursor: pointer;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="post.php" method="post">
            <input type="text" name="number" placeholder="Sayı Giriniz.">.<br>
            <button type="submit">Gönder</button>
        </form>
    </div>
</body>
</html>