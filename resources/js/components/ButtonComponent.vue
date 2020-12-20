<style lang="sass">
</style>
<template>
    <div class="text-center">
        <v-btn :class="'banner_button '+this.textClass" outlined>
            <v-icon left>{{this.icon}}</v-icon><slot></slot>
        </v-btn>
    </div>
</template>
<script>
    import 'vuetify/dist/vuetify.min.css';
    
    export default {
        data: function(){
            return {
                'icon': null
            }
        },
        mounted() {
            this.update();
        },
        props: {
            iconIn: String,
            textClass: String
        },
        methods: {
            update: function(){
                //console.log('App mounted!');
                this.icon=this.iconIn;
            },
        }
    }
</script>