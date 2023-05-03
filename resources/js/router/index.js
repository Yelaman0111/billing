import { createRouter, createWebHistory } from "vue-router";

import UsersIndex from '../components/users/UsersIndex'
import UsersEdit from '../components/users/UsersEdit'
import UsersCreate from '../components/users/UsersCreate'
import CompaniesIndex from '../components/companies/CompaniesIndex'
import CompaniesCreate from '../components/companies/CompaniesCreate'
import CompaniesEdit from '../components/companies/CompaniesEdit'


const routes = [
    {
        path: '/users',
        name: 'users.index',
        component: UsersIndex
    },
    {
        path: '/users/create',
        name: 'users.create',
        component: UsersCreate
    },
    {
        path: '/users/:id/edit',
        name: 'users.edit',
        component: UsersEdit,
        props:true
    },
    {
        path: '/companies',
        name: 'companies.index',
        component: CompaniesIndex
    },
    {
        path: '/companies/create',
        name: 'companies.create',
        component: CompaniesCreate
    },
    {
        path: '/companies/edit',
        name: 'companies.edit',
        component: CompaniesEdit,
        props:true
    },

]


export default createRouter({
    history: createWebHistory(),
    routes
})