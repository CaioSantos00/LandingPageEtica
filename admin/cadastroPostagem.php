<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="scripts/frontManager.js" defer type="module" ></script>
        <script src="scripts/backManager.js" defer type="module"></script>
    </head>
    <body>
        <span id="autor">ele meixmo</span>
        <input type="text" name="titulo" placeholder="Titulo">
        <input type="text" name="semiTitulo" placeholder="semiTitulo"><br>
        <input type="file" id="arquivos" name="arquivos[]" multiple>
        <div id="selectedImages"></div>
        <textArea placeholder="Escreva aqui seu CSS" id="folhaEstilos"></textArea>
        <div id="paragrafos"></div>
        <button id="maisParag">Novo parágrafo</button>
        <button id="maisSemiTitle">Novo semiTitulo </button>
        <button id="maisImagem">Nova Imagem </button>        
        <button id="sendArticle">Enviar artigo</button>
    </body>
</html>