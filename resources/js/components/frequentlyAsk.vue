<template>
  <div>
    <b-btn @click="showCollapse = !showCollapse"
           :class="showCollapse ? 'collapsed' : null"
           aria-controls="collapse4"
           :aria-expanded="showCollapse ? 'true' : 'false'">
      Toggle Collapse
    </b-btn>
    <b-collapse class="mt-2" v-model="showCollapse" id="collapse4">
      <b-card>
        I should start open!
      </b-card>
    </b-collapse>
  </div>
</template>

<script>
export default {
  data () {
    return {
      showCollapse: true
    }
  }
}
</script>

<-- collapse-4.vue -->




<style>

</style>



