<template>
<q-layout>
  <!-- Header -->
  <div slot="header" class="toolbar">
    <!-- opens left-side drawer using its ref -->
    <button class="hide-on-drawer-visible" @click="$refs.leftDrawer.open()">
      <i>menu</i>
    </button>
    <q-toolbar-title :padding="1">
      Title
    </q-toolbar-title>
    <!-- opens right-side drawer using its ref -->
    <button class="hide-on-drawer-visible" @click="$refs.rightDrawer.open()">
        <i>menu</i>
      </button>
  </div>
  <!-- Navigation Tabs -->
  <q-tabs slot="navigation">
    <q-tab icon="mail" route="/layout" exact replace>JAIME de GREIFF</q-tab>
    
  </q-tabs>
  <!-- Left-side Drawer -->
  <q-drawer ref="leftDrawer">
    <div class="toolbar">
      <q-toolbar-title>
        <span v-if="user.authenticated"> {{user.data.name}} - {{ dpoll }} </span>
      </q-toolbar-title>
    </div>
    <div class="list no-border platform-delimiter">
	
      <q-drawer-link icon="home" :to="{path: '/', exact: true}">
        Inicio
      </q-drawer-link>
      <navigation></navigation> 
    </div>
  </q-drawer>
  <!-- IF USING subRoutes only: -->
  <router-view class="layout-view"></router-view>
  <!-- OR ELSE, IF NOT USING subRoutes: -->
  <!--<div class="layout-view"></div> -->
  <!-- Right-side Drawer -->
  <q-drawer ref="rightDrawer" right-side>
    ...
  </q-drawer>
  <!-- Footer -->
  <div slot="footer" class="toolbar">
    ....
  </div>
</q-layout>	
</template>
<script>
import { mapActions, mapGetters} from 'vuex'
  export default{
    data(){
      return{
        
      }
    },
    computed: mapGetters({
            user: 'auth/user',
            dpoll: 'polla/datospollero'
        }),
    methods:{
      /*Garantizo que en el almacen VUEX estén ciudades, partidos y equipos*/
      ...mapActions({
        seguridadToken: 'auth/setToken',
        cargaCiudades: 'polla/datosCiudades',
        cargaEquipos: 'polla/datosEquipos',
        cargaPartidosFaseGrupos: 'polla/datosPartidos',
        perfilUsuario: 'polla/userPerfil'
      }),

    },
    mounted(){
      this.seguridadToken();
      this.cargaCiudades();
      this.cargaEquipos();
      this.cargaPartidosFaseGrupos();

    }
  }
</script>