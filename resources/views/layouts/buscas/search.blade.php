<div>
    <form action="{{ route('livros.search') }}" method="POST">
        @csrf
        <p>Buscar</p>
        <input type="text" name="search" id="search" placeholder="Digite a busca">
        <button type="submit">Buscar</button>
    </form>
</div>
