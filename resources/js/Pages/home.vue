<template>
    <Menu />
    <div class="container-img">
        <div class="card-search">
            <CardSearch />
        </div>
    </div>
</template>

<script>
import SideMenu from '../Components/sideMenu.vue';
import Menu from '../Components/menu.vue';
import CardSearch from '../Components/card-search.vue';

export default {
    components: {
        Menu,
        CardSearch,
    },
    data() {
        return {

        };
    },
}
</script>

<style scoped>
.card-search {
    box-shadow: 6px 6px 6px rgba(23, 23, 23, 0.2);
    border-radius: 6px;
    width: 700px;
    max-width: 100%;
    height: 300px;
    background-color: rgb(255, 183, 49);
    margin: 0 auto;
    position: relative;
    top: 20%;
}

.container-img {
    width: 100%;
    height: 600px;
    object-fit: fill;
    background: no-repeat center;
    background-size: cover;
    background-image: url(../../images/wallpaperHome.jpeg);
}

.wallpaperImage {
    width: 100%;
    height: 600px;
}
</style>