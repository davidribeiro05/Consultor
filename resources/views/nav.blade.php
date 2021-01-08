<div class="container">
    <nav class="navbar navbar-light p-3">
        <div class="d-flex justify-content-start mt-4">
            <a href="/" class="mr-2">
                <i class="far fa-file" style="color: #818a87; font-size: 2rem;"></i>
            </a>
            <label for="save" class="mr-2">
                <i class="far fa-save" style="color: #2b9348; font-size: 2rem; cursor: pointer"></i>
            </label>
            @if(!empty($consultant->id))
                <a href="/excluir/{{$consultant->id}}" class="mr-2"
                   onclick="return confirm('Tem certeza que deseja excluir esse registro?')">
                    <i class="fas fa-trash" style="color: #ef233c; font-size: 2rem;"></i>
                </a>
            @endif
        </div>
    </nav>
</div>
