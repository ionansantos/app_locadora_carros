<template>
    <div>
        <sideMenu />
        <main>
            <Menu />
            <h2>perfil aqui</h2>
            <p class="text-dark">a ideia e ter uma page para edicao de perfil tanto para admin quanto para cliente
                controlando a exibição de certas funcionalidades</p>
        </main>
        <!-- end: Navbar -->
    </div>
</template>

<script>
import SideMenu from '../Components/sideMenu.vue';
import Menu from '../Components/menu.vue';

export default {
    components: {
        SideMenu,
        Menu
    }
}

</script>