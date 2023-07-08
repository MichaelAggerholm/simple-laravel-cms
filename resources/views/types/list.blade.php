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

        <!-- if session has message, show message -->
        @if (session()->has('message'))
            <div class="w3-padding w3-margin-top w3-margin-bottom">
                <div class="w3-red w3-center w3-padding">
                    {{ session()->get('message') }}
                </div>
            </div>
        @endif

        <section class="w3-padding">

            <h2>Manage types</h2>

            <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
                <tr class="w3-red">
                    <th></th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>

                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->title }}</td>
                        <td><a href="/console/types/edit/{{ $type->id }}">Edit</a></td>
                        <td><a href="/console/types/delete/{{ $type->id }}">Delete</a></td>
                    </tr>
                @endforeach
            </table>

            <a href="/console/types/add" class="w3-button w3-green">New type</a>

        </section>

</body>
</html>