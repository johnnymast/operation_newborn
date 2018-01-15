<template>
    <div>
        <div class="editor-wrapper">
            <div class="left">
                <editor-canvas/>
            </div>
            <div class="right">
                <editor-properties/>
                <editor-components/>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'editor'
  }
</script>

<style scoped>
    .editor-wrapper {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .editor-wrapper .left {
        position: relative;
        height: 100%;
        width: 84%;
        float: left;
    }

    .editor-wrapper .right {
        position: relative;
        height: 100%;
        width: 15%;
        float: right;
    }
</style>