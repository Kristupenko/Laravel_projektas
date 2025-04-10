@foreach ($students as $student)
<tr>
    <td>{{ $student->name }}</td>
    <td>{{ $student->surname }}</td>
    <td>{{ $student->address }}</td>
    <td>{{ $student->phone }}</td>
    <td>{{ $student->city->name }}</td>
    <td>
        <form action="{{ route('students.restore', $student->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Atkurti</button>
        </form>
    </td>
    <td>
        <form action="{{ route('students.forceDelete', $student->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Visiškai ištrinti</button>
        </form>
    </td>
</tr>
@endforeach

