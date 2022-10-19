<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         
        
    </head>
    <body >
          <div style=" position:absolute; top:50%;left:35%;display:flex with:100%">
               <a style=" text-decoration:none; font-size:x-large ; color:white; margin-right:5px; padding-right:5px; background-color:blueviolet;border-radius: 4px 4px 5px  " href="{{route('produits.create')}}">creer un produit</a>
               <a style=" text-decoration:none; margin-left:5px;  font-size:x-large ; color:green; padding-right:5px;background-color:blueviolet;border-radius: 4px 4px 5px; color:white " href="{{route('produits.index')}}">Liste produits</a>
          </div>
    </body>
</html>
