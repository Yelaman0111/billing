<template>
    <div v-if="errors">
      <div v-for="(v, k) in errors" :key="k" class="bg-red-500 text-red rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
        <p v-for="error in v" :key="error" class="text-sm">
          {{ error }}
        </p>
      </div>
    </div>

    <form class="space-y-6" v-on:submit.prevent="saveContract">
       
        <div class="mt-1">
            <label for="mode" class="block text-sm font-medium text-gray-700">Тип договора</label>
            <select v-model="form.mode"
            class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="1" >
                    Постоплата
                </option>
                <option value="2" >
                    Предоплата
                </option>
            </select>
        </div>
        
        <div>
            <label for="title_rbk" class="block text-sm font-medium text-gray-700">Номер договора RBK</label>
            <div class="mt-1">
                <input type="text" name="title_rbk" id="title_rbk"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="form.title_rbk">
            </div>
        </div>

        <div>
            <label  for="title" class="block text-sm font-medium text-gray-700 mt-3">Номер договора клиента</label>
            <div class="mt-1">
                <input type="text" name="title" id="title"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="form.title">
            </div>
        </div>

        <div>
            <label for="agr_date" class="block text-sm font-medium text-gray-700 mt-3">Дата подписания договора</label>
                <input type="date" name="agr_date" id="agr_date"
                class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.agr_date">
        </div>

        <div>
            <label for="date1" class="block text-sm font-medium text-gray-700 mt-3">Дата действия договора:</label>
                <input type="date" name="date1" id="date1"
                class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                v-model="form.date1">
        </div>

        <div class="mt-1">
            <label for="company_id" class="block text-sm font-medium text-gray-700">Компания</label>
            <select v-model="form.company_id"
            class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option v-for="company in companies"  v-bind:key="company.id" :value="company.id" >
                    {{company.name}}
                </option>
            </select>
        </div>

        <div class="mt-1">
            <label for="manager" class="block text-sm font-medium text-gray-700">Менеджер</label>
            <select v-model="form.manager"
            class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option v-for="manager in managers"  v-bind:key="manager.id" :value="manager.id" >
                    {{manager.name}}
                </option>
            </select>
        </div>

        <div>
            <label for="auction_sum" class="block text-sm font-medium text-gray-700">Фиксированная сумма</label>
            <div class="mt-1">
                <input type="number" name="auction_sum" id="auction_sum"
                    class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    v-model="form.auction_sum">
            </div>
        </div>

         <div class="mt-1">
            <label for="auction_vat" class="block text-sm font-medium text-gray-700">ндс</label>
            <select v-model="form.auction_vat"
            class="col mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="1" >
                    Включает
                </option>
                <option value="0" >
                    Не включает
                </option>
            </select>
        </div>

        <button type="submit"
                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md border border-transparent ring-gray-300 transition duration-150 ease-in-out hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25">
            Save
        </button>
    </form>
</template>
<script>

import {reactive} from "vue"
import {onMounted} from "vue"

import useContracts from '../../composables/contracts';
import useCompanies from "../../composables/companies";
import useUsers from "../../composables/users";

export default {
   setup() {
        const form = reactive({
            'mode': '',
            'title_rbk': '',
            'title': '',
            'agr_date': '',
            'date1': '',
            'company_id': '',
            'manager': '',
            'auction_sum': 0,
            'auction_vat': 0,
            'rbkip': 0,
        });


        const { storeContract, errors } = useContracts();
        const { companies, getCompanies } = useCompanies();
        const { managers, getManagers } = useUsers()

        onMounted(getCompanies)
        onMounted(getManagers)
        
        const saveContract = async () => {
            console.log(form)
            await storeContract({...form});
        }

        return {
            form,
            errors,
            companies,
            managers,
            saveContract,
        }
    },
}


</script>