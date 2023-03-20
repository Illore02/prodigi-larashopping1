@extends ('layouts.app')


@section ('head_title', 'HomePage')



@section ('content')
    <h1 style="text-align: center">HomePage</h1>

    <div class= "container row col-12"; style="text-align: center">
        @foreach ($products as $index =>$product)
        <div class="card col-3 m-3" style="width:18rem;">
            <img src={{$product->image}} class="card-img-top" alt="">
            <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <h3 class="card-text">{{$product->price}}</h3>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Acquista ora</a>
        </div>  
        </div> 
        @endforeach
    </div>
@endsection