<template>
    <header>
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <!--<a class="navbar-brand" href="">Boolpress</a>-->
                <router-link
                    :to="{ name: menuItem[0].routeName }"
                    class="navbar-brand"
                    >{{ menuItem[0].label }}</router-link
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"> </span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="collapse navbar-collapse" id="">
                    <div class="navbar-nav">
                        <div v-for="(item, index) in menuItem" :key="index">
                            <router-link
                                :to="{ name: item.routeName }"
                                class="nav-link"
                                >{{ item.label }}</router-link
                            >
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <ul>
            <li><a href="/admin">area riservata</a></li>
        </ul>
    </header>
</template>
<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            menuItem: [
                {
                    label: "Home",
                    routeName: "home",
                },
                {
                    label: "contact",
                    routeName: "contact",
                },

                {
                    label: "posts",
                    routeName: "posts",
                },

                {
                    label: "about",
                    routeName: "about",
                },
            ],
        };
    },
};
</script>
<style lang="scss">
//.router-link-active{

//}
</style>
