class ElementsCreator{
    constructor(){}
    
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

export default ElementsCreator;