<template>
    <ProjectTemplate etapa="1" :btn="(!termo ? 'Pular' : 'P')">
        <h2 class="mt-4 mb-3">Digite seu Termo de Abertura:</h2>
        <VueEditor class="edit" v-model="termo" placeholder="Informe o Termo de Abertura..." />
    </ProjectTemplate>
</template>

<script>
    import ProjectTemplate from '../../layouts/ProjectTemplate.vue';
    import { VueEditor } from "vue2-editor"

    export default {
        components: { ProjectTemplate, VueEditor },
        computed: {
            termo: {
                get () {
                    return this.$store.state.newProject.termo
                },
                set (valor) {
                    this.$store.state.newProject.termo = valor
                }
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

    .edit{
        max-height: 350px;
    }
</style>