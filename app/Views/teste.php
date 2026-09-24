<!-- PRIMEIRA TELA -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta de Teste</title>
    
    <!-- CSS e Ícones do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <div class="container d-flex align-items-center justify-content-center vh-100">
        
        <!-- max-width restringe o estiramento em telas grandes para manter a proporção da referência -->
        <div class="card border-0 shadow-sm rounded-4" style="width: 100%; max-width: 360px;">
            
            <div class="card-body p-4 d-flex flex-column align-items-center">
                
                <!-- Cor de fundo customizada para o amarelo da faixa -->
                <div class="w-100 text-dark text-center py-2 fw-bold rounded-3 mb-4 fs-6" style="background-color: #f6b900;">
                    Conta de Teste
                </div>

                <!-- Tamanho do círculo fixado (110px) para garantir proporção simétrica -->
                <div class="mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 110px; height: 110px; background-color: #e6f0fa;">
                    <i class="bi bi-person-fill text-primary display-1" style="line-height: 1;"></i>
                </div>

                <!-- Cor do texto customizada para o azul escuro da imagem -->
                <h3 class="fw-bold mb-1 fs-3" style="color: #0b2559;">Ana Silva</h3>
                
                <p class="text-muted mb-3 fs-6">Desenvolvedora Web</p>

                <p class="text-center text-dark mb-4 fs-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <div class="d-flex gap-2 justify-content-center w-100 mb-1">
                    
                    <button class="btn btn-primary rounded-pill px-3 py-2 fw-semibold border-0 fs-6" style="background-color: #0d6efd;">
                        Mensagem
                    </button>
                    
                    <!-- Cor de fundo customizada para igualar ao verde opaco da referência -->
                    <button class="btn btn-success rounded-pill px-3 py-2 fw-semibold border-0 fs-6" style="background-color: #389552;">
                        Conectar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript do Bootstrap -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>