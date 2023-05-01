@extends('todo.dashboard')

@section('todo-content')

    <form method="post" action="{{ route('todo.store') }}" class="my-24">
        @csrf
        <div class="flex flex-col w-2/4 justify-center mx-auto px-5 space-y-4">
            <input type="text" placeholder="Enter A Todo" name="title"/>
            <textarea name="description" placeholder="Enter Descirption" id="description" cols="30" rows="10"></textarea>
            <button type="submit" class="text-white w-60 mx-auto bg-blue-900"> Add Todo </button>
        </div>
    </form>
@endsection