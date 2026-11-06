<?php

declare(strict_types=1);

namespace App\Controller;

final class DashboardController extends AppController
{
    public function index(): void
    {
        $this->render('dashboard', [
            'pageTitle' => 'Dashboard',
            'activeProjects' => 2,
            'completedProjects' => 1,
            'recentProjects' => [
                ['id' => 1, 'name' => 'Aplikacja mobilna', 'status' => 'W trakcie', 'statusClass' => 'in-progress'],
                ['id' => 2, 'name' => 'Nowa strona WWW', 'status' => 'Planowany', 'statusClass' => 'planned'],
                ['id' => 3, 'name' => 'Panel klienta', 'status' => 'Zakończony', 'statusClass' => 'completed'],
            ],
        ]);
    }

    public function login(): void
    {
        $this->render('login', [
            'pageTitle' => 'Logowanie',
            'formHeading' => 'Zaloguj się do ProjectFlow',
        ]);
    }
}
