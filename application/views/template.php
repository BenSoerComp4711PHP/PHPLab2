<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <title>{title}</title>
    <link rel="stylesheet" href="../../public/css/style.css" type="text/css">
</head>
<body>
<div id="header">
    <div class="section">
        <div class="logo">
            <a href="/welcome">zizurz</a>
        </div>
        <ul>
            {menu}
            <li {class}>
                <a href="{route}">{page}</a>
            </li>
            {/menu}

        </ul>
    </div>
    {banner}
</div>
<div id="body">
    {bodyContent}
</div>
<div id="footer">
    <div>
        <div class="connect">
            <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
            <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
            <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
            <a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
        </div>
        <p>
            &copy; copyright 2023 | all rights reserved.
        </p>
    </div>
</div>
</body>
</html>