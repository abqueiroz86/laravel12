@extends('layouts.master')

@section('content')
    <div class="features">
        <div class="feature">
            <div class="feature-icon">👤</div>
            <h3>Cadastro Rápido</h3>
            <p>Registre novos usuários em poucos segundos com nosso formulário intuitivo</p>
        </div>

        <div class="feature">
            <div class="feature-icon">🔒</div>
            <h3>Segurança</h3>
            <p>Seus dados protegidos com os mais altos padrões de segurança</p>
        </div>

        <div class="feature">
            <div class="feature-icon">📊</div>
            <h3>Gerenciamento</h3>
            <p>Visualize e gerencie todos os usuários cadastrados em um só lugar</p>
        </div>
    </div>

    <div class="cta-section">
        <h2 style="color: #333; margin-bottom: 20px;">Comece agora mesmo!</h2>
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Criar Nova Conta</a>
        <a href="#login" class="btn btn-secondary">Fazer Login</a>
    </div>
@endsection