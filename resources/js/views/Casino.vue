<template>
    <div class="casino-name">
        <h1>Jinn<b>Casino</b></h1>
        <dice/>
    </div>
</template>
<script>
    import Dice from '../components/dice/Dice.vue'

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
        },

        /**
         * Mounted
         */
        mounted () {
            this.getGameResult();
        },

        methods: {
            /**
             * Get prices
             */
            getGameResult () {
                axios({
                    method: 'post',
                    url: 'http://localhost:8098/api/casino/play',
                    data: {
                        'type': 0,
                    }
                }).then(response => {
                    console.log(response)
                })
            }
        }
    }
</script>