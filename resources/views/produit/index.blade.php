<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @csrf <!-- permet de generer le token automatiquement-->
    <h1>liste des produit</h1>
    @if($messag=Session::get('succes'))
        <p style='color:green'>{{$messag}}</p>
    @endif

     @if($message=Session::get('success'))
        <p style='color:green'>{{$message}}</p>
    @endif
          
    <table class="table-fixed">
  <thead>
    <tr>
      <th class="w-1/2 ...">ID</th>
      <th class="w-1/4 ...">LIBELLE</th>
      <th class="w-1/4 ...">Prix unitaire</th>
      <th class="w-1/4 ...">Quantite</th>
      <th class="w-1/4 ...">Action</th>
    </tr>
  </thead>
  <tbody>
    
  
    </tr>
    @foreach($produit as $p)
 
 <tr class="bg-blue-200">
     <th>{{$p->id}}</th>
     <th>{{$p->libelle}}</th>
     <th>{{$p->prix_ut}} fcfa</th>
     <th>{{$p->quantite}}</th>
     <th><a class="bg-green-500 ..." href="{{route('produits.show',$p->id)}}">show</a></th>
     
 </tr>


@endforeach
  </tbody>
</table>

      
            
    
</body>
</html>