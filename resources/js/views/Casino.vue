<template>
    <div class="casino-name">
        <h1>Jinn<b>Casino</b></h1>
        <dice/>
    </div>
</template>
<script>
    import Dice from '../components/Dice.vue'

    export default {
        /**
         * Name
         */
        name: 'Casino',

        /**
         * Dice
         */
        components: {
            Dice
        }
    }
</script>