<template>
    <div class="editor-canvas" :class="editor_class">
        HI
    </div>
</template>

<script>
  export default {
    name: 'editor-canvas',
    data: function () {
      return {
        editor_class: '',
      }
    },
    mounted: function () {
      this.bus.$on('resize_mobile', ($event) => {
        this.editor_class = 'is-mobile'
      })

      this.bus.$on('resize_desktop', ($event) => {
        this.editor_class = 'is-desktop'
      })

      this.editor_class = 'is-desktop'
    }
  }
</script>

<style scoped>
    .editor-canvas {
        position: absolute;
        border: 1px solid #d3e0e9;
        background: white;
        padding: 10px;
        -webkit-transition: width 300ms ease-in-out, height 300ms ease-in-out;
        -moz-transition: width 300ms ease-in-out, height 300ms ease-in-out;
        -o-transition: width 300ms ease-in-out, height 300ms ease-in-out;
        transition: width 300ms ease-in-out, height 300ms ease-in-out;
        width: 100%;
        height: 100%;
    }

    .editor-canvas.is-desktop {
        width: 100%;
    }

    .editor-canvas.is-mobile {
        width: 750px;
    }
</style>