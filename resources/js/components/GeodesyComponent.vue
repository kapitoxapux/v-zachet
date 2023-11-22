<style>

</style>
<template>
    <div>
        <nav-component></nav-component>
        <section class="zadacha">
            <div class="paginator">
                <a href="[[~[[+id]]]]">
                    <article class="zadacha_1">
                        <div class="part_1">
                            <ul class="uslovia">
                                <li class="uslovia_1">[[+introtext]]</li>
                                <li class="uslovia_2">[[+description]]</li>
                            </ul>
                        </div>
                        <div class="part_2">
                            <img src="Uploads/images/geodesia_mini/Nomenklatura kart_1.jpg" alt="">
                        </div>
                    </article>
                </a>
            </div>
        </section>
    </div>
</template>

<script>
    import Nav from "./NavComponent";

    export default {
        data: function(){
            return {
                //'message_type': 'Фильм'
            }
        },
        props: [
            //'push_id',
            //'genres'
        ],
        components: {
            'nav-component': Nav
        },
        mounted() {
            this.update();
        },
        methods: {
            update: function(){
                console.log('GeodesyComponent mounted!');
            }
        }
    }
</script>