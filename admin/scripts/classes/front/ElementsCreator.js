class ElementsCreator{
    constructor(){}

    TextArea(classForIt){
        let textArea = document.createElement('textarea');
            textArea.require = true;
            textArea.className = classForIt;
        return textArea;
    }
    closeParagrafo(classForIt){
        let btn = document.createElement('button');
            btn.className = classForIt;
            btn.innerText = "X";
            btn.onclick = (e) => {
                e.target.parentNode.remove();
            }
        return btn;
    }
    setSemiTitulo(){
        let div = document.createElement('div');
            div.className = "semiTitleDiv"

        let title = this.TextArea("semiTitulo");

        let btn = this.closeParagrafo("btnCloseSemiTitle")

        div.append(title, btn)
        return div
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

export default ElementsCreator;