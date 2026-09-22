<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar Conta</title>
    
    <!-- CSS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ícones do Bootstrap (para o olho na password) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <!-- Container que ocupa 100% da altura do ecrã (vh-100) e centra o conteúdo com Flexbox -->
    <div class="container d-flex align-items-center justify-content-center vh-100">
        
        <!-- Cartão branco com sombra e cantos arredondados -->
        <div class="card border-0 shadow-sm rounded-4" style="width: 100%; max-width: 450px;">
            <div class="card-body p-4 p-sm-5">
                
                <!-- Título -->
                <h3 class="text-center fw-bold mb-4 pb-2" style="color: #212529;">Acessar Conta</h3>

                <form>
                    <!-- Campo de E-mail -->
                    <div class="mb-4">
                        <input type="email" class="form-control py-2 text-secondary" placeholder="Seu e-mail" required>
                    </div>

                    <!-- Campo de Senha com o ícone integrado -->
                    <div class="input-group mb-4">
                        <!-- border-end-0 remove a borda direita para colar com o ícone -->
                        <input type="password" class="form-control py-2 text-secondary border-end-0" placeholder="Sua senha" required>
                        <!-- bg-white e border-start-0 fazem o ícone parecer que está dentro do input -->
                        <span class="input-group-text bg-white border-start-0 text-muted" style="cursor: pointer;">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>

                    <!-- Botão Entrar -->
                    <div class="mb-4">
                        <button type="submit" class="btn btn-success w-100 py-2" style="background-color: #28a745; border-color: #28a745;">
                            Entrar
                        </button>
                    </div>

                    <!-- Link de Esqueceu a senha -->
                    <div class="text-center mt-2">
                        <a href="#" class="text-decoration-none text-secondary small">Esqueceu a senha?</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>