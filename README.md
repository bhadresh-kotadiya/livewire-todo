<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Dynamic TODO List with Livewire and Laravel</h1>
    <p>This project demonstrates how to build a dynamic TODO list application using Laravel and Livewire. Livewire is a full-stack framework for Laravel that allows you to build dynamic interfaces using only PHP.</p>
    <h2>Getting Started</h2>
    <h3>Prerequisites</h3>
    <ul>
        <li>Composer (PHP Dependency Manager)</li>
        <li>PHP >= 7.4</li>
        <li>MySQL or any other compatible database</li>
    </ul>
    <h3>Installation</h3>
    <ol>
        <li>Clone the repository:</li>
    </ol>
    <pre><code>git clone https://github.com/your-username/todo-list-livewire.git
cd todo-list-livewire
    </code></pre>
    <ol start="2">
        <li>Install PHP dependencies using Composer:</li>
    </ol>
    <pre><code>composer install
    </code></pre>
    <ol start="3">
        <li>Copy the <code>.env.example</code> file to <code>.env</code> and configure your database credentials:</li>
    </ol>
    <pre><code>cp .env.example .env
    </code></pre>
    <p>Update the <code>.env</code> file with your database credentials:</p>
    <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
    </code></pre>
    <ol start="4">
        <li>Generate an application key:</li>
    </ol>
    <pre><code>php artisan key:generate
    </code></pre>
    <ol start="5">
        <li>Run database migrations to create necessary tables:</li>
    </ol>
    <pre><code>php artisan migrate
    </code></pre>
    <h2>Usage</h2>
    <ol>
        <li>Start the development server:</li>
    </ol>
    <pre><code>php artisan serve
    </code></pre>
    <ol start="2">
        <li>Open your web browser and visit <code>http://localhost:8000</code> to see the TODO list application in action.</li>
    </ol>
    <h2>Features</h2>
    <ul>
        <li>Add new TODO items dynamically.</li>
        <li>Remove completed TODO items.</li>
        <li>Simple and clean interface powered by Livewire.</li>
    </ul>
</body>
</html>
