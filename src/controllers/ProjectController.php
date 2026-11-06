<?php

declare(strict_types=1);

namespace App\Controller;

final class ProjectController extends AppController
{
    public function index(): void
    {
        $this->render('projects', [
            'pageTitle' => 'Projekty',
            'projects' => [
                ['id' => 1, 'name' => 'Aplikacja mobilna', 'status' => 'W trakcie'],
                ['id' => 2, 'name' => 'Nowa strona WWW', 'status' => 'Planowany'],
                ['id' => 3, 'name' => 'Panel klienta', 'status' => 'Zakończony'],
            ],
        ]);
    }

    public function show(int $id): void
    {
        $this->render('project', [
            'pageTitle' => 'Szczegóły projektu',
            'projectId' => $id,
            'projectName' => 'Aplikacja mobilna',
        ]);
    }
}
