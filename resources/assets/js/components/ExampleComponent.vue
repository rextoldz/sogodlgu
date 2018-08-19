<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body" style="color: green;">
                        I'm an example component. {{ ang }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        ang: 'hello!'
      }
    },
    created () {
      this.ang = 'bye!'
    }
  }
</script>
