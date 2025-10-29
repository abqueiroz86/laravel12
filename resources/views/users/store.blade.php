@extends('layouts.master')
@section('page_name','Cadastrar Usuário')
@section('content')

    <div class="form-body">
        <a href="{{ route('usuarios.index') }}" class="back-link">
            ← Voltar para lista
        </a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>⚠️ Atenção!</strong> Corrija os seguintes erros:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nome Completo <span>*</span></label>
                <div class="input-icon" data-icon="👤">
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-control" 
                        value="{{ old('name') }}"
                        placeholder="Digite o nome completo"
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="email">E-mail <span>*</span></label>
                <div class="input-icon" data-icon="📧">
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-control" 
                        value="{{ old('email') }}"
                        placeholder="exemplo@email.com"
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="password">Senha <span>*</span></label>
                <div class="input-icon" data-icon="🔒">
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control"
                        placeholder="Mínimo 8 caracteres"
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="picture">Foto de Perfil</label>
                <div class="file-input-wrapper">
                    <input 
                        type="file" 
                        id="picture" 
                        name="picture"
                        accept="image/*"
                        onchange="updateFileName(this)"
                    >
                    <label for="picture" class="file-input-label">
                        📷 Escolher arquivo
                    </label>
                </div>
                <div id="fileName" class="file-name"></div>
            </div>

            <button type="submit" class="btn-submit">
                ✓ Cadastrar Usuário
            </button>
        </form>
    </div>

<script>
    function updateFileName(input) {
        const fileNameDiv = document.getElementById('fileName');
        if (input.files && input.files[0]) {
            fileNameDiv.textContent = '📎 ' + input.files[0].name;
            fileNameDiv.classList.add('show');
        } else {
            fileNameDiv.classList.remove('show');
        }
    }
</script>

@endsection