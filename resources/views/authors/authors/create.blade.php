<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Autor</title>
</head>
<body>

    <h1>Cadastrar Autor</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name">

        <br><br>

        <label for="nationality">Nacionalidade:</label>
        <input type="text" name="nationality" id="nationality">

        <br><br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>