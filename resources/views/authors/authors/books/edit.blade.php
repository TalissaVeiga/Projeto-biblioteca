<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
</head>
<body>

    <h1>Editar Livro</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $book->title }}">

        <br><br>

        <label for="genre">Gênero:</label>
        <input type="text" name="genre" id="genre" value="{{ $book->genre }}">

        <br><br>

        <label for="situation">Situação:</label>
        <input type="text" name="situation" id="situation" value="{{ $book->situation }}">

        <br><br>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description">{{ $book->description }}</textarea>

        <br><br>

        <label for="author_id">Autor:</label>
        <select name="author_id" id="author_id">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}"
                    @if ($author->id == $book->author_id) selected @endif>
                    {{ $author->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Salvar alterações</button>
    </form>

</body>
</html>