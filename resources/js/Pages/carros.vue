<template>
    <div>
        <sideMenu />
        <main>
            <Menu />
            <h2>carros aqui</h2>
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