<template>
    <section class="container">
        <div class="row">
            <div class="col-3">
                <ul>
                    <li v-for="(category, index) in categories" :key="index">
                        <a href=""> {{ category.name }}</a>
                        <router-link
                            :to="{
                                name: 'category',
                                params: { slug: category.slug },
                            }"
                            >{{ category.name }}</router-link
                        >
                    </li>
                </ul>
            </div>
            <div class="col-9">
                <div
                    id="carouselExampleControls"
                    class="carousel slide"
                    data-bs-ride="carousel"
                >
                    <!--<div class="carousel-item active h-50" v-for="post in posts":key=">
                        <div class="carousel-item active">-->
                    <img
                        src="https://ricette.giallozafferano.it/Spaghetti-alla-Carbonara.html"
                        class="d-block img-fluid"
                    />
                </div>
                <div class="carousel-item active h-50">
                    <img src="/" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="/" class="d-block w-100" alt="..." />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h1>home</h1>
    </section>
</template>

<script>
export default {
    name: "HomeComponent",
    data() {
        return {
            categories: [],
            posts: [],
        };
    },
    mounted() {
        axios
            .get("/api/categories")
            .then((res) => {
                this.categories = res.data;
            })
            .catch((error) => {
                console.log(error);
            });
        axios
            .get("/api/posts")
            .then((res) => {
                this.categories = res.data.slice(0, 3);
            })
            .catch((error) => {
                console.log(this);
            });
    },
};
</script>
<style lang="scss"></style>
