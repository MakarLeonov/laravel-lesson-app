<!-- наследуем вёрстку из компонента layout.blade.php -->
@extends('layout')

<!-- и вставляем в неё данную секцию с записями -->
@section('content')
    <!-- если прилетевший с контроллера список записей не пуст, выовдим следующее -->
    @if(count($users))
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- пробегаемся по списку и выводим данные в таблицу -->
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>J{{ $user->name }}</td>
                        <td>j{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            {{ $users->appends(['s' => request()->s])->links() }}
            


        </div><!-- ./table-responsive-->

    @else

        <p>Записей не найдено!</p>

    @endif
@endsection