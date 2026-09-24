<!-- SEGUNDA TELA -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar Conta</title>
    
    <!-- CSS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ícones do Bootstrap: olho da senha -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <div class="container d-flex align-items-center justify-content-center vh-100">
        
        <div class="card border-0 shadow-sm rounded-4" style="width: 100%; max-width: 450px;">
            <div class="card-body p-4 p-sm-5">
                
                <!-- fs-3 aplicado ao título -->
                <h3 class="text-center fw-bold mb-4 pb-2 fs-3" style="color: #212529;">Acessar Conta</h3>

                <form>
                    <div class="mb-4">
                        <!-- text-secondary removido para corrigir a cor do texto digitado -->
                        <input type="email" class="form-control py-2" placeholder="Seu e-mail" required>
                    </div>

                    <div class="input-group mb-4">
                        <!-- text-secondary removido aqui também -->
                        <input type="password" class="form-control py-2 border-end-0" placeholder="Sua senha" required>
                        <span class="input-group-text bg-white border-start-0 text-muted" style="cursor: pointer;">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>

                    <div class="mb-4">
                        <!-- fs-6 aplicado ao texto do botão; cor ajustada para o verde de referência -->
                        <button type="submit" class="btn btn-success w-100 py-2 fs-6 fw-semibold" style="background-color: #1e994d; border-color: #1e994d;">
                            Entrar
                        </button>
                    </div>

                    <div class="text-center mt-2">
                        <!-- small substituído por fs-6 ou fs-7 (usando utilitários nativos) -->
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