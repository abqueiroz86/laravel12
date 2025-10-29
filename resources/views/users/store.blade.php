@extends('layouts.master')
@section('page_name','Cadastrar Usuário')
@section('content')

<style>
    .form-container {
        max-width: 600px;
        margin: 40px auto;
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .form-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 40px;
        text-align: center;
        color: white;
    }

    .form-header h2 {
        margin: 0;
        font-size: 2em;
        font-weight: 700;
    }

    .form-header p {
        margin: 10px 0 0;
        opacity: 0.9;
    }

    .form-body {
        padding: 40px;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #667eea;
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        color: #764ba2;
        transform: translateX(-5px);
    }

    .alert {
        padding: 15px 20px;
        border-radius: 12px;
        margin-bottom: 25px;
        animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert-danger {
        background: #fee;
        border-left: 4px solid #dc3545;
        color: #721c24;
    }

    .alert ul {
        margin: 8px 0 0 20px;
        padding: 0;
    }

    .alert li {
        margin: 5px 0;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        font-size: 0.95em;
    }

    .form-group label span {
        color: #dc3545;
    }

    .form-control {
        width: 100%;
        padding: 14px 18px;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        font-size: 1em;
        font-family: inherit;
        transition: all 0.3s ease;
        background: #fafafa;
    }

    .form-control:focus {
        outline: none;
        border-color: #667eea;
        background: white;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-control:hover {
        border-color: #667eea;
        background: white;
    }

    .file-input-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 100%;
    }

    .file-input-wrapper input[type=file] {
        position: absolute;
        left: -9999px;
    }

    .file-input-label {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 14px 18px;
        border: 2px dashed #e0e0e0;
        border-radius: 12px;
        background: #fafafa;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #666;
        font-weight: 500;
    }

    .file-input-label:hover {
        border-color: #667eea;
        background: #f8f9ff;
        color: #667eea;
    }

    .file-name {
        margin-top: 10px;
        padding: 8px 12px;
        background: #f8f9ff;
        border-radius: 8px;
        color: #667eea;
        font-size: 0.9em;
        display: none;
    }

    .file-name.show {
        display: block;
    }

    .btn-submit {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 1.1em;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        margin-top: 10px;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
    }

    .btn-submit:active {
        transform: translateY(0);
    }

    .input-icon {
        position: relative;
    }

    .input-icon input {
        padding-left: 45px;
    }

    .input-icon::before {
        content: attr(data-icon);
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2em;
        color: #999;
        pointer-events: none;
    }

    @media (max-width: 768px) {
        .form-container {
            margin: 20px;
        }

        .form-header,
        .form-body {
            padding: 30px 20px;
        }

        .form-header h2 {
            font-size: 1.6em;
        }
    }
</style>
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
                        required
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
                        required
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
                        required
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