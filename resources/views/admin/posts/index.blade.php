@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Azioni</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    <tr>
                        <th scope="row">{{ $post->id}}</th>
                        <td>{{ $post->titolo}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Show</a>
                            <a href="" class="btn btn-secondary">Edit</a>
                            <form action="">
                                @call_user_func
                            </form>
                        </td>
                        
                    </tr>
                    
                @endforeach
                
                
            </tbody>
        </table>

    </div>
    
@endsection