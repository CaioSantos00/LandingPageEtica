import Interatividade from './classes/front/Interatividade.js';

let maisParag       = document.getElementById('maisParag');
let divParags       = document.getElementById('paragrafos');
let selectedImages  = document.getElementById("selectedImages");
let maisSemiTitle   = document.getElementById("maisSemiTitle");
let maisImagem    = document.getElementById('maisImagem');
let arquivos        = document.getElementById("arquivos");;

let interatividade = new Interatividade();
    interatividade.setInputs(maisParag, selectedImages, maisSemiTitle, maisImagem);
    interatividade.setOutputs(divParags, arquivos);
    