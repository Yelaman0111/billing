import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";


export default function useCompanies() {

    const companies = ref([]);
    const company = ref([]);
    const errors = ref('');
    const router = useRouter();

    const getCompanies = async () => {
        let response = await axios.get('/api/companies');
        companies.value = response.data.data;
    }


    const getCompany = async (id) => {
        let response = await axios.get('/api/companies' + id);
        company.value = response.data.data;
    }


    return {
        companies,
        company,
        getCompanies,
        getCompany,
    }
}