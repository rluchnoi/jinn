<template>
    <div>
        <div>
            <div>
                <div 
                    v-for="coin in coins"
                    class="coin"
                >
                    <div class="coin-name-image">
                        <img 
                            class="coin-image" 
                            :src="coin.image"
                        />
                        <span>{{ coin.name }}</span>
                    </div>
                    <span>{{ 'Price: ' + coin.price + '$' }}</span>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'
    import Coin from '../classes/coin'
    import { REFRESH_TIME, supportedTokens } from '../variables/tradeConfig';

    export default {
        /**
         * Name
         */
        name: 'Trade',

        /**
         * Data
         */
        data () {
            return {
                coins: [],
                intervalId: null,
            }
        },

        /**
         * Mounted
         */
        mounted () {
            this.getCurrentPrices();
            this.intervalId = setInterval(() => {
                this.getCurrentPrices();
            }, REFRESH_TIME * 1000);
        },

        /**
         * Destroyed
         */
        destroyed () {
            clearInterval(this.intervalId);
        },

        /**
         * Methods
         */
        methods: {
            updateData (data) {
                this.coins = [];
                supportedTokens.forEach(coin => {
                    const coinData = data.filter(item => item.id === coin)[0];
                    const coinParsed = new Coin(coinData.current_price, coinData.image, coinData.name);
                    this.coins.push(coinParsed);
                })
            },
            /**
             * Get prices
             */
            getCurrentPrices () {
                axios({
                    method: 'get',
                    url: 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd'
                }).then(response => {
                    this.updateData(response.data);
                })
            }
        }
    }
</script>