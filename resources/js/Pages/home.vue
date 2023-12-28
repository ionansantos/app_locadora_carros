<template>
    <Menu />
    <div class="container-img">
        <h1 class="text-center p-4  text-dark">Aluguel de carros - Pesquise, Compare e Economize até 70%!</h1>
        <p class="text-center"> ✓ Sem custos ocultos ✓ Suporte 24/7 ✓ Cancelamento gratuito</p>
        <div class="card-search">
            <CardSearch />
        </div>
    </div>
    <div class="partners d-flex flex-row  justify-content-center">
        <h3 class="mt-4 me-3">Mais de 500 provedores confiáveis:</h3>
        <img class="p-3 image-partners" src="../../images/banners-logos.png" alt="" style="width: 430px; height: 70px;">
    </div>
    <Footer />
</template>

<script>
import Menu from '../Components/menu.vue';
import Footer from '../Components/footer.vue';
import CardSearch from '../Components/card-search.vue';

export default {
    components: {
        Menu,
        CardSearch,
        Footer,
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
    background-color: rgb(255, 255, 255);
    margin: 0 auto;
    position: relative;
    top: 5%;
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

.partners {
    background-color: rgb(255, 172, 18);
}

h3 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    color: white;
}

@media (max-width: 668px) {
    .partners {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .image-partners {
        width: 100px;
        height: 26;
    }
}
</style>