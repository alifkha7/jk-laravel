<html>
    <body>
        <h1>Halo, aku {{ $name }}</h1>
        
        @if ($name == "")
            <h1>Maaf aku tidak punya nama</h1>
        @elseif ($name == "Jong Koding")
            <h1>Halo, aku {{ $name }}</h1>
        @else
            <h1>Halo, aku bukan Jong Koding</h1>
        @endif 

        @switch($name)
            @case("Jong Koding")
                <h1>Halo, aku {{ $name }}</h1>
                @break
            @case("Jong Koding")
                <h1>Halo, aku {{ $name }}</h1>
                @break
            @default
            <h1>Halo, aku bukan Jong Koding</h1>
        @endswitch
    </body>
</html>