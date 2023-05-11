<template>
  <div>
    <h1>
      {{ contract.name }}
    </h1>
    <h1>
      Договор №: {{ contract.title }} от {{ contract.agr_date }}
    </h1>
    <h1>
      Договор рбк №: {{ contract.title_rbk }} от {{ contract.agr_date }}
    </h1>
    <h1>
      contract id {{ contract.id }} 
    </h1>
    <h1>
      Режим: {{ contract.mode}}
    </h1>
    <h1>
      Менеджер: {{ contract.manager.name }}
    </h1>
    <h1>
      Коннектор: {{ contract.connector }}
    </h1>


    <h1>
      Услуги: 
    </h1>

    <h1>
      Доступ в лк
    </h1>

  </div>
</template>

<script>

import useContracts from "../../composables/contracts";
import {onMounted} from "vue"


export default {
    props:{
        id:{
            required: true,
            type: String
        }
    },

   setup(props) {

        const { errors, contract, getContract } = useContracts();

        onMounted(getContract(props.id));

        console.log(contract);

        // onMounted(getLocalities(region));
        // onMounted(getCities(locality));

        // onMounted(getRoles());
        // onMounted(getCities());
        
        // const saveUser = async () => {
        //     console.log(company)
        //     await updateUser(props.id)
        // }

        return {
            errors,
            contract,
        }
   }

}
</script>