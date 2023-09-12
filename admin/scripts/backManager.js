import Envio from './classes/back/Envio.js';

let Dados = {};
Dados.titulo = document.getElementsByName('titulo')[0];
Dados.semiTitulo = document.getElementsByName('semiTitulo')[0];
Dados.descricao = document.getElementsByName('descricao')[0];
Dados.folhaEstilos = document.getElementById('folhaEstilos');
Dados.folhaScripts = document.getElementById('folhaScripts');

let arquivos = document.getElementById('arquivos');
let enviar = document.getElementById('sendArticle');

let envio = new Envio(Dados, arquivos, enviar)