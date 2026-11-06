<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <header>
        <nav aria-label="Główna nawigacja">
            <a href="/">ProjectFlow</a>
            <a href="/login">Zaloguj się</a>
        </nav>
    </header>
    <main>
        <section>
            <h1><?= htmlspecialchars($heading) ?></h1>
            <p>Planuj pracę, kontroluj postęp i przeglądaj najważniejsze informacje o projektach.</p>
            <a href="/dashboard">Przejdź do dashboardu</a>
        </section>
    </main>
    <footer><p>ProjectFlow</p></footer>
</body>
</html>
