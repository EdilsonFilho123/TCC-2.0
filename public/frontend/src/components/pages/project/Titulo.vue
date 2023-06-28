<template>
    <ProjectTemplate etapa="2" btn="P">
        <div class="content">
            <h2 class="mt-3 mb-3">Defina o nome do projeto:</h2>
            <b-form-input v-model="titulo" placeholder="Nome do projeto..." />
            <h2 class="mt-5 mb-3">Breve descrição do projeto:</h2>
            <b-form-textarea v-model="descricao" placeholder="Descrição do projeto..." rows="6" max-rows="12" />
        </div>
    </ProjectTemplate>
</template>

<script>
    import ProjectTemplate from '../../layouts/ProjectTemplate.vue';

    export default {
        components: { ProjectTemplate },
        computed: {
            titulo: {
                get () {
                    return this.$store.state.newProject.titulo
                },
                set (valor) {
                    this.$store.state.newProject.titulo = valor
                }
            },
            descricao: {
                get () {
                    return this.$store.state.newProject.descricao
                },
                set (valor) {
                    this.$store.state.newProject.descricao = valor
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
</style>