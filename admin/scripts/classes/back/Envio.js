class Envio{
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
    getAllData(){
        let primarios = {
            Titulo:this.Dados.titulo.value,
            SemiT:this.Dados.semiTitulo.value,
            Descricao:this.Dados.descricao.values
        }
        if(this.nroVars > 0){
            let divs = document.getElementsByClassName('divCardNewArt');
            let filhos, envio = [], imgs = [];
            for(let x = 0; x != this.nroVars; x++){
                filhos = divs[x].childNodes;
                console.log(filhos)
                imgs.push(filhos[2].files);
                filhos ={
                    subTitulo: filhos[0].value,
                    descricao: filhos[1].value,
                }
                envio.push(filhos)
            }
            return [JSON.stringify([primarios, envio]), [imgs, this.inputArquivos.files]];
        }
        return JSON.stringify(primarios);
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