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
            <a href="/dashboard">Dashboard</a>
        </nav>
    </header>
    <main>
        <section aria-labelledby="projects-heading">
            <h1 id="projects-heading">Twoje projekty</h1>
            <?php foreach ($projects as $project): ?>
                <article>
                    <h2><?= htmlspecialchars($project['name']) ?></h2>
                    <p>Status: <?= htmlspecialchars($project['status']) ?></p>
                    <a href="/projects/<?= $project['id'] ?>">Zobacz szczegóły</a>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
    <footer><p>ProjectFlow</p></footer>
</body>
</html>
