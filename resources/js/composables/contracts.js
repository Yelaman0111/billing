import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";


export default function useContracts() {

    const contracts = ref([]);
    const contract = ref([]);

    const errors = ref('');
    const router = useRouter();

    const getContracts = async () => {
        let response = await axios.get('/api/contracts');
        contracts.value = response.data.data;
    }

    const getContract = async (id) => {
        let response = await axios.get('/api/contracts/' + id);
        contract.value = response.data.data[0];
        console.log(contract.value)
    }

    const storeContract = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/contracts', data)
            await router.push({name: 'contracts.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }

    return {
        contracts,
        contract,
        errors,
        getContracts,
        getContract,
        storeContract,
    }
}