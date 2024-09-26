<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<h1>Bonjour</h1>  <a href="/cats/create">Ajouter un chat
    <i class="fa-solid fa-plus fa-lg"></i>
</a>
@foreach($cats as $cat)
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Prix</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Anniversaire</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><p>{{ $cat->id }}</p></td>
            <td><p>{{ $cat->price }}</p></td>
            <td><p>{{ $cat->name }}</p></td>
            <td><p>{{ $cat->desc }}</p></td>
            <td><p>{{ $cat->birth_date }}</p></td>
            <td>
             <a href="/cats/{{$cat->id}}">Voir</a>
            </td>
        </tr>
        </tbody>
    </table>
@endforeach

</html>
