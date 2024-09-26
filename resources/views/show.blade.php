<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
    <table>
        <thead>
        <tr>
            <th>Photo</th>
            <th>Id</th>
            <th>Prix</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Anniversaire</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><img src="{{$cat->image}}" width="250" height="280"/></td>
            <td><p>{{ $cat->price }}</p></td>
            <td><p>{{ $cat->name }}</p></td>
            <td><p>{{ $cat->desc }}</p></td>
            <td><p>{{ $cat->birth_date }}</p></td>
            <td>
                <a href="/cats">Retour</a>
            </td>
        </tr>
        </tbody>
    </table>
</html>
