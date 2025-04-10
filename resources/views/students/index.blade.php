@extends('layouts.layout')

@section('title', 'Studentų sąrašas')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Studentų sąrašas</h2>
        <a href="{{ route('students.create') }}" class="btn btn-success">Pridėti studentą</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Adresas</th>
                <th>Telefonas</th> <!-- Pridėtas telefono stulpelis -->
                <th>Miestas</th>
                <th>Veiksmai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone }}</td> <!-- Rodo telefono numerį -->
                    <td>{{ $student->city->name }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Redaguoti</a>
                        
                        <!-- Standartinis ištrynimas -->
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Pašalinti</button>
                        </form>
                        
                        <!-- Visiškas ištrynimas -->
                        @if ($student->trashed())
                            <form action="{{ route('students.forceDelete', $student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning btn-sm">Visam laikui ištrinti</button>
                            </form>

                            <!-- Atkūrimas -->
                            <form action="{{ route('students.restore', $student->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Atkurti</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $students->links() }} <!-- Pagination -->
@endsection
