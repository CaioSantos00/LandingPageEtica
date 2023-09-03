import ElementsCreator  from './ElementsCreator.js';
import Elemento          from './Element/index.php';

class Interatividade extends ElementsCreator{
    constructor(){
        super();
    }

    setInputs(btnNewParag, selectedImages, maisSemiTitle, maisImagem){
        this.selectedImages = selectedImages;
        this.maisSemiTitle  = maisSemiTitle;
        this.maisImagem   = maisImagem;

        btnNewParag.onclick = () => {
            let paragrafo = new Elemento("textArea");
                paragrafo.setClasses("btnCloseParag","divParagrafo","areaCorpoParagrafos");
            this.divParags.append(paragrafo.getWholeElement());
        };
        this.maisSemiTitle.onclick = () => {
            let title = new Elemento("textArea");
                title.setClasses("btnCloseSemiTitle", "divSemiTitle", "areaInputSemiTitle");
            this.divParags.append(title.getWholeElement());
        };
        this.maisImagem.onclick = () => {
            let elmnt = new Elemento('input');
                elmnt.setClasses('btnCloseImg', "divImg", "imgSolta");                
            this.divParags.append(elmnt.getWholeElement());
        };
    }
    setOutputs(divParags, inputFiles){
        this.divParags  = divParags;
        this.inputFiles = inputFiles;

        this.inputFiles.addEventListener('change',(e) => {
			let files = e.target.files;			
			this.cleanSelectChilds(this.selectedImages);
            
            for(let aux = 0;aux != files.length; aux++){
                console.log(aux)
                this.createAppendableImg(aux, files, this.selectedImages);
            }
		})
    }
    cleanSelectChilds(elmnt){
        while(elmnt.firstChild) elmnt.firstChild.remove();
    }
}
export default Interatividade;