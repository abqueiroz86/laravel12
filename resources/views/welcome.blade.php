<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro - Bem-vindo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffbb7cff 0%, #ff6208ff 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 900px;
            width: 100%;
            overflow: hidden;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            background: linear-gradient(135deg, #e4a76eff 0%, #d64f00ff 100%);
            padding: 60px 40px;
            text-align: center;
            color: white;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        .content {
            padding: 50px 40px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .feature {
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ffc38bff 0%, #ac4500ff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2em;
        }

        .feature h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .feature p {
            color: #666;
            line-height: 1.6;
        }

        .cta-section {
            text-align: center;
            margin-top: 40px;
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            margin: 10px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1em;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ffc38bff 0%, #ac4500ff 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: white;
            color: #ac4500ff;
            border: 2px solid #ffc38bff;
        }

        .btn-secondary:hover {
            background: #ac4500ff;
            color: white;
        }

        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 0.9em;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }

            .content {
                padding: 30px 20px;
            }

            .features {
                grid-template-columns: 1fr;
            }

            .btn {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 Sistema de Cadastro</h1>
            <p>Gerencie seus usuários de forma simples e eficiente</p>
        </div>

        <div class="content">
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
                <a href="#cadastro" class="btn btn-primary">Criar Nova Conta</a>
                <a href="#login" class="btn btn-secondary">Fazer Login</a>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2025 Sistema de Cadastro. Todos os direitos reservados.</p>
        </div>
    </div>

    <script>
        // Animação suave ao clicar nos botões
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                    alert('Funcionalidade em desenvolvimento!\nEm breve você poderá ' + 
                          (this.textContent.includes('Criar') ? 'criar sua conta' : 'fazer login') + '.');
                }, 100);
            });
        });

        // Efeito parallax suave no header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            const scrolled = window.pageYOffset;
            header.style.transform = `translateY(${scrolled * 0.5}px)`;
        });
    </script>
</body>
</html>