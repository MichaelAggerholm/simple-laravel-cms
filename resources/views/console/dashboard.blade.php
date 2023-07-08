<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js"></script>
        <title>Dashboard</title>
    </head>
    <body>

        <header class="w3-padding">
            <h1 class="w3-text-red">Project Dashboard</h1>

            <!-- if user is logged in, show welcome message with user firstname and lastname from auth -->
            @if (auth()->check())
                <p>Welcome, {{ auth()->user()->first }} {{ auth()->user()->last }} | 
                <a href="/console/logout">Log out</a> | 
                <a href="/console/dashboard">Dashboard</a> | 
                <a href="/">Return to homepage</a>
            </p>
                
                
            @endif
            <!-- else user is not logged in, return to "/" -->
            @if (!auth()->check())
                <p><a href="/">Return to homepage</a></p>
            @endif

        </header>

        <hr>

        <section class="w3-padding">

            <ul id="dashboard">
                <li><a href="/console/projects/list">Manage projects</a></li>
                <li><a href="/console/types/list">Manage types</a></li>
                <li><a href="/console/users/list">Manage users</a></li>
            </ul>

        </section>

    </body>
</html>