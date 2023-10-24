<template>
    <div>
        <sideMenu />
        <main>
            <Menu :pageTitle="pageTitle" />
            <div class="p-5">
                <h1>vai fazer o store para puxa as marcas</h1>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </main>
        <!-- end: Navbar -->
    </div>
</template>

<script>
import SideMenu from '../Components/sideMenu.vue';
import Menu from '../Components/menu.vue';
import marcaStore from ''


export default {
    components: {
        SideMenu,
        Menu
    },
    data() {
        return {
            pageTitle: 'marcas'
        }
    }
}

</script>