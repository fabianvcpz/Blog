<template>
    <div>
        <section class="pages container">
            <div class="page page-archive">
                <h1 class="text-capitalize">archive</h1>
                <p>Nam efficitur, massa quis fringilla volutpat, ipsum massa consequat nisi, sed eleifend orci sem sodales lorem. Curabitur molestie eros urna, eleifend molestie risus placerat sed.</p>
                <div class="divider-2" style="margin: 35px 0;"></div>
                <div class="container-flex space-between">
                    <div class="authors-categories">
                        <h3 class="text-capitalize">Autores</h3>
                        <ul class="list-unstyled">
                            <li v-for="author in authors" v-text="author.name">
                                <p v-text="author.name"></p>
                            </li>
                        </ul>
                        <h3 class="text-capitalize">Categorias</h3>
                        <ul class="list-unstyled">
                            <li v-for="category in categories" class="text-capitalize">
                                <category-link :category="category"></category-link>
                            </li>
                        </ul>
                    </div>
                    <div class="latest-posts">
                        <h3 class="text-capitalize">Ultimas publicaciones</h3>
                        <p v-for="post in posts">
                            <post-link :post="post">{{ post.title}}</post-link>
                        </p>
                        <h3 class="text-capitalize">Publicaciones por mes</h3>
                        <ul class="list-unstyled">
                            <li v-for="date in archive" class="text-capitalize">
                                {{ date.monthname }} {{ date.year }} ({{ date.posts }})
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                authors: [],
                categories: [],
                posts: [],
                archive:[]
            }
        },
        mounted(){
            axios.get('/api/archivo')
                .then(res =>{
                    this.authors = res.data.authors;
                    this.categories = res.data.categories;
                    this.posts = res.data.posts;
                    this.archive = res.data.archive;
            })
        }
    }
</script>
