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

            <form action="/console/login" method="post">
                @csrf

                <div class="w3-margin-bottom">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" />
                    <!-- if email is not valid, show error message -->
                    @error('email')
                        <p class="w3-text-red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w3-margin-bottom">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                    <!-- if password is not valid, show error message -->
                    @error('password')
                        <p class="w3-text-red">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit">Log in</button>

        </section>

    </body>
</html>