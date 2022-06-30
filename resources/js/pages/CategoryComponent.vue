<template>
    <section>category</section>
</template>

<script>
export default {
    name: "CategoryComponent",
    data() {
        return {
            category: null,
        };
    },
    mounted() {
        const slug = this.$route.params.slug;
        axios
            .get(`/api/categories/${slug}`)
            .tehn((res) => {
                this.category = res.data;
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>

<style></style>
