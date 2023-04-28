<template>
    <!-- <div v-if="errors">
      <div v-for="(v, k) in errors" :key="k" class="bg-red-500 text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
        <p v-for="error in v" :key="error" class="text-sm">
          {{ error }}
        </p>
      </div>
    </div> -->
    <form class="space-y-6" v-on:submit.prevent="saveCompany">
        <div class="space-y-4 rounded-md shadow-sm">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Полное наименование</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name"
                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           v-model="form.name">
                </div>
            </div>
            
            <div>
                <label for="billing_name" class="block text-sm font-medium text-gray-700  mt-3">Для биллинга наименование</label>
                <div class="mt-1">
                    <input type="text" name="billing_name" id="billing_name"
                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           v-model="form.billing_name">
                </div>
            </div>
            
            <div>
                <label for="rnn" class="block text-sm font-medium text-gray-700  mt-3">РНН(если есть)</label>
                <div class="mt-1">
                    <input type="text" name="rnn" id="rnn"
                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           v-model="form.rnn">
                </div>
            </div>

            <div>
                <label for="ident_number" class="block text-sm font-medium text-gray-700 mt-3">БИН</label>
                <div class="mt-1">
                    <input type="text" name="ident_number" id="ident_number"
                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           v-model="form.ident_number">
                </div>
            </div>
            
            <div>
                <label for="city_id" class="block text-sm font-medium text-gray-700 mt-3">Юридический адрес</label>
                <label for="city_id" class="block text-sm font-medium text-gray-700">Регион</label>
                <div class="mt-1">
                    <select v-model="form.region" @change="fetchLocality()"
                    class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option v-for="region in regions"  v-bind:key="region.id" :value="region.id" >
                            {{region.title}}
                        </option>
                    </select>
                </div>
                <div class="mt-1">
                    <select v-model="form.locality" @change="fetchCities()"
                     class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option v-for="locality in localities"  v-bind:key="locality.id" :value="locality.id" >
                            {{locality.title}}
                        </option>
                    </select>
                </div>
                <div class="mt-1">
                    <select v-model="form.city" class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option v-for="city in cities"  v-bind:key="city.id" :value="city.id" >
                            {{city.title}}
                        </option>
                    </select>
                </div>

                <label for="street" class="col text-sm font-medium text-gray-700">Улица, микрорайон</label>
                <input type="text" name="street" id="street"
                class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.street">
                
                <label for="house" class="col text-sm font-medium text-gray-700">Дом</label>
                <input type="text" name="house" id="house"
                class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.house">
                
                <label for="housing" class="col text-sm font-medium text-gray-700">Корпус</label>
                <input type="text" name="housing" id="housing"
                class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.housing">
                
                <label for="office" class="col text-sm font-medium text-gray-700">Квартира, офис</label>
                <input type="text" name="office" id="office"
                class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.office">

                <label for="postcode" class="col text-sm font-medium text-gray-700">Индекс</label>
                <input type="text" name="postcode" id="postcode"
                class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.postcode">

                <label for="comment" class="col text-sm font-medium text-gray-700">Комментарий</label>
                <input type="text" name="comment" id="comment"
                class="w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.comment">
            </div>


            <div>
                <label for="ip" class="block text-sm font-medium text-gray-700 mt-3">ИП Свидетельство</label>
                    <div class="mt-1 row">
                        <label for="ip_serial" class="col text-sm font-medium text-gray-700">Серия</label>
                        <input type="text" name="ip_serial" id="ip_serial"
                        class="col-5 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ip_serial">

                        <label for="ip_number" class="col text-sm font-medium text-gray-700">№</label>
                        <input type="text" name="ip_number" id="ip_number"
                        class="col ml-5 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ip_number">

                        <label for="ip_date" class="col text-sm font-medium text-gray-700">Дата</label>
                        <input type="date" name="ip_date" id="ip_date"
                        class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ip_date">

                    </div>
            </div>

            <div>
                <label for="ip" class="block text-sm font-medium text-gray-700 mt-3">ИП талон</label>
                    <div class="mt-1 row">
                        <label for="ip_number" class="col text-sm font-medium text-gray-700">№</label>
                        <input type="text" name="ip_number" id="ip_number"
                        class="col ml-5 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ip_number">

                        <label for="ip_date" class="col text-sm font-medium text-gray-700">Дата</label>
                        <input type="date" name="ip_date" id="ip_date"
                        class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.ip_date">
                    </div>
            </div>

            <div>
                <label for="nds" class="block text-sm font-medium text-gray-700 mt-3">НДС</label>
                    <div class="mt-1 row">
                        <label for="nds_serial" class="col text-sm font-medium text-gray-700">Серия</label>
                        <input type="text" name="nds_serial" id="nds_serial"
                        class="col-5 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.nds_serial">

                        <label for="nds_number" class="col text-sm font-medium text-gray-700">№</label>
                        <input type="text" name="nds_number" id="nds_number"
                        class="col ml-5 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.nds_number">

                        <label for="nds_date" class="col text-sm font-medium text-gray-700">Дата</label>
                        <input type="date" name="nds_date" id="nds_date"
                        class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        v-model="form.nds_date">

                    </div>
            </div>

            <div>
                <label for="nds_serial" class="block text-sm font-medium text-gray-700 mt-3">Адрес для доставки</label>
                <div class="mt-1 row">

                    <label for="delivery_city" class="col text-sm font-medium text-gray-700">г.</label>

                    <select v-model="form.delivery_city" class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option v-for="region in regions"  v-bind:key="region.id" :value="region.id" >
                            {{region.title}}
                        </option>
                    </select>

                    <label for="delivery_address" class="col text-sm font-medium text-gray-700">Адрес</label>
                    <input type="text" name="delivery_address" id="delivery_address"
                    class="col ml-5 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="form.delivery_address">

                </div>
            </div>

            <div>
                <label for="vip" class="block text-sm font-medium text-gray-700 mt-3">Категория</label>
                <div class="mt-1">
                    <select v-model="form.vip" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        
                        <option>
                            Обычный
                        </option>
                         <option>
                            Vip
                        </option>
                         <option>
                            SuperVip
                        </option>
                         <option>
                            SuperExtraVip
                        </option>

                    </select>
                </div>
            </div>

        </div>
        <button type="submit"
                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent ring-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25">
            Save
        </button>
    </form>
</template>
<script>

import {reactive} from "vue"
// import useUsers from '../../composables/users';
import {onMounted} from "vue"
import useAddresess from '../../composables/addresses'

export default {
   setup() {
        const form = reactive({
            'name': '',
            'billing_name': '',
            'rnn': '',
            'ident_number': '',
            'ip_serial': '',
            'ip_number': '',
            'ip_date': '',
            'nds_serial': '',
            'nds_number': '',
            'nds_date': '',
            'delivery_city': '',
            'delivery_address': '',
            'vip': '',
            'region': '',
            'locality': '',
            'city': '',
            'street': '',
            'house': '',
            'housing': '',
            'office': '',
            'postcode': '',
            'comment': '',
            
        });

        const { regions, localities, cities, getRegions, getCities, getLocalities,} = useAddresess();

        onMounted(getRegions());

        function fetchLocality() {
            getLocalities(form.region);
        };

        function fetchCities() {
            getCities(form.locality);
            console.log(form.locality)
        };
        // const saveCompany = async () => {
        //     await storeUser({...form});
        // }
    
       
        return {
            form,
            regions,
            localities,
            cities,
            fetchLocality,
            fetchCities
        }
    },
}


</script>