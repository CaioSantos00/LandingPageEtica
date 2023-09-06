import SubmissionManager from './classes/back/SubmissionManager.js'


//BUTTONS
let btnSendIt =    document.getElementById('sendArticle');


//INPUTS TO GET DATA
let folhaEstilos    = document.getElementById('folhaEstilos');
let folhaScripts    = document.getElementById('folhaScripts');
let inputArquivos   = document.getElementById('arquivos');
let inputTitle      = document.getElementsByName('titulo')[0];
let inputSemiTitle  = document.getElementsByName('semiTitulo')[0];
let addB5           = document.getElementById('addb5');

//DIVS TO ITERATE
let divParags =    document.getElementById('paragrafos');
let selectedImages=document.getElementById('selectedImages');


let subMan = new SubmissionManager();    
    subMan.setDivsToGetInputs(divParags);
    subMan.setInputsToReceiveData(inputTitle, inputSemiTitle, addB5);
    subMan.setSheets(folhaEstilos, folhaScripts);
    subMan.setControllers(btnSendIt, inputArquivos);
    
    subMan.setEventListeners();