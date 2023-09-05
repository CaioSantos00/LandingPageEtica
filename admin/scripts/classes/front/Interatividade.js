import Elemento from './Element/index.php';

class Interatividade{
    aux = 0;
    constructor(){}

    setInputs(btnNewParag, selectedImages, maisSemiTitle, maisImagem, maisEmptySpc){
        this.selectedImages = selectedImages;
        this.maisSemiTitle  = maisSemiTitle;
        this.maisImagem     = maisImagem;
        this.maisEmptySpc   = maisEmptySpc;
        
        btnNewParag.onclick = () => {
            let label = new Elemento('label');
                label.setClasses('','','');
                label.defineAdditionalData('Element', [['for', "txa"+this.aux]]);
                label = label.getJust('Element');
                label.innerText = 'Escreva aqui seu parágrafo';
                
            let paragrafo = new Elemento("textArea");
                paragrafo.setClasses("btn-close","Paragrafo form-floating m-3","form-control");
                paragrafo.defineAdditionalData('Element',[['id',"txa"+this.aux++],['placeholder','Escreva aqui seu parágrafo']]);                
            this.divParags.append(paragrafo.getWholeElement());            
                paragrafo.newAdditionalElmnt(label);
        };
        this.maisSemiTitle.onclick = () => {
            let label = new Elemento('label');
                label.setClasses('','','');
                label.defineAdditionalData('Element', [['for', "semit"+this.aux]]);
                label = label.getJust('Element');
                label.innerText = 'Escreva aqui seu semi-tiulo';
                
            let title = new Elemento("textArea");
                title.setClasses("btn-close","SemiTitulo form-floating m-3","form-control");
                title.defineAdditionalData('Element', [['id', "semit"+this.aux++]]);
            this.divParags.append(title.getWholeElement());
                title.newAdditionalElmnt(label);
        };
        this.maisImagem.onclick = () => {
            let elmnt = new Elemento('input');
                elmnt.setClasses('btn-close', "Picture input-group", "form-control");                
            this.divParags.append(elmnt.getWholeElement());
        };
        
        this.maisEmptySpc.onclick = () => {
            let label = new Elemento('label');
                label.setClasses('','','');
                label.defineAdditionalData('Element', [['for', "semit"+this.aux]]);
                label = label.getJust('Element');
                label.innerText = 'Escreva aqui seu elemento personalizado';
                
            let elmnt = new Elemento('textArea');
                elmnt.setClasses('btn-close','EmptySpace form-floating m-3','form-control');
                elmnt.defineAdditionalData('Element', [['id', "semit"+this.aux++]]);
            this.divParags.append(elmnt.getWholeElement());
                elmnt.newAdditionalElmnt(label);
        }
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
                img.style.width	= '10vw';                
                img.className   =  'img-thumbnail border border-4 border-info';
                img.ondragstart	= (ev)=> {
                    ev.dataTransfer.setData("text/plain", `<img src='${files[indice].name}' id='img${indice}'>`);
                };
            selectedImages.append(img);
        }
        leitor.readAsDataURL(files[indice]);
    }
}
export default Interatividade;