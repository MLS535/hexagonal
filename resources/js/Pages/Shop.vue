

<template>
    <Head title="shops" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                SHOPS
            </h2>
            <div v-for="shop in shops" :key="shop[0].ShopId" class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{ shop[0].ShopName }}

                        </div>
                    </div>
                </div>
            </div>
        </template>


    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import {Head} from "@inertiajs/inertia-vue3";

export default {
    props: {
        shops: Array,
    },
    components: {
        BreezeAuthenticatedLayout,
        Head
    },
    mounted() {
        console.log('this is shops')
        console.log(this.shops)
        console.log('And this.... Is What Every Shop has! WHOO');
        for (let shop of this.shops)
        {
            console.log(shop[0].ShopId);
        }
    }
}
</script>
