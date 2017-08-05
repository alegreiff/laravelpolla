<template>
  <!-- root node required -->
  <div>
    <!-- your content -->
    <div class="layout-padding">
      <!-- if you want automatic padding -->
<div class="row wrap big-gutter">
  <div class="width-1of4" v-for="partido in partidos">
    <p> {{ partido.grupo }} </p>
    {{ nombreEquipo(partido.local_id) }} vs 
    {{ nombreEquipo(partido.visitante_id) }}

    <p> {{ ciudad(partido.cities_id) }} </p>
    <p> {{ estadio(partido.cities_id) }} </p>
    
  </div>
</div>

<div id="view-flexbox">
  

		<div class="row gutter">
		  <div class="borde width-2of3">2/3</div>
		  <div class="borde width-1of5">1/5</div>
		  <div class="borde auto">auto</div>
		  <div class="borde auto">auto</div>
		</div> 

	
		<div class="row small-gutter">
          <div class="auto">
            <div>1/2</div>
          </div>
          <div class="auto">
            <div>1/2</div>
          </div>
        </div>
        <div class="row big-gutter">
          <div class="auto">
            <div>1/2</div>
          </div>
          <div class="auto">
            <div>1/2</div>
          </div>
        </div>
</div>

    </div>
  </div>
</template>
<script>
import { mapGetters} from 'vuex'
  export default{
    data(){
      return{
      }
    },
    computed:{
      //...mapGetters(['recursos']),
      //...mapGetters([datosEquipos: 'polla/datospolla']),
      ...mapGetters({datos: 'polla/datospolla'}),
      partidos(){
        return this.datos.partidos
        //return _.orderBy(this.datosEquipos.equipos, ['grupo'], ['asc'])
      },
      ciudades(){
        return this.datos.ciudades
      }, 
      equipos(){
        return this.datos.equipos
      }

    },
    /*computed: mapGetters({  
            datosEquipos: 'polla/datospolla'
    }),*/
    methods:{
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
      }
    }

  }
</script>

<style lang="stylus" scoped>
#view-flexbox
  margin-top 30px
  max-width 95vw
  .row, .column, .flex
    > div > div
      padding 10px
      border-radius 3px
      background rgba(147, 128, 108, .1)
      text-align center
  &.with-border
    .row, .column, .flex
      border 2px solid teal
      > div
        border 1px dashed orange
</style>

<!--
  {
    "id": 2,
    "nombre": "Moscú",
    "estadio": "Otkrytie Arena",
    "capacidad": 46990,
    "hora": 3,
    "latitud": 55.817795,
    "longitud": 37.440701,
    "created_at": "2017-07-28 15:41:20",
    "updated_at": "2017-07-28 15:41:20"
  },


{
    "id": 1,
    "local_id": 1,
    "visitante_id": 2,
    "fecha": "2018-06-14 18:00:00",
    "fase": 5,
    "grupo": "A",
    "cities_id": 1,
    "lg": null,
    "vg": null,
    "created_at": "2017-07-28 15:41:20",
    "updated_at": "2017-07-28 15:41:20"
  }

{
    "id": 1,
    "nombre": "Rusia",
    "abr": "ru",
    "color": "#3b04a2",
    "bombo": 1,
    "confederacion": "Suramérica",
    "grupo": "A",
    "posgrupo": "1",
    "capital": "Moscú",
    "fifa": 93,
    "pg": 2,
    "pe": 3,
    "pp": 2,
    "gf": 3,
    "gc": 2,
    "created_at": "2017-07-28 15:41:20",
    "updated_at": "2017-07-28 15:41:20",
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