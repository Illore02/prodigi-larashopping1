@extends ('layouts.app')


@section ('head_title', 'Lista post')

@section ('content')

<h1>
    Lista post
</h1>
<div class="mb-3">
<a href="{{route('posts.create')}}"class="btn btn-primary">Aggiungi post</a>
</div>
@if (session('message') )
    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome post</th>
      <th scope="col">Categoria post</th>
    </tr>
  </thead>
    <tbody>
      @foreach ($posts as $index => $posts)
      <tr>
        <th>{{$index+1}}</th>
        <td>{{$posts ->title}}</td>
        <td><a href="{{route('categories.show',$posts->category)}}" class="btn">{{$posts->category->name }}</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <script>
  $('.confirm_delete').click(e=>{
      if (!confirm ('Sei sicuro di cancellare?')){
        e.preventDefault();
      }
    });
  </script>
@endsection