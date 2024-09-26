<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Chats</title>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Bonjour</h1>
    <form action="/cats" method="post">
        @csrf
        <label for="price">prix</label>
        <input value ="{{old('price')}}" type="text" id="price" name="price" >
        @error('price') {{$message}} @enderror

        <label for="name">Nom</label>
        <input value ="{{old('name')}}" type="text" id="name" name="name" >
        @error('name') {{$message}} @enderror

        <label for="desc">description</label>
        <input value ="{{old('desc')}}" type="text" id="desc" name="desc" required>

        <label for="image">image</label>
        <input value ="{{old('image')}}" type="text" id="image" name="image">

        <label for="birth_date">date d'aniversaire</label>
        <input value ="{{old('birth_date')}}" type="date" id="birth_date" name="birth_date">
        <input type="submit" value="ajouter">
    </form>

    <a href="/cats">Page d'accueil
        <i class="fa-solid fa-arrow-rotate-left fa-xl"></i>
    </a>
</div>


</body>
</html>
