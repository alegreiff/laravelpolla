<template>
	<div>
		Hola, soy el grupo {{ grupo}}
	</div>
</template>
<script>
	export default{
		props: {
			grupo: null
		}
	}
</script>