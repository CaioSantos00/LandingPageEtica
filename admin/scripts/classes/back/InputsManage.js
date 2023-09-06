class InputsManage{
	setDivsToGetInputs(divParags){
        this.divParags = divParags;
		
		this.sendables = [];
    }
    setInputsToReceiveData(inputTitle, inputSemiTitle, addB5){
		this.addB5 			= addB5;
        this.inputTitle 	= inputTitle;
        this.inputSemiTitle = inputSemiTitle;
    }
    setControllers(btnSendIt, inputArquivos){
        this.btnSendIt = btnSendIt;
		this.inputArquivos = inputArquivos;
    }
	setSheets(estilos, scripts){
		this.folhaEstilos = estilos;
		this.folhaScripts = scripts;
	}
	getSendableElements(){
		this.getParags();
return 	this.sendables;
	}
	
	getParags(){
        let parags = this.divParags.childNodes;
        let sendableInfo = {};
        for(let x = 0; x != parags.length; x++){
			console.log(parags[x].firstChild)
            sendableInfo.type = parags[x].firstChild.className.split(' ')[0];
            sendableInfo.value = parags[x].firstChild.value;
            this.sendables.push(sendableInfo);

            sendableInfo = {};
        }
    }
    getAllData(){
        let data = {
            elements: this.getSendableElements(),
            sideInfo:   this.getData(),
            styleSheet: this.folhaEstilos.value,
            scriptSheet:this.folhaScripts.value,			
        };
        return data;
    }
	getData(){
		let addbstr = this.addB5.checked == true ? 1 : 0;
		return {
			sideInformation:{
				titulo: this.inputTitle.value,
				semiTitulo: this.inputSemiTitle.value,
				addB5 : addbstr
			},

		};
	}
}
export default InputsManage;