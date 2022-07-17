<template>
    <div class="header">
        <jinn/>
        <router-link 
            v-for="(link, index) in links"
            :key="index"
            :to="link.href"
            tag="div"
            class="header-link"
        >
            {{ link.name }}
        </router-link>
    </div>
</template>
<script>
    import Jinn from './Jinn.vue';

    export default {
        /**
         * Name
         */
        name: 'Header',

        /**
         * Data
         */
        data () {
            return {
                links: [
                    {
                        href: '/',
                        name: 'Home'
                    },
                    {
                        href: '/casino',
                        name: 'Casino'
                    },
                    {
                        href: '/bet',
                        name: 'Bet'
                    },
                    {
                        href: '/trade',
                        name: 'Trade'
                    }
                ]
            }
        },

        /**
         * Components
         */
        components: {
            Jinn,
        }
    }
</script>