class Envio{
    constructor(Dados, arquivos, btnEnviar){
        this.sendables = [];
        this.Dados = Dados;
        this.inputArquivos = arquivos;
        
        btnEnviar.onclick = async () => {
            this.sendIt();
        }
    }
    getAllData(){
        return JSON.stringify(this.Dados);
    }
    async sendIt(){        
        let data = new FormData();
        for(let file of this.inputArquivos.files) data.append('pics', file, file.name);            
            data.append('data', this.getAllData());            
        let server = await fetch('../php/envio.php',{
            method:'POST',
            body: data
        });
        
        data = await server.text();
        
        console.log(data)        
    }
}
export default Envio