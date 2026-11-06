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
        <article>
            <h1><?= htmlspecialchars($projectName) ?></h1>
            <p>Numer projektu: <?= $projectId ?></p>
            <p>Status: W trakcie</p>
            <section aria-labelledby="tasks-heading">
                <h2 id="tasks-heading">Najbliższe zadania</h2>
                <ul>
                    <li>Przygotować makiety</li>
                    <li>Zbudować widoki HTML</li>
                    <li>Sprawdzić routing</li>
                </ul>
            </section>
        </article>
    </main>
</body>
</html>
