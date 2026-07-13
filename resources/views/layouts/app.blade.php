<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChainPulse</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<nav style="background:#0d6efd;padding:15px;">

    <a href="{{ route('dashboard') }}">Dashboard</a> |

    <a href="{{ route('weather') }}">Weather</a> |

    <a href="{{ route('currency') }}">Currency</a> |

    <a href="{{ route('news') }}">News</a> |

    <a href="{{ route('ports') }}">Ports</a>

</nav>

<div style="padding:20px">

    @yield('content')

</div>

</body>
</html>