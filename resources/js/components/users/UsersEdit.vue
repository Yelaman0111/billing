<template>
    <div v-if="errors">
      <div v-for="(v, k) in errors" :key="k" class="bg-red-500 text-white rounded font-bold mb-4 shadow-lg py-2 px-4 pr-0">
        <p v-for="error in v" :key="error" class="text-sm">
          {{ error }}
        </p>
      </div>
    </div>
    <form class="space-y-6" v-on:submit.prevent="saveUser">
        <div class="space-y-4 rounded-md shadow-sm">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <div class="mt-1">
                    <input type="text" name="name" id="name"
                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           v-model="user.name">
                </div>
            </div>
            
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Login</label>
                <div class="mt-1">
                    <input type="text" name="login" id="login"
                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           v-model="user.login">
                </div>
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1">
                    <input type="text" name="email" id="email"
                           class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           v-model="user.email">
                </div>
            </div>

            <div>
                <label for="role_id" class="block text-sm font-medium text-gray-700">Role</label>
                <div class="mt-1">
                    <select v-model="user.role_id" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        
                        <option v-for="role in roles"  v-bind:key="role.id" :value="role.id"  :selected="user.role_id==role.id">

                                {{role.role}}

                        </option>
                    </select>
                </div>
            </div>

            <div>
                <label for="role_id" class="block text-sm font-medium text-gray-700">City</label>
                <div class="mt-1">
                    <select v-model="user.city_id" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        
                        <option v-for="city in cities"  v-bind:key="city.id" :value="city.id"  :selected="user.city_id==city.id">

                                {{city.city}}

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

import {onMounted} from "vue"
import useUsers from '../../composables/users';

export default {
    props:{
        id:{
            required: true,
            type: String
        }
    },

    setup(props) {

        const { errors, user, roles, cities, getUser, updateUser, getRoles, getCities} = useUsers();

        onMounted(getUser(props.id));
        onMounted(getRoles());
        onMounted(getCities());
        
        const saveUser = async () => {
            console.log(user)
            await updateUser(props.id)
        }

        return {
            errors,
            user,
            roles,
            cities,
            saveUser
        }
   }
}


</script>