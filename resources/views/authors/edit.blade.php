<!DOCTYPE html>
<html>
<head>
    <title>Editar Autor</title>
</head>
<body>

    <h1>Editar Autor</h1>

    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $author->name }}">

        <br><br>

        <label for="nationality">Nacionalidade:</label>
        <input type="text" name="nationality" id="nationality" value="{{ $author->nationality }}">

        <br><br>

        <button type="submit">Salvar alterações</button>
    </form>

</body>
</html>