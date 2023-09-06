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
            <div class="row  border-2 border-bottom border-primary p-3 mb-5">
                <div class="mt-2 col-6">,
                    <input type="text" name="titulo" placeholder="Titulo" class="form-control">
                    <input type="text" name="semiTitulo" placeholder="semiTitulo" class="form-control mt-4"><br>
                </div>
                <div class=" mt-2 ms-5 col-5">
                    <input type="file" id="arquivos" class="form-control btn btn-outline-primary" name="arquivos[]" multiple>
                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="addb5">
                        <label for="addb5" class="form-check-label" >Adicionar Bootstrap</label>
                    </div>
                </div>
            </div>
            <div id="selectedImages"></div>
            <div class="border-bottom border-4 border-dark p-2 pb-3">
                <div class="form-floating mb-1">
                    <textArea placeholder="Escreva aqui seu CSS" id="folhaEstilos" class="form-control"></textArea>
                    <label for="folhaEstilos"> Escreva aqui seu CSS</label>
                </div>                
                <div class="form-floating mt-4 mb-3">
                    <textArea placeholder="Escreva aqui seus scripts" id="folhaScripts" class="form-control"></textArea>
                    <label for="folhaScripts"> Escreva aqui seu JS</label>
                </div>
            </div>
            <div id="paragrafos" class="form-floating"></div>

            <div class="btn-toolbar mt-4" role="toolbar">
                <div class="btn-group">
                    <button id="maisParag" class="btn btn-outline-primary">Novo parágrafo</button>
                    <button id="maisSemiTitle" class="btn btn-outline-primary">Novo semiTitulo </button>
                    <button id="maisImagem" class="btn btn-outline-primary">Nova Imagem </button>
                </div>
                <div class="btn-group ms-4 mt-3">
                    <button id="maisEmptySpc" class="btn btn-outline-primary">Novo espaço em branco</button>
                </div>
                <div class="btn-group ms-5 mt-3">                    
                    <button id="seePrevious" class="btn btn-outline-info">Ver prévia</button>
                    <button id="saveSketch" class="btn btn-outline-warning">Salvar rascunho</button>
                    <button id="sendArticle" class="btn btn-outline-success">Enviar artigo</button>
                </div>
            </div>
        </div>

    </body>
</html>