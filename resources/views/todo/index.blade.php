@extends('todo.dashboard')

@section('todo-content')
    <table class=" w-2/4 mx-auto my-32 ">
        <thead class="bg-white">
            <tr >
                <th align="left">Title</th>
                <th>Desscription</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody class="text-white">
            @if(count($todos)) 
                @foreach ( $todos as $todo)
                    <tr>
                        <td> {{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>
                            <button>
                                edit
                            </button>
                            <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
           @endif
        </tbody>
    </table>
@endsection