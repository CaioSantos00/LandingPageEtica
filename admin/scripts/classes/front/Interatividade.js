/*import Elemento from './Element/index.php';

class Interatividade{
    constructor(){}

    setInputs(btnNewParag, selectedImages, maisSemiTitle, maisImagem){
        this.selectedImages = selectedImages;
        this.maisSemiTitle  = maisSemiTitle;
        this.maisImagem     = maisImagem;

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
                this.createAppendableImg(aux, files, this.selectedImages);
            }
		})
    }
    cleanSelectChilds(elmnt){
        while(elmnt.firstChild) elmnt.firstChild.remove();
    }    
    createAppendableImg(indice, files){
        let leitor = new FileReader();        
		leitor.onload = () => {
            let img = document.createElement('img')
                img.src 		= leitor.result;
                img.id			= `b${indice}`;
                img.style.width	= '5vw';
                img.ondragstart	= (ev)=> {
                    ev.dataTransfer.setData("text/plain", `<img src='${files[indice].name}' id='img${indice}'>`);
                };
            selectedImages.append(img);
        }
        leitor.readAsDataURL(files[indice]);
    }
}
export default Interatividade;*/

let btnCreateArtigo = document.getElementById('btnCreateArtigo')
let divCreateArtigo = document.getElementById('divCreateArtigo')

btnCreateArtigo.addEventListener('click', () => {
    let divCardNewArt = document.createElement('div')
    divCardNewArt.classList.add('divCardNewArt')
    
    let inputNewSubTitle = document.createElement('input')
    inputNewSubTitle.type = 'text'
    inputNewSubTitle.classList.add('inputNewArt')
    inputNewSubTitle.placeholder = 'Novo sub título'
    
    let textAreaNewArt = document.createElement('textarea')    
    textAreaNewArt.classList.add('textArea')
    textAreaNewArt.placeholder = 'Descrição'
    
    let newInputFile = document.createElement('input')
    newInputFile.type = 'file'
    newInputFile.classList.add('inputNewImgArt')
    
    let btnCancelArt = document.createElement('button')
    btnCancelArt.classList.add('btnCancelArt')
    btnCancelArt.innerText = 'Cancelar'
    btnCancelArt.onclick = () => {
        divCreateArtigo.removeChild(divCardNewArt)
    }

    divCardNewArt.append(inputNewSubTitle, textAreaNewArt, newInputFile, btnCancelArt)
    divCreateArtigo.appendChild(divCardNewArt)
})