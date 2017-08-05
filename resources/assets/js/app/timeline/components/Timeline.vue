<template>
  <!-- root node required -->
  <div>
    <!-- your content -->
    <div class="layout-padding">
      <!-- if you want automatic padding -->
      {{ index }}
    </div>
  </div>
</template>
<script>
	export default{
		data(){
			return{
				index: null
			}
		},
		mounted(){
			axios.get('/api/timeline').then((response) => {
				this.index = response.data.data
			})
		}
	}
</script>