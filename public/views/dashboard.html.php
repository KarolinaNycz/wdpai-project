<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <header class="site-header">
        <nav class="site-nav" aria-label="Główna nawigacja">
            <a class="site-logo" href="/">ProjectFlow</a>
            <div class="site-nav__links">
                <a href="/">Start</a>
                <a class="is-active" href="/dashboard" aria-current="page">Dashboard</a>
                <a href="/projects">Projekty</a>
                <a href="/login">Wyloguj</a>
            </div>
        </nav>
    </header>
    <main class="dashboard">
        <header class="dashboard__heading">
            <h1>Dashboard</h1>
            <p>Podsumowanie projektów</p>
        </header>

        <section class="summary-grid" aria-label="Podsumowanie projektów">
            <article class="summary-card summary-card--active">
                <p class="summary-card__value"><?= $activeProjects ?></p>
                <h2>Aktywne projekty</h2>
            </article>
            <article class="summary-card summary-card--completed">
                <p class="summary-card__value"><?= $completedProjects ?></p>
                <h2>Zakończone projekty</h2>
            </article>
        </section>

        <section class="recent-projects" aria-labelledby="recent-projects-heading">
            <h2 id="recent-projects-heading">Ostatnie projekty</h2>
            <div class="project-grid">
                <?php foreach ($recentProjects as $project): ?>
                    <article class="project-card">
                        <h3><?= htmlspecialchars($project['name']) ?></h3>
                        <p class="project-card__status project-card__status--<?= $project['statusClass'] ?>">
                            Status: <?= htmlspecialchars($project['status']) ?>
                        </p>
                        <a href="/projects/<?= $project['id'] ?>">Zobacz szczegóły</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</body>
</html>
