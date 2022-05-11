<template>
    <main>
       <div class="container">
           <h1>Benvenuti in Deliveboo!!</h1>
           <div class="row">
               <form action="" class="row" @submit.prevent="filteredType()">
                    <div class="col">
                        <div v-for="type in types" :key="type.id">
                            <div>
                                <input class="form-check-input" type="checkbox" v-model="selection" :value="type.id" :id="'type_' + type.id">
                                <label class="form-check-label" :for="'type_' + type.id">{{type.name}}</label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Cerca</button>
                        </div>
                    </div>
               </form>
                
            </div>
            
           <!-- <div class="row m-5">
               <div class="col-4 " v-for="item in items" :key="item.id" >
                   <div class="card">
                       <div class="card-body">
                           <h5 class="card-title">{{item.item_name}}</h5>
                       </div>
                   </div>
                </div>
            </div> -->

            <div class="row m-5">
               <div class="col-4" v-for="user in users" :key="'user' + user.id">
                   <div class="card">
                       <div v-for="(link, index) in navLinks" :key="index" class="card-body">
                           <router-link :to="{name: link.to}" class="card-title">{{user.restaurant_name}}</router-link>
                       </div>
                   </div>
                </div>
            </div>

            <!-- <div class="row m-5">
               <div class="col-4 " v-for="selected in selection" :key="selected.id">
                   <div class="card">
                       <div class="card-body">
                           <h5 class="card-title">{{selected.id}}</h5>
                           <ul>

                           </ul>
                       </div>
                   </div>
                </div>
            </div> -->
            
       </div>
    </main>


</template>

<script>
export default {
    name: 'Main',
    data: function(){
        return {
            selection:[],
            types:[],
            users:[],

            navLinks: [
                {
                    to : 'restaurant-menu',
                    name : 'Menu',
                },
            ]
        }
    },

    methods: {

        getTypes() {
            axios.get('http://127.0.0.1:8000/api/types/').then((response) => {

            this.types = response.data.results;

            });
        },

        getUsers() {
            axios.get('http://127.0.0.1:8000/api/users/').then((response) => {

            this.users = response.data.results;

            });
        },

        filteredType() {
            this.users = [];
                console.log('api/users/'+ this.selection)

                if(this.selection.length > 0){
                    axios.get('api/users/'+ this.selection) .then(response =>{
                        this.users = response.data.results;
                    })
                }else{
                    this.getUsers();
                }
        }

    },

    created: function(){
        this.getTypes();
        this.getUsers();
    }
}
</script>

<style>

</style>
