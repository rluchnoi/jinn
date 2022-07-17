<template>
    <div 
        class="dice-wrapper" 
        @click="changeSize"
    >
        <div class="box-area">
            <div 
                class="box large-side box-front"
                :class="currentClass"
            ></div>
            <div 
                class="box large-side box-right"
                :class="currentClass"
            ></div>
            <div 
                class="box large-side box-back"
                :class="currentClass"
            ></div>
            <div 
                class="box large-side box-left"
                :class="currentClass"
            ></div>
            <div 
                class="box large-side box-top"
                :class="currentClass"
            ></div>
            <div 
                class="box large-side box-bottom"
                :class="currentClass"
            ></div>
        </div>
    </div>
</template>
<script>
    export default {
        /**
         * Name
         */
        name: 'Dice',

        /**
         * Data
         */
        data () {
            return {
                sizeIsLarge: true
            }
        },

        /**
         * Computed
         */
        computed: {
            /**
             * large dice size
             */
            largeSizeClass () {
                return 'large-side';
            },

            /**
             * tiny dice size
             */
            tinySizeClass () {
                return 'tiny-side';
            },

            /**
             * Currect dice size
             */
            currentClass () {
                return this.sizeIsLarge 
                    ? this.largeSizeClass 
                    : this.tinySizeClass
            }
        },

        /**
         * Methods
         */
        methods: {
            /**
             * Change dice size
             */
            changeSize () {
                this.sizeIsLarge = !this.sizeIsLarge
            }
        }
    }
</script>