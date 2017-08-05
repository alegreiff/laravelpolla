<template>
  <!-- root node required -->
  <div>
    <!-- your content -->
    <div class="layout-padding">
      <!-- if you want automatic padding -->
      <!-- <pre v-if="equipos"> {{ equipos }} </pre> -->
      <p class="rusia">Hola</p>     
      <div class="row wrap big-gutter">

        <div class="width-1of4">
          <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo A
          </div>
          <div class="card-content card-force-top-padding">
            
            <button v-for="equipo in grupo('A')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
        </div>
        <div class="width-1of4">
          <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo B
          </div>
          <div class="card-content card-force-top-padding">
            <button v-for="equipo in grupo('B')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
        </div>
        <div class="width-1of4">
          <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo C
          </div>
          <div class="card-content card-force-top-padding">
            <button v-for="equipo in grupo('C')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
        </div>
        <div class="width-1of4">
          <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo D
          </div>
          <div class="card-content card-force-top-padding">
            <button v-for="equipo in grupo('D')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
        </div>
        <div class="width-1of4">
          <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo E
          </div>
          <div class="card-content card-force-top-padding">
            <button v-for="equipo in grupo('E')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
        </div>
        <div class="width-1of4">
          <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo F
          </div>
          <div class="card-content card-force-top-padding">
            <button v-for="equipo in grupo('F')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
        </div>
        <div class="width-1of4">
          <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo G
          </div>
          <div class="card-content card-force-top-padding">
            <button v-for="equipo in grupo('G')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
        </div>
        <div class="width-1of4">
        <div class="card">
          <div class="card-title bg-primary text-white">
            Grupo H
          </div>
          <div class="card-content card-force-top-padding">
            <button v-for="equipo in grupo('H')" class="secondary small full-width pais_button" @click="detalleEquipo(equipo.id)">
            {{ equipo.nombre }}</button>
          </div>
        </div>
          
        </div>

        
      </div>
    <!--<p v-for="equipo in equipos"> {{ equipo.grupo }} {{ equipo.nombre }} </p> -->
    </div>


<!-- -->
<q-modal ref="basicModal" :content-css="{padding: '50px', minWidth: '50vw'}">
      <h4>{{ datos_equipo.nombre}}</h4>

    <p v-for="partido in partidos_equipo">
      {{ nombreEquipo(partido.local_id) }} vs 
      {{ nombreEquipo(partido.visitante_id) }}
      
      <span class="label bg-primary text-white">{{ fecha_partido(partido.id)}}</span>
    </p>
    


      
      <button class="primary" @click="$refs.basicModal.close()">Close</button>
    </q-modal>

    <q-modal
      ref="eventsModal"
      @open="notify('open')"
      @escape-key="notify('escape-key')"
      @close="notify('close')"
      :content-css="{padding: '50px', minWidth: '50vw'}"
    >
      <h4>Modal with Events</h4>
      <p v-for="n in 3">Scroll down to close</p>
      <button class="primary" @click="$refs.eventsModal.close()">Close</button>
    </q-modal>

<!-- -->


  </div>
</template>
<script>
import { mapGetters} from 'vuex'
import { Dialog } from 'quasar-framework'
import Vue from 'vue'
Vue.component('grupos', require('./Grupos.vue'));
  export default{
    data(){
      return{
        equipo_detalle: null,
        datos_equipo:[],
        partidos_equipo: []
      }
    },
    computed:{
      ...mapGetters({datos: 'polla/datospolla'}),
      equipos(){
        return this.datos.equipos
        //return _.orderBy(this.datosEquipos.equipos, ['grupo'], ['asc'])
      },
      partidos(){
        return this.datos.partidos
      }

    },
    watch:{
      equipo_detalle: function(val){
        var respuesta = _.filter(this.equipos, { 'id': val });
        this.datos_equipo = respuesta[0];
      }, 
      datos_equipo: function(val){
        var p_local = val.partidosl
        var p_visit = val.partidosv
        //this.partidos_equipo = _.merge(p_local, p_visit);
        var  tempo = p_local.concat(p_visit);
        tempo  = _.orderBy(tempo, ['id'], ['asc']);
        
        this.partidos_equipo = tempo

      }

    },
    methods:{
      grupo(grupo){
        return _.filter(this.equipos, { 'grupo': grupo });
      },
      detalleEquipo(id_equipo){
        this.equipo_detalle = id_equipo;
        this.$refs.basicModal.open()
      },
      nombreEquipo(id){
        var resultado =  _.filter(this.equipos, { 'id': id });
        //console.log( resultado )
        return resultado[0].nombre;
      },
      ciudad(id){
        var resultado =  _.filter(this.ciudades, { 'id': id });
        return resultado[0].nombre;
      },
      estadio(id){
        var resultado =  _.filter(this.ciudades, { 'id': id });
        return resultado[0].estadio;
      },
      fecha_partido(id){
        var salida =  _.filter(this.partidos, { 'id': id });
        salida =  _.map(salida, 'fecha');
        salida = salida[0]
        return moment(salida).format("dddd MMM DD hh:mm")

      }

    }
  }
</script>
<style scoped>
p.rusia{
  font-family: 'dusha';
  font-size: 3em;

}
  .pais_button{
    margin-bottom: 0.2em;
  }
.card-title{
  font-family: 'dusha';
}  
</style>

<!-- 
"id": 1,
    "nombre": "Rusia",
    "abr": "ru",
    "color": "#698414",
    "bombo": 4,
    "confederacion": "Europa",
    "grupo": "A",
    "posgrupo": "1",
    "capital": "Moscú",
    "fifa": 89,
    "pg": 1,
    "pe": 2,
    "pp": 2,
    "gf": 3,
    "gc": 2,
    "created_at": "2017-07-27 16:33:52",
    "updated_at": "2017-07-27 16:33:52",
    "partidosl": [
      {
        "id": 1,
        "local_id": 1,
        "visitante_id": 2,
        "cities_id": 1
      },
      {
        "id": 3,
        "local_id": 1,
        "visitante_id": 3,
        "cities_id": 3
      }
    ],
    "partidosv": [
      {
        "id": 5,
        "local_id": 4,
        "visitante_id": 1,
        "cities_id": 7
      }
    ]
  },

-->