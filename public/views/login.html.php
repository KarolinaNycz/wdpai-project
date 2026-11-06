
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <main>
        <section>
            <h1><?= htmlspecialchars($formHeading) ?></h1>
            <form action="/dashboard" method="get">
                <label for="email">Adres e-mail</label>
                <input id="email" name="email" type="email" required>
                <label for="password">Hasło</label>
                <input id="password" name="password" type="password" required>
                <button type="submit">Zaloguj się</button>
            </form>
            <a href="/">Wróć na stronę główną</a>
        </section>
    </main>
</body>
</html>
