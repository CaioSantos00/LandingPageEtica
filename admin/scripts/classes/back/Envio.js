class Envio{''
    constructor(Dados, arquivos, btnEnviar){
        this.sendables = [];
        this.Dados = Dados;
        this.inputArquivos = arquivos;
        this.nroVars = 0;

        btnEnviar.onclick = async () => {
            this.sendIt();
        }
    }
    variacoes(maisUmaVar){
        maisUmaVar.addEventListener('click', () => {
            this.nroVars++;
        })
    }
    getOtherInputs(){
        let inputsSemiTitles = document.getElementsByClassName('inputNewArt');
        let descricoes = document.getElementsByClassName('textarea');
        let outrasImgs = document.getElementsByClassName('inputNewImgArt').files;

        return [inputsSemiTitles, descricoes, outrasImgs];
    }
    getDataFromOtherInputs(inputsArray){
        let inputsData = {
            semiTitulos:[],
            descricoes:[],
            imgs:[]
        }
        console.log(inputsArray)
        for(let x = 0; x != this.nroVars;x++){
            inputsData.semiTitulos.push(inputsArray[0][x].value);
            inputsData.descricoes.push(inputsArray[1][x+1].value);
            inputsData.imgs.push(inputsArray[2][x].files);
        }
        return inputsData;
    }
    getAllData(){
        if(this.nroVars > 0){
            let inputs = this.getOtherInputs();
                inputs = this.getDataFromOtherInputs(inputs)
           return [JSON.stringify([inputs.semiTitulos, inputs.Descricoes]), inputs.imgs];
        }
        return JSON.stringify(this.Dados);
    }
    async sendIt(){
        let data = new FormData();
        if(this.nroVars > 0){
            console.log(this.getAllData())



            return
        }
        for(let file of this.inputArquivos.files) data.append('pics', file, file.name);
            data.append('data', this.getAllData());
        let server = await fetch('../admin/php/envio.php',{
            method:'POST',
            body: data
        });

        data = await server.text();

        console.log(data)
    }
}
export default Envio