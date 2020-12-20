<style>

</style>
<template>
    <div>
        <nav-component></nav-component>
        <main class="col-10 offset-1 p-0">
            <article class="main">
                <section class="feature d-flex flex-column align-items-center align-self-center">
                    <article id="a-1" class="elements" v-for="(elem,j) in nav" :key="j">
                        <h2>
                            <router-link :to="elem.link" class="button16 d-flex justify-conten-center">
                                {{elem.title}}
                            </router-link>
                        </h2>
                    </article>
                </section>
                <section class="slider-3 d-flex justify-content-center align-items-center">
                    <article>
                        <transition name="fade">
                            <slick ref="slick" :options="slickOptions">
                                <img src="/images/kontur_kotlovana_6.jpg" alt="img01"/>
                                <img src="/images/nivelirovanie_po_kvadratam_17.jpg" alt="img02"/>
                                <img src="/images/Nomenklatura_kart_1.jpg" alt="img03"/>
                                <img src="/images/razbivka_krugovoy_krivoy_11.jpg" alt="img04"/>
                                <img src="/images/seti_sgushcheniya_4.jpg" alt="img05"/>
                            </slick>
                        </transition>
                    </article>
                </section>
            </article>
            <aside class="aside aside-1"></aside>
            <aside class="aside aside-2">
                <div class="AbUs">
                    <h1>Geo-guide.ru</h1>
                    <div class="seo-text">
                        <p>Вы студент? Нужна контрольная, задача или дипломная работа? Мы готовы помочь и предоставить уже готовое     решение. Наш ресурс более 5 лет выполняет работы студентам МИИГАиК, ДВГУПС, АлтГАУ, УрГУПС, ВГАСУ, ВГЛТА, ОГУ, НГАСУ (Сибстрин), ТОГУ, ИГАСА. За это время нами была сформирована большая база готовых работ по следующим дисциплинам:</p>
                        <ul>
                            <li>геодезия</li>
                            <li>фотограмметрия</li>
                            <li>картография</li>
                            <li>земельный кадастр</li>
                            <li>геология</li>
                            <li>гидравлика</li>
                        </ul>
                        <p>Просто воспользуйтесь поиском у нас на сайте и возможно ответ окажется на выходе поискового запроса. Если в нашей базе интересующая вас работа отсутствует, вы можете заказать её решение, связавшись с нами в <a href="https://vk.com/club83059811" target="_blank">социальной сети</a> или заполнив <a href="/contact-form.html">соответствующую форму</a>.</p>
                    </div>
                </div>
            </aside>
        </main>
        <footer class="footer d-flex justify-content-end align-items-center">
            <div class="mini-footer-content">© <a href="https://kapx-portfolio.tmweb.ru/" target="_blank">Powered by Kapx</a>, 2014</div>
            <div class="mini-footer-content-vk">
                <div>
                    <a href="https://vk.com/club83059811" target="blank" title="Я Вконтакте">VK</a>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    import Slick from 'vue-slick'
    import Nav from './NavComponent.vue'

    export default {
        data: function(){
            return {
                nav: [
                    {
                        'title': 'ГИДРАВЛИКА',
                        'link': '/hydraulics'
                    },
                    {
                        'title': 'ГЕОДЕЗИЯ',
                        'link': '/geodesy'
                    },
                    {
                        'title': 'ГЕОЛОГИЯ',
                        'link': '/geology'
                    }
                ],
                slickOptions: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    dots: true,
                    infinite: true,
                    speed: 2000,
                    fade: true,
                    cssEase: 'linear'
                }
            }
        },
        props: [
            //'push_id',
            //'genres'
        ],
        components: {
            Slick,
            'nav-component': Nav
        },
        mounted() {
            this.update();
            //this.create();
        },
        methods: {
            update: function(){
                console.log('BodyComponent mounted!');
                this.getArticles();
            },
            getArticles: function() {
                /*let type='';
                if(this.banner_type==='promo_bann') type='1';
                else type='3';*/

                this.$root.$options.methods.postRequest('/articles',{'id': 2})
                    .then((response) =>
                        {
                            if(response.status==='OK') return response.body;
                        }
                    )
                    .then((myJson) =>
                        {
                            if(myJson.exception==='ErrorException') this.image_url="Баннер для фильма отсутствует!";
                            //else this.image_url='https://static.sweet.tv/images/banners/promotion/'+myJson+'.png';
                            else console.dir(myJson);
                        }
                    );
            },
            handleErrors: function(message) {
                alert(message);
            },
            submitForm: function () {
                /*let data={
                    'push_id': this.push_id,
                    'banner_type': this.banner_type,
                    'body_message': this.body_message,
                    'checked_device': this.checked_device,
                    'expire_date': this.expire_date,
                    'genre_to_send': this.genre_to_send,
                    'image_url': this.image_url,
                    'message_type': this.message_type,
                    'object_id': this.object_id,
                    'schedule_time': this.schedule_time,
                    'time_to_send': this.time_to_send,
                    'title': this.title,
                    'url': this.url
                };
                this.$root.$options.methods.postRequest('/push/new_send_raw_message',data)
                    .then((response) =>
                        {
                            if(response.status==='OK') return response.body;
                        }
                    )
                    .then((myJson) =>
                        {
                            this.handleErrors(myJson);
                            this.showModal=false;
                        }
                    );*/
            }
        }
    }
</script>