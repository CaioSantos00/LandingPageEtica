import InputsManage from './InputsManage.js';

class SubmissionManager extends InputsManage{
    constructor(){
        super()
        this.sendables = [];
    }
    setEventListeners(){
        this.btnSendIt.onclick = () => {
            let data =  this.getDataToSend();
                        this.sendData(data);
        }
    }
    cleanSelectChilds(elmnt){
        while(elmnt.firstChild) elmnt.firstChild.remove();
    }
    getDataToSend(){
        let allData = JSON.stringify(this.getAllData());
        let data = new FormData();
        for(let file of this.inputArquivos.files) data.append('pics', file, file.name);
        data.append('data', allData);

        return data
    }
    sendData(data){
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = () => {
            if(xhttp.readyState == 4 && xhttp.status == 200) console.log(xhttp.responseText);
        }
        xhttp.open("POST", "php/View/envio.php");
        xhttp.send(data);
    }
}
export default SubmissionManager;