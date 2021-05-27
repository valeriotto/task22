<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Кодировка веб-страницы -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP MVC</title>
</head>

<body>
    <header>
        <nav>
            <a href="main">Главная</a>
            <a href="portfolio">Портфолио</a>
            <a href="about">Контакты</a>
        </nav>
    </header>
    <div class="content">
        <?php include $contentView; ?>
    </div>
</body>

</html>