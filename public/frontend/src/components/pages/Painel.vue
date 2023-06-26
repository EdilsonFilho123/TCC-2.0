<template>
    <div class="painel">
        <List title="TAREFAS" type="opt" :data="data" k="name" class="mb-2"/>
        <List title="PROJETOS" type="pcent" :data="data" k="name" />
    </div>
</template>

<script>
    import List from '../templates/List.vue';
    export default {
        components: { List },
        data() {
            return {
                data: [
                    {
                        id: 1,
                        name: "Fluxograma do processo de pedidos",
                        status: 'N',
                        porcentagem: "20%"
                    },
                    {
                        id: 2,
                        name: "Análise de recursos referentes a criação de etiquetas",
                        status: 'C',
                        porcentagem: "80%"
                    },
                    {
                        id: 3,
                        name: "Fluxograma do processo de pedidos",
                        status: 'N',
                        porcentagem: "20%"
                    },
                    {
                        id: 4,
                        name: "Análise de recursos referentes a criação de etiquetas",
                        status: 'C',
                        porcentagem: "80%"
                    },
                    {
                        id: 5,
                        name: "Fluxograma do processo de pedidos",
                        status: 'N',
                        porcentagem: "20%"
                    },
                    {
                        id: 6,
                        name: "Análise de recursos referentes a criação de etiquetas",
                        status: 'C',
                        porcentagem: "80%"
                    },
                    {
                        id: 7,
                        name: "Fluxograma do processo de pedidos",
                        status: 'N',
                        porcentagem: "20%"
                    },
                    {
                        id: 8,
                        name: "Análise de recursos referentes a criação de etiquetas",
                        status: 'C',
                        porcentagem: "80%"
                    },
                    {
                        id: 9,
                        name: "Fluxograma do processo de pedidos",
                        status: 'N',
                        porcentagem: "20%"
                    },
                    {
                        id: 10,
                        name: "Análise de recursos referentes a criação de etiquetas",
                        status: 'C',
                        porcentagem: "80%"
                    },
                ],
            }
        }
    }
</script>

<style scoped>
    .painel {
        height: 100%;

        margin: 5px;
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        /* align-items:start; */
    }
</style>