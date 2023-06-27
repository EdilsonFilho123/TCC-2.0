<template>
    <div class="termo">
        <StatusNewProject :nivel="etapa" class="mt-3" />
        <div class="content">
            <slot></slot>
            <div class="btn" @click="proximo(etapa)">
                <i v-if="btn == 'P'" class="fa fa-arrow-right" aria-hidden="true"></i>
                <i v-else-if="btn == 'S'" class="fa fa-floppy-o" aria-hidden="true"></i>
                <div v-else >Pular</div>
            </div>
        </div>
    </div>
</template>

<script>
    import StatusNewProject from '../templates/StatusNewProject.vue';

    export default {
        components: { StatusNewProject },
        props: {
            etapa: { required: true }, 
            pros: { default: true },
            btn: { default: 'P' },
        },
        methods: {
            proximo(etapa){
                if(this.pros) 
                    if(etapa < 5) this.$router.push({ path: '/newProject/' + (parseInt(etapa) + 1) })
                    else this.saveProject()
            },
            saveProject(){
                alert('haha!');
            }
        },
    }
</script>

<style scoped>
    .btn{
        position: absolute;
        background-color: #3711A6;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        right: 20px;
        bottom: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #FFF;
    }

    .btn:hover{
        color: #FFF;
    }

    .termo {
        height: 300px;
    }

    .content{
        padding: 10px;
        height: auto;
    }
</style>