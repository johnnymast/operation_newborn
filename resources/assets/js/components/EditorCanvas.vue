<template>
    <div v-html="canvas" id="editor-canvas" class="editor-canvas" :class="editor_class">
        HI@
    </div>
</template>

<script>

  const PIXI = require('pixi.js')
  export default {
    name: 'editor-canvas',
    data: function () {
      return {
        editor_class: '',
        canvas: null,
      }
    },
    mounted: function () {


      console.log('hi dit werkt')

      this.bus.$on('resize_mobile', ($event) => {
        this.editor_class = 'is-mobile'
      })

      this.bus.$on('resize_desktop', ($event) => {
        this.editor_class = 'is-desktop'
      })

      var app = new PIXI.Application(800, 600, {backgroundColor : 0xffffff});
      document.getElementById('editor-canvas').appendChild(app.view);
//      this.canvas = app.view;

      // create a new Sprite from an image path
      var bunny = PIXI.Sprite.fromImage('https://raw.githubusercontent.com/pixijs/examples/gh-pages/required/assets/bunny.png')

      // center the sprite's anchor point
      bunny.anchor.set(0.5);

      // move the sprite to the center of the screen
      bunny.x = app.screen.width / 2;
      bunny.y = app.screen.height / 2;

      app.stage.addChild(bunny);

      // Listen for animate update
      app.ticker.add(function(delta) {
          // just for fun, let's rotate mr rabbit a little
          // delta is 1 if running at 100% performance
          // creates frame-independent tranformation
          bunny.rotation += 0.1 * delta;
      });

//      document.body.appendChild(app.view);

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