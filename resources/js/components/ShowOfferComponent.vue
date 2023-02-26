<template>
    <div>
        <div v-if="isLoading" class="loader-page">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div class="container">
            <h1>Vue Data</h1>
        </div>

    </div>
</template>

<script>
export default {
    name: "ShowOfferComponent",

    props: {
        offerProp: {
            type: Object,
            required: true,
        },
    },

    data() {
        return {
            offer: [],
            isLoading: false,
        }
    },

    created() {
        this.offer = this.offerProp.data
    },

    methods: {

    },
}
</script>

<style scoped>

</style>
