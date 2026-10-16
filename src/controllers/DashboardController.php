<?php

require_once __DIR__ . '/AppController.php';

final class DashboardController extends AppController
{
    public function index(): void
    {
        $this->render('login', [
            'pageTitle' => 'Dashboard',
        ]);
    }
}