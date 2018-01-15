<template>
    <div class="editor-components">


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Components</h3>
            </div>
            <div class="panel-body">

                <ul class="component-list">
                    <li>
                        Button
                    </li>
                    <li>
                        Sprite
                    </li>
                    <li>
                        Button
                    </li>
                    <li>
                        Sprite
                    </li>
                    <li>
                        Button
                    </li>
                    <li>
                        Sprite
                    </li>
                    <li>
                        Button
                    </li>
                    <li>
                        Sprite
                    </li>
                </ul>

            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'editor-properties'
  }
</script>

<style scoped>
    .editor-components {
        position: relative;
        margin-top: 10px;
        right: 0px;
        width: 100%;
        color: #000000;
    }


    .editor-components .panel-default > .panel-heading {
        background-color: #f5f5f5;
    }

    .editor-components ul.component-list {
        text-align: center;
        list-style: none;
        padding: 0px;
    }

    .editor-components ul.component-list li {
        text-align: center;
        display: inline-block;
        border: 1px solid #d3e0e9;
        margin-right: 5px;
        margin-bottom: 5px;
        padding: 10px;
        width: 40%;

    }
</style>