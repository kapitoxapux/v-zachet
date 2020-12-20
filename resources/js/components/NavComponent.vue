<style></style>
<template>
    <header class="header container-fluid d-flex justify-content-between p-0">
        <a class="logo" href="/">
            <img src="/images/logo.png" alt="Logo">
        </a>
        <div class="page">
            <ul class="d-flex">
                <li class="flex-item" v-for="(item,i) in menu" :key="i">
                    <router-link :to="item.link" class="d-flex align-items-center justify-content-center">{{item.title}}</router-link>
                </li>
            </ul>
        </div>
    </header>
</template>

<script>
    export default {
         data: function(){
            return {
                menu: [
                    {
                        'title': 'Главная',
                        'link': '/'
                    },
                    {
                        'title': 'Геодезия',
                        'link': '/geodesy'
                    },
                    {
                        'title': 'Геология',
                        'link': '/geology'
                    },
                    {
                        'title': 'Гидравлика',
                        'link': '/hydraulics'
                    },
                    {
                        'title': 'Купить',
                        'link': '/basket'
                    }
                ]
            }
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function(){
                console.log('NavComponent mounted!');
            }
        }
    }
</script>