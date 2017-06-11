<h1>Exemplo 02 - Products</h1>


<ul>
    
    @foreach($products as $products)
        <li>{{$products->name}}</li>
        <li>{{$products->description}}</li>
        <li>{{$products->prince}}</li>
        <br/>
        <br/>
    
    @endforeach
    
    
    
</ul>