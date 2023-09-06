class SubmissionManager{
    constructor(){
        this.sendables = [];
    }
    setDivsToGetInputs(divParags){
        this.divParags = divParags;        
    }
    setInputsToReceiveData(inputTitle, inputSemiTitle){
        this.inputTitle = inputTitle;
        this.inputSemiTitle = inputSemiTitle;
    }
    setControllers(btnSendIt){
        this.btnSendIt = btnSendIt;
    }
    setEventListeners(){
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
            titulo: this.inputTitle.value,
            semiTitulo: this.inputSemiTitle.value
        }
    }
    getParags(){
        let parags = this.divParags.childNodes;
        let sendableInfo = {};
        for(let x = 0; x != parags.length; x++){
            sendableInfo.type = parags[x].firstChild.className.split(' ')[0];
            sendableInfo.value = parags[x].firstChild.value;
            this.sendables.push(sendableInfo);
            
            sendableInfo = {};
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
        let data = new FormData(this.divParags);
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
export default SubmissionManager;