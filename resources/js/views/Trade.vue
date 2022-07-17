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

    const REFRESH_TIME = 20;

    const BITCOIN  = 'bitcoin';
    const ETHEREUM = 'ethereum';
    const LITECION = 'litecoin';
    const DOGECOIN = 'dogecoin';
    const SOLANA   = 'solana';
    const POLKADOT = 'polkadot'

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
            }
        },

        /**
         * Created
         */
        created () {
            this.getCurrentPrices();
            setInterval(() => {
                this.getCurrentPrices();
            }, REFRESH_TIME * 1000);
        },

        /**
         * Displayed currencies list
         */
        computed: {
            coinsList () {
                return [BITCOIN, ETHEREUM, LITECION, DOGECOIN, SOLANA, POLKADOT]
            }
        },

        /**
         * Methods
         */
        methods: {
            updateData (data) {
                this.coins = [];
                this.coinsList.forEach(coin => {
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
                    url: 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd',
                    headers: {
                        'Content-Type':  'application/json',
                    }
                }).then((response) => {
                    this.updateData(response.data);
                })
            }
        }
    }
</script>