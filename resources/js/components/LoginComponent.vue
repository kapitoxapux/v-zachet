<style lang="sass">
    .login-header
        background-color: #bddb00
        //border-radius: 10px
        color: black !important
        text-transform: capitalize
        border: none
        width: 120px
        text-decoration: none !important
</style>
<template>
    <div class="text-center d-flex align-items-center">
        <v-btn class="login-header" link outlined href="login">
            <v-icon left>mdi-login</v-icon> Вход
        </v-btn>
    </div>
</template>
<script>
    import 'vuetify/dist/vuetify.min.css';
    
    export default {
        name: 'App',
        mounted() {
            this.update();
        },
        methods: {
            update: function(){
                //console.log('App mounted!');
            },
        }
    }
</script>