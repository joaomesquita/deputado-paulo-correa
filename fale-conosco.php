<?php include "header.php" ?>

<div class="session ">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 bg-light rounded p-5">
                <h2 class="font-25 color-black fw-bold">Nossa Localização</h2>
                <p class="font-18 color-black">Palácio Guaicurus | Av. Desembargados José Nunes da Cunha, Parque dos Poderes - Bloco 9 - Jd. Veraneio. CEP:79031-901 - Campo Grande – MS</p>
                <p class="font-18 color-black mb-0">Telefone: (67) 3389 6287</p>
            </div>
        </div>

        <div class="row g-3 mt-5">
            <div class="col-lg-6">
                <label for="nome" class="form-label">Nome *</label>
                <input type="text" class="form-control" id="nome">
            </div>
            <div class="col-lg-6">
                <label for="assunto" class="form-label">Assunto *</label>
                <input type="text" class="form-control" id="assunto">
            </div>
            <div class="col-lg-6">
                <label for="email" class="form-label">E-mail *</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-lg-6">
                <label for="telefone" class="form-label">Telefone *</label>
                <input type="text" class="form-control" id="telefone">
            </div>
            <div class="col-lg-12">
                <label for="mensagem" class="form-label">Mensagem *</label>
                <textarea class="form-control" id="mensagem" rows="3"></textarea>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col mt-4">
                <button class="btn bg-secondary font-15 color-light mb-3">Enviar Mensagem</button>
                <p class="font-15 color-black">Campos com  (*) são obrigatórios</p>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>