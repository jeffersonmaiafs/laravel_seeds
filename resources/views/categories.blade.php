<h1>Exemplo 01 - Categories</h1>


<ul>
    
    @foreach($categories as $category)
        Nome da categoria:      <li>{{$category->name}}</li>
        Descri��o da categoria: <li>{{$category->description}}</li>
        <br/>
        <br/>
    @endforeach
    
    
    
</ul>