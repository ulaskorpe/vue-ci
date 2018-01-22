<template>

<div class="preview">

    <div>
        <h2> {{gifs.length}} GIFS</h2>

        <ul>
            <li v-for="gif in gifs">
                <img :src="gif.images.fixed_height.url" />
            </li>
        </ul>
    </div>

</div>
</template>

<script>
    module.exports = {
        props:['gifs']


    }

</script>
<style>
    li{
        list-style:none;float:left;margin: 10px;
        border: 1px solid darkred;
    }
</style>