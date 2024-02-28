<template>
    <h1>Technologies</h1>
    <ul>
        <li v-for="technology in technologies" :key="technology.id">
        {{ technology.name }}
        </li>
    </ul>
</template>

<script>

import axios from 'axios';

    export default{
        name: 'ApiContent',
        data(){
            return{
                technologies: []
            }
        },

        mounted() {
           

                axios.get('http://localhost:8000/api/v1/technologies')
                .then(res=>{
                    const data = res.data;
                    
                    if (data.status == 'succes')
                    this.technologies =data.technologies;

                    console.log('technologies', this.technologies)

                })
                .catch(err=>{

                    console.err(err);
                })
        }

    }



</script>
