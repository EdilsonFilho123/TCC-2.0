<template>
    <ProjectTemplate etapa="5" btn="S">
        <div class="content">
            <h2 class="mt-3 mb-1">Faça o upload de arquivos do seu projeto:</h2>
            <p>Realize o upload de arquivos para o seu projeto</p>
            <p>Permitidos: .pdf, .doc, .docx, .xls, .xlsx, .ppt e .pptx.</p>
            <br>
            <List id="list" title="Uploads" type="close" :data="part" k="nome" />
            <div class="controll mt-2">
                <Button width="20%" txt="Limpar" class="btn"></Button>
                <Button width="20%" txt="Adicionar" class="btn"></Button>
            </div>
            <br>
            <p class="legenda"><img src="@/assets/dica.svg" alt="(dica)" height="75px">Dica: Você pode realizar o upload do EAP do seu projeto!</p>
        </div>
    </ProjectTemplate>
</template>

<script>
    import ProjectTemplate from '../../layouts/ProjectTemplate.vue';
    import InputValidation from '../../form/InputValidation.vue';
    import Button from '../../others/Button.vue';
    import List from '../../templates/List.vue';

    export default {
        components: { ProjectTemplate, InputValidation, Button, List },
        data(){
            return {
                part: [
                    { nome: "Kleber" },
                    { nome: "Kleber" },
                    { nome: "Kleber" },
                    { nome: "Kleber" },
                    { nome: "Kleber" }
                ],
                email: null,
                emailValidade(email) {
                    if(email === null || email == '') return { css: null, msg: '' };

                    const cssValid = { "is-valid": true, "is-invalid": false }
                    const cssInvalid = { "is-invalid": true, "is-valid": false }
                    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                    return (emailRegex.test(email) ? { css: cssValid, msg: '' } : { css: cssInvalid, msg: 'E-mail Inválido!' })
                },
            }
        }
    }
</script>

<style scoped>
    h2{
        text-align: center;

        font-family: 'Libre Baskerville', serif;
        font-family: 'Domine', serif;

        color: #5A5A5A;

        font-size: 25px;
        font-weight: bold;
    }

    .content{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .btn{
        position: static;
        border-radius: 0%;
    }

    .controll{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    p{
        text-align: center;

        font-family: 'Libre Baskerville', serif;
        font-family: 'Domine', serif;

        color: #5A5A5A;

        font-size: 15px;
        font-weight: 400;

        margin-bottom: 0;
    }

    .legenda{
        color: #3711A6;
        font-size: 25px;
    }
</style>