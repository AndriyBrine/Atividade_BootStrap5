<!-- TERCEIRA TELA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

    <!-- CSS do Bootstrap 5: Essencial para usar as classes prontas do framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Ícones do Bootstrap: Usado aqui para o ícone de fone de ouvido -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <!-- CONTAINER PRINCIPAL -->
    <div class="container d-flex align-items-center justify-content-center p-5">
        <!-- CARD -->
        <div class="card border-0 shadow rounded-3 text-center" style="width: 100%; max-width: 360px;">
            <!-- CORPO DO CARTÃO -->    
            <div class="card-body">
                <!--
                VERSÃO COM ÍCONE DE FONE DE OUVIDO 
                <i class="bi bi-headphones display-1 text-secondary p-4 text-center" style="max-height: 200px;"></i>
                -->
                <!-- VERSÃO COM IMAGEM DE FONE DE OUVIDO -->
                <img src="https://imgs.search.brave.com/vUtMaseTnc6E6uqwID7kh0BtrL-0-Rb4MdbMdkd4BVQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtbmEuc3NsLWlt/YWdlcy1hbWF6b24u/Y29tL2ltYWdlcy9J/LzcxK2tYbk9pTTJM/LmpwZw" alt="Fone Bluetooth Pro" class="img-fluid mt-1" style="max-height: 200px;">
                <h3 class="fw-bold">Fone Bluetooth Pro</h3>
                <p class="text-success fs-4 fw-normal">R$ 199,00</p>
                <p class="fs-6">Alta qualidade de som, cancelamento de ruído. Bateria de longa duração.</p>
            </div>

            <!-- RODAPÉ DO CARTÃO -->
            <hr class="border opacity-50 m-0">

            <!-- BOTÃO CARRINHO -->
            <div class="p-4 bg-light rounded-bottom-3">
                <button class="btn btn-primary p-2 w-100">Adicionar ao Carrinho</button>    
            </div>
    
        </div>

    </div>
    





    <!-- JavaScript do Bootstrap: Necessário para componentes interativos (modais, tooltips, etc.), mesmo que não estejamos usando ativamente aqui -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>