@foreach ($books as $book)
    <p>
        {{ $book->title }} - {{ $book->author->name }}

        <a href="{{ route('books.edit', $book) }}">Editar</a>

        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')

            <button type="submit">Excluir</button>
        </form>
    </p>
@endforeach