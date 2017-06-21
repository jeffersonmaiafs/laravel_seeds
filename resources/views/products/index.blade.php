
@extends('app')
@section('content')

<div class='container'>

    <h1>Products</h1>
    <a href="{{  route('products.create')  }}" class="btn btn-primary">
        New Products
    </a>
    
    </br>
    </br>
    <table class='table'>

        <tr>
            <th>ID          </th>
            <th>Name        </th>
            <th>Description </th>
            <th>Prince </th>
            <th>Featured </th>
            <th>Recommend </th>
            <th>Category </th>
            <th>Action    </th>
        </tr>    

        @foreach($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>    
            <td>{{$p->description}}</td>    
            <td>{{$p->prince}}</td>    
            <td>{{$p->featured}}</td>    
            <td>{{$p->recommend}}</td>    
            <td>{{$p->category->name}}</td>
            <td>
                <a href="{{ route('products.destroy',['id'=>$p->id]) }}">
                    
                    <span class="glyphicon glyphicon-remove-circle" style="color:red; font-size:20px"></span>
                </a>
                
                {{"   |    "}} 
                
                <a href="{{ route('products.edit',['id'=>$p->id]) }}">
                    
                    <span class="glyphicon glyphicon-edit" style="color:#66afe9; font-size:20px"></span>
                </a>
            </td>
        </tr>
       
        @endforeach

    </table>  
   <!-- PARA CRIAR A PAGINAÇÃO UTILIZE O PRINCIPAL PRODUCTS E NÃO O APELIDO PRODUCT. NÃO FUNCIONA SE COLOCAR O APELIDO-->
   {!! $products->render() !!}
   <!-- PARA CRIAR A PAGINAÇÃO -->
   
</div>

@endsection