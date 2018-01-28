<template>
    <div id="editor-canvas" class="editor-canvas" :class="editor_class">
    </div>
</template>

<script>
const PIXI = require("pixi.js");

export default {
  name: "editor-canvas",
  data: function() {
    return {
      editor_class: "",
      canvas: null,
      ration: 1,
      renderer: null,
      app: null
    };
  },
  mounted: function() {
    console.log("hi dit werkt");

    this.bus.$on("resize_mobile", $event => {
      this.editor_class = "is-mobile";
    });

    this.bus.$on("resize_desktop", $event => {
      this.editor_class = "is-desktop";
    });

    this.editor_class = "is-desktop";
    this.init_canvas();
  },

  methods: {
    init_canvas: function() {
      this.canvas = document.getElementById("editor-canvas");

      this.canvas = document.getElementById("editor-canvas");
      this.canvas.style.display = "block";

      this.ratio = this.canvas.offsetWidth / this.canvas.offsetHeight;
      this.app = new PIXI.Application(
        this.canvas.innerWidth,
        this.canvas.innerHeight,
        { backgroundColor: 0xffffff }
      );
      this.canvas.appendChild(this.app.view);

      // create a new Sprite from an image path
      var bunny = PIXI.Sprite.fromImage(
        "https://raw.githubusercontent.com/pixijs/examples/gh-pages/required/assets/bunny.png"
      );

      // center the sprite's anchor point
      bunny.anchor.set(0.5);

      // move the sprite to the center of the screen
      bunny.x = this.app.screen.width / 2;
      bunny.y = this.app.screen.height / 2;

      this.app.stage.addChild(bunny);

      // Listen for animate update
      this.app.ticker.add(function(delta) {
        // just for fun, let's rotate mr rabbit a little
        // delta is 1 if running at 100% performance
        // creates frame-independent tranformation
        bunny.rotation += 0.1 * delta;
      });

      const ro = new ResizeObserver((entries) => {
        for (const entry of entries) {
           console.log(this.app.renderer.resize(entry.contentRect.width, entry.contentRect.height))
        }
      });
      // Observe one or multiple elements
      ro.observe(this.canvas);
    }
  }
};
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
  display: block;
}

.editor-canvas.is-desktop {
  width: 100%;
}

.editor-canvas.is-mobile {
  width: 750px;
}
</style>