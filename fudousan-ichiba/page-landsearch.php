<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>

    <script>
        $(function() {

            $(".search-btn").on("click", function() {

                var link = "http://localhost:4023/result?place=" + $(".stext").val();

                window.location.href = link;
            })

        })
    </script>
    エリア <input type="text" class="stext">

    <a class="btn search-btn">検索！</a>
</body>

</html>

