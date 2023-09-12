import Envio from './classes/back/Envio.js';

let arquivos = document.getElementById('arquivos');
let enviar = document.getElementById('sendArticle');
let newArtig = document.getElementById('btnCreateArtigo');

let Dados = {};
Dados.titulo = document.getElementsByName('titulo')[0];
Dados.semiTitulo = document.getElementsByName('semiTitulo')[0];
Dados.descricao = document.getElementsByName('descricao')[0];

let envio = new Envio(Dados, arquivos, enviar)
    envio.variacoes(newArtig)