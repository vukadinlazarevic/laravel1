@extends("layout.public")

@section("title")
    Primer nove rute i stranice
@endsection

@section("content")
        <h1>Hello, world!</h1>

        <p>Ime i prezime: {{ $ime }} {{ $prezime }}</p>

        <hr>

        <!-- <p>Users: {{ $users[0]['name'] }}</p>
        <p>Users: {{ $users[1]['name'] }}</p>
        <p>Users: {{ $users[2]['name'] }}</p> -->

        <!-- posto nam treba petlja -> ona se u .blade.php fajlovima pise na sledeci nacin -->
        <h1>Svaki drugi korisnik:</h1>
        <ul>
            @foreach($users as $user) 
                @if ($loop->index % 2 == 0)
                    <li>{{$user['name']}}</li>
                @endif
            @endforeach 
        </ul>

        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>

        <p>Ime i prezime: <span>{{ $employee->getFullName() }}</span> </p>
        <p>Age: {{ $employee->age }}</p>
        <p>Email: {{ $employee->email }}</p>
        
        
        <!-- obavezno moramo da zatvorimo foreach petlju -->
@endsection