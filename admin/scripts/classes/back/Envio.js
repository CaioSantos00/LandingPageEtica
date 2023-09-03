class Envio{
    constructor(){
        this.sendables = [];
    }
    setInput(btnSendIt, divParags, folhaEstilos, selectedImages, inputArquivos){
        this.btnSendIt = document.getElementById(btnSendIt);
        this.divParags = document.getElementById(divParags);
        this.folhaEstilos = document.getElementById(folhaEstilos);
        this.selectedImages = document.getElementById(selectedImages);
        this.inputArquivos = document.getElementById(inputArquivos)

        this.btnSendIt.onclick = () => {
            this.getSideInformation();
            this.getParags();
            this.sendIt();
        }
    }
    cleanSelectChilds(elmnt){
        while(elmnt.firstChild) elmnt.firstChild.remove();
    }
    getSideInformation(){
        this.sideInformation = {
            titulo: document.getElementsByName('titulo')[0].value,
            semiTitulo: document.getElementsByName('semiTitulo')[0].value
        }
    }
    getParags(){
        let parags = this.divParags.childNodes;
        for(let x = 0; x != parags.length; x++){
            this.sendables.push(parags[x].firstChild.value);
        }
    }
    getAllData(){
        let data = {
            paragrafos:this.sendables,
            sideInfo:  this.sideInformation,
            styleSheet:this.folhaEstilos.value,
        }
        return data
    }
    async sendIt(){
        let allData = JSON.stringify(this.getAllData());
        let data = new FormData();
        for(let file of this.inputArquivos.files) data.append('pics', file, file.name);
            
            data.append('data', allData);
            
        let server = await fetch('php/envio.php',{
            method:'POST',
            headers:{
                'Content-type': 'multipart/form-data; boundary=—-WebKitFormBoundaryfgtsKTYLsT7PNUVD'
                
            },
            body: data
        });
        
        data = await server.text();
        
        console.log(data)        
    }
}
export default Envio