<template>
    <div>
        <sideMenu />
        <main>
            <Menu :pageTitle="pageTitle" />
            <div class="p-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Data de cadastro</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody v-for="marca in marcas" :key="marca.id">
                        <tr>
                            <td>{{ marca.nome }}</td>
                            <td><img class="card-img-top" :src="'/storage/' + marca.imagem" alt="Card image cap"
                                    style="width:50px;"></td>
                            <td>{{ marca.updated_at }}</td>
                            <td>
                                <button class="btn btn-danger me-2"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-warning"><i class="fa-solid fa-pen-nib"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- end: Navbar -->
    </div>
</template>

<script>
import SideMenu from '../Components/sideMenu.vue';
import Menu from '../Components/menu.vue';
import { onMounted, ref, computed } from 'vue';
import { useStore } from 'vuex';
import marcaStore from '../store/marca';

export default {
    components: {
        SideMenu,
        Menu
    },

    setup() {
        const pageTitle = ref('marcas');
        const marcas = computed(() => marcaStore.state.marcas)

        console.log(marcas);


        onMounted(() => {
            marcaStore.dispatch('fetchMarcas');
        })

        return {
            pageTitle,
            marcas,
        }
    }

}

</script>