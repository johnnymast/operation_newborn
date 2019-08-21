<template>
    <div class="editor-properties">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Properties</h3>
            </div>
            <div class="panel-body">

                <form>
                    <div class="form-group">
                        <label for="inputEmail3">Type</label>
                        <select class="form-control" disabled>
                            <option selected="selected">button</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3">On state</label>
                        <select class="form-control">
                            <option v-for="file in images" :value="file.file">{{file.caption}}</option>
                            <option>start_off.png</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3">Off state</label>
                        <select class="form-control">
                            <option>start_on.png</option>
                            <option selected="selected">start_off.png</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3">X</label>
                        <input type="number" class="form-control" id="inputEmail3" value="1" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">Y</label>

                        <input type="number" class="form-control" id="inputPassword3" value="5" placeholder="0">
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>

<script>
  export default {
    name: 'editor-properties',
      data() {
          return {
              images: []
          };
      },
      mounted() {
          axios.get("/johnny/images")
          .then(response => {
              this.images = response.data
          })
      }
  }
</script>

<style scoped>
    .editor-properties {
        position: relative;
        right: 0px;
        width: 100%;
        color: #000000;
    }

    .editor-properties .panel-default > .panel-heading {
        background-color: #f5f5f5;
    }
</style>