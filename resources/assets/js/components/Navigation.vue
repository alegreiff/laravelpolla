<template>
<div>

    <div v-if="!user.authenticated">

        
        <q-drawer-link icon="person_outline" :to="{name: 'login'}">Ingresar</q-drawer-link>
        <q-drawer-link icon="person_add" :to="{name: 'register'}">Registro</q-drawer-link>
        
    </div>
    <!-- Right Side Of Navbar -->
    <div v-if="user.authenticated">
        <!-- Authentication Links -->
        
        <q-drawer-link icon="alarm_add" :to="{name: 'timeline'}">Timeline</q-drawer-link>
        <q-drawer-link icon="assignment" :to="{name: 'equipos'}">Equipos</q-drawer-link>
        <q-drawer-link icon="dns" :to="{name: 'partidos'}">Partidos</q-drawer-link>
        <p class="label bg-secondary text-white shadow-1">{{ user.data.name }} </p>
        <q-drawer-link icon="build" :to="{name: 'perfil'}">Perfil de usuario</q-drawer-link>
        
        <button class="primary" @click.prevent="signout">Salir</button>
             
        
    </div>
</div>
</template>
<script>
import { mapGetters, mapActions} from 'vuex'
import localforage from 'localforage'
    export default{

        computed: mapGetters({
            user: 'auth/user'
        }),
        methods:{
             ...mapActions({
                logout: 'auth/logout'
                }),
                signout(){
                    this.logout().then(() => {
                        this.$router.replace({name: 'home'})
                        localforage.removeItem('authtoken')
                        localforage.removeItem('intended')
                        localforage.removeItem('equipos')
                        localforage.removeItem('ciudadesRusia')
                        localforage.removeItem('partidosGrupos')
                    })
                }
        }
    }
</script>
<style>
    ul.listaHome{
        list-style-type: none;
    }
</style>