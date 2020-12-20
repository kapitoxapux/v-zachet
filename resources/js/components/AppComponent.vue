<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
    .pg-canvas {
        position: absolute;
        background-color: paleturquoise;
    }
</style>
<template>
    <transition name="fade">
        <router-view></router-view>
    </transition>
</template>
<script>
    import Particle from "particleground-light";
    
    export default {
        name: 'App',
        mounted() {
            this.update();
        },
        methods: {
            update: function(){
                console.log('App mounted!');
                new Particle(document.getElementById('particleground'), {
                    dotColor: '#5cbdaa',
                    lineColor: '#A261CD'
                });
            },
        }
    }
</script>