<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        
        <script src="scripts/frontManager.js" defer type="module" ></script>
        <script src="scripts/backManager.js" defer type="module"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container-fluid p-5">
            <span id="autor">ele meixmo</span>            
            <div class="input-group p-2">
                <div class="mb-2 mt-2">
                    <input type="text" name="titulo" placeholder="Titulo" class="form-control">                                
                    <input type="text" name="semiTitulo" placeholder="semiTitulo"class="form-control mt-4"><br>
                </div>
                <div class="custom-file mt-2 ms-5">
                    <input type="file" id="arquivos" class="custom-file-input" name="arquivos[]" multiple>
                </div>                
            </div>
            <div id="selectedImages"></div>
            <div class="form-floating mb-5">
                <textArea placeholder="Escreva aqui seu CSS" id="folhaEstilos" class="form-control"></textArea>
                <label for="folhaEstilos"> Escreva aqui seu CSS</label>
            </div>
            <div id="paragrafos" class="form-floating"></div>

            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group">
                    <button id="maisParag" class="btn btn-outline-primary">Novo parágrafo</button>
                    <button id="maisSemiTitle" class="btn btn-outline-primary">Novo semiTitulo </button>
                    <button id="maisImagem" class="btn btn-outline-primary">Nova Imagem </button>
                </div>
                <div class="btn-group ms-5">
                    <button id="sendArticle" class="btn btn-outline-success">Enviar artigo</button>
                </div>
            </div>
        </div>

    </body>
</html>