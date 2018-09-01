<template>
	<div>
	<ul class="advisory" v-for="announcement in announcements">
			<li style="" class="news-item">
				<table cellpadding="4">
					<tbody>
						<tr>
							<!-- <td><img src="images/7.png" width="60" class="img-circle"></td> -->	
							<!-- <td><img src="{{ asset('images/advisory/no-klase.png')}}" width="60" class="img-circle"></td> -->
							<td><a href="#">{{ announcement.title }}</a>
							<p><span> {{ announcement.created_at }}</span></p>
							</td>								
						</tr>
					</tbody>
				</table>
			</li>
		</ul>
	</div>
</template>
<script>
    export default {
        data(){
            return {
              announcements: []
            }
        },
        mounted () {
            axios
              .get('/api/announcements')
              .then(response => (this.announcements = response.data))
              // .catch(error => console.log(error))
              // .finally(() => this.loading = false)
          }
    }
</script>