<template>
    <ProjectTemplate etapa="3" btn="P">
        <div class="content">
            <h2 class="mt-3 mb-3">Definição de Equipe:</h2>
            <InputValidation v-model="email" id="email" label="Digite o email da pessoa que deseja adicionar:" type="email" :validade="emailValidade" class="input" />
            <!-- <label for="list" class="ml-1">Participantes:</label> -->
            <List id="list" title="Participantes" type="close" :data="part" k="nome" />
            <div class="controll mt-2">
                <Button width="150px" txt="Limpar" class="btn"></Button>
                <Button width="150px" txt="Adicionar" class="btn"></Button>
            </div>
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

    .input{
        width: 100%;
    }

    label{
        color: #9D9D9D;
        text-align: left;
        width: 100%;
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
</style>