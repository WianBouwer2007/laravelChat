<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Messages</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>


<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                        
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form><br><br>
                    @endguest
                    <a class="no-underline hover:underline" href="{{ url('/messages') }}">Messages</a>
                    <a class="no-underline hover:underline" href="{{ url('/home') }}">Home</a>
                    <a class="no-underline hover:underline" href="{{ url('/messages/create') }}">Create Messages</a>
                </nav>
            </div>
        </header>

        @yield('content')
    </div>

    
    @foreach ($messages as $key => $message)

        <div>
            <p style="text-align:center;padding-bottom:10px;padding-top:10px;margin-top:10px;">{{ $message['name'] }}</p>
        </div>
        <div>
        <p style="text-align:center;padding-bottom:10px;">{{ $message['content'] }}
</p>
<form action="{{ route('messages.destroy', ['message' => $message->id] ) }}" method="POST">
    @csrf
    @method('DELETE')
<p style="text-align:center;padding-bottom:10px;border-bottom:1px solid black;"><button type="submit" style=" background: #d46464;color: white;padding: 10px;border-radius: 10px;" value="Delete" >Delete</button></p>
</form>
    </div>
    @endforeach

    @empty($messages)
        <div>There are no posts to display</div>
    @endempty
</body>
</html>