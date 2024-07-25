<html>
<head>
    <!-- jQuery 3.7.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Custom CSS/Javascript -->
    <link rel="stylesheet" href="style.css?v=<?=date('YmdHis')?>">
    <script src="common.js?v=<?=date('YmdHis')?>"></script>

    <style>
        aside{
            border: 2px solid;
            background: beige;
            padding: 10px;
        }
    </style>
</head>
<body>
    <button onclick="history.back(1)">back</button>
    <h1>Path: /RPO/index.php</h1>
    <aside>
        <p>
            <strong>$_SERVER[ "HTTP_HOST" ] :</strong>
            <?php echo $_SERVER[ "HTTP_HOST" ]; ?>
        </p>
        <p>
            <strong>$_SERVER[ "REQUEST_URI" ] :</strong>
            <?php echo $_SERVER[ "REQUEST_URI" ]; ?>
        </p>
        <p>
            <strong>$_SERVER[ "QUERY_STRING" ] :</strong>
            <?php echo $_SERVER[ "QUERY_STRING" ]; ?>
        </p>
        <p>
            <strong>$_SERVER[ "PHP_SELF" ] :</strong>
            <?php echo $_SERVER[ "PHP_SELF" ]; ?>
        </p>
        <p>
            <strong>basename( $_SERVER[ "PHP_SELF" ] ) :</strong>
            <?php echo basename( $_SERVER[ "PHP_SELF" ] ); ?>
        </p>
    </aside>

</body>
</html>