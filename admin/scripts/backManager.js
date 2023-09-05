import SubmissionManager from './classes/back/SubmissionManager.js'

let subMan = new SubmissionManager();
    subMan.setDivsToGetInputs('sendArticle', 'paragrafos', 'folhaEstilos', 'selectedImages','arquivos', 'autor');
    subMan.setInputsToReceiveData('')