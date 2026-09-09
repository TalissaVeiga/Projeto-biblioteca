<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Livro</title>
</head>
<body>

    <h1>Cadastrar Livro</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label for="title">Título:</label>
        <input type="text" name="title" id="title">

        <br><br>

        <label for="genre">Gênero:</label>
        <input type="text" name="genre" id="genre">

        <br><br>

        <label for="situation">Situação:</label>
        <input type="text" name="situation" id="situation">

        <br><br>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description"></textarea>

        <br><br>

        <label for="author_id">Autor:</label>
        <select name="author_id" id="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">
                    {{ $author->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>
