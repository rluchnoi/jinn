<template>
    <div 
        class="dice-wrapper" 
        @click="changeSize"
    >
        <div class="box-area">
            <dice-side
                v-for="(sideClass, index) in sidesClasses"
                :key="index"
                :class="defineCurrentClasses(sideClass)"
            />
        </div>
    </div>
</template>
<script>
    import DiceSide from './DiceSide.vue';

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
                sizeIsLarge: false
            }
        },

        /**
         * Components
         */
        components: {
            DiceSide
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
             * Dice sides classes
             */
            sidesClasses () {
                return [
                    'box-front', 
                    'box-right',
                    'box-back',
                    'box-left',
                    'box-top',
                    'box-bottom'
                ];
            },

            /**
             * Currect dice side size
             */
            currentDiceSizeClass () {
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
             * Define current dice side classes
             * @param {*} sideClass 
             */
            defineCurrentClasses (sideClass) {
                return sideClass + ' ' + this.currentDiceSizeClass;
            },

            /**
             * Change dice size
             */
            changeSize () {
                this.sizeIsLarge = !this.sizeIsLarge
            }
        }
    }
</script>