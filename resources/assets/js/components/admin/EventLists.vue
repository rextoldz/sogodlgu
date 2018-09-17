<template>
	<tbody v-for="event in events">
		<tr>
			<td>d{{ event.id }}</td>
			<td>d{{ event.title }}</td>
			<td>d{{ event.desctiptions }}</td>
			<td>df{{ event.venue }}</td>
		</tr>
	</tbody>
</template>
<script>
    export default {
        data(){
            return {
              events: []
            }
        },
        mounted () {
            axios
              .get('/admin/cruds/events')
              .then(response => (this.announcements = response.data))
              // .catch(error => console.log(error))
              // .finally(() => this.loading = false)
          }
    }
</script>