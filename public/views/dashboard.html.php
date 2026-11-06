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
            <a href="/projects">Projekty</a>
        </nav>
    </header>
    <main>
        <h1>Dashboard</h1>
        <section aria-labelledby="summary-heading">
            <h2 id="summary-heading">Podsumowanie projektów</h2>
            <article>
                <h3>Aktywne projekty</h3>
                <p><?= $activeProjects ?></p>
            </article>
            <article>
                <h3>Zakończone projekty</h3>
                <p><?= $completedProjects ?></p>
            </article>
        </section>
    </main>
</body>
</html>
