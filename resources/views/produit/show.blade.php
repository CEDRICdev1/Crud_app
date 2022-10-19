<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-purple-700 text-opacity-100 ">SHOW PRODUCT</h1>
    <div  class="bg-purple-600 bg-opacity-25 border-solid border-4 border-light-blue-500 divide-y divide-light-blue-400 ...">
        <h2>{{$produit->libelle}}</h2>
         <p>{{$produit->prix_ut}}</p>
         <p>{{$produit->quantite}}</p>
         <div>
            <a class="bg-green-500 ..." href="{{route('produits.edit',$produit->id)}}">modifier</a>
            <form   action="{{route('produits.destroy',$produit->id)}}" method="post">
            @csrf
            @method('DELETE')
                <input  type="submit" value="Suprimer">
            </form>
            
    
         </div>
    </div>
</body>
</html>