import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";


export default function useAddresses() {

    const regions = ref([]);
    const cities = ref([]);
    const localities = ref([]);

    const getRegions = async () => {
        let response = await axios.get('/api/address/regions');
        regions.value = response.data.data;
    }
    const getCities = async (id) => {
        let response = await axios.get('/api/address/cities/' + id);
        cities.value = response.data.data;
    }
    const getLocalities = async (id) => {
        let response = await axios.get('/api/address/localities/' + id);
        localities.value = response.data.data;
    }

    return {
        regions,
        cities,
        localities,
        getRegions,
        getCities,
        getLocalities,
    }
}