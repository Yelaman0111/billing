import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";


export default function useUsers() {

    const users = ref([]);
    const roles = ref([]);
    const managers = ref([]);
    const cities = ref([]);
    const user = ref([]);
    const errors = ref('');
    const router = useRouter();


    const getUsers = async () => {
        let response = await axios.get('/api/users');
        users.value = response.data.data;
    }

    const getRoles = async () => {
        let response = await axios.get('/api/roles');
        roles.value = response.data.data;
    }

    const getCities = async () => {
        let response = await axios.get('/api/cityforusers');
        cities.value = response.data.data;
    }

    const getUser = async (id) => {
        let response = await axios.get('/api/users/' + id)
        user.value = response.data.data;
    }

    const storeUser = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/users', data)
            await router.push({name: 'users.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const updateUser = async (id) => {
        errors.value = ''
        try {
            await axios.put('/api/users/' + id, user.value)
            await router.push({name: 'users.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    const destroyUser = async (id) => {
        await axios.delete('/api/users/' + id);
    }


    const getManagers = async () => {
        let response = await axios.get('/api/users/managers');
        managers.value = response.data.data;
    }

    return {
        user,
        users,
        roles,
        cities,
        managers,
        getUsers,
        getUser,
        updateUser,
        getRoles,
        getCities,
        destroyUser,
        storeUser,
        getManagers,
    }
}