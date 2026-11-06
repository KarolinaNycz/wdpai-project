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
