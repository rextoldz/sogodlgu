 <template>
    <div>
        <div class="gallery" v-for="event in events" >
            <img src="" alt="">
          	<span class="event-title"><a target="_blank" href="">{{ event.name }}</a></span>
          	<div class="desc">
          		<time class="event-date"></time>
          		<span class="event-venue"></span>
          	</div>
        </div> 
        <div class="w3-container">
            <small class="no-link" v-if="events < 1" href="">No Event Posted.</small>
            <a class="more-link" v-if="events > 0" href="">More events</a>
        </div>
    </div>
 </template>
<script>
    export default {
        data(){
            return {
                events: null
            }
        },
        mounted () {
            axios
              .get('/api/events')
              .then(response => (this.events = response.data))
              // .catch(error => console.log(error))
              // .finally(() => this.loading = false)
        }
    }
</script>