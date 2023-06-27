<template>
    <ProjectTemplate etapa="4" btn="P">
        <!-- Melhor date picker -->
        <div class="content">
            <div>
                <label for="date_inicial">Selecione o prazo incial:</label>
                <b-form-datepicker id="date_inicial" v-model="dataInicial" class="mb-2" />
            </div>
            <div>
                <label for="date_final">Selecione o prazo final:</label>
                <b-form-datepicker id="date_final" v-model="dataFinal" class="mb-2" />
            </div>
        </div>
    </ProjectTemplate>
</template>

<script>
    import ProjectTemplate from '../../layouts/ProjectTemplate.vue';

    export default {
        name: "Prazo",
        components: { ProjectTemplate },
        data(){
            return {
                dataInicial: '',
                dataFinal: ''
            }
        }
    }
</script>

<style scoped>
    .content{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
</style>