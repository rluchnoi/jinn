<template>
    <div 
        class="box box-front"
        :class="currentClass"
    ></div>
</template>
<script>
    export default {
        /**
         * Name
         */
        name: 'DiceSide',

        /**
         * Props
         */
        props: {
            currentClass: {
                type: Boolean,
                reqired: true,
            }
        }
    }
</script>