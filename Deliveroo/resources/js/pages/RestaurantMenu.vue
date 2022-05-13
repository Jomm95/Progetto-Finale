<template>
  <div>
      <div class="row m-5">
        <div v-for="item in users" :key="item.id">
            <div class="card col-4" v-if="item.slug == test">
                <div class="card-body">
                    <h5 class="card-title">{{item.name}}</h5>
                </div>
            </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
    name: 'RestaurantMenu',
    data: function(){
        return {
            element: null,
            users: [],
            test: this.$route.params.slug,
        }
    },

    methods: {
        // getSlug(){
        //     const slug = this.$route.params.slug;
        //     // console.log(slug)
        //     // console.log('/api/users/' + slug)

        //     axios.get('/api/users/' + slug).then(response => {
        //         this.element = response.data;
        //         console.log(response.data)
        //         console.log('ddddddd')
        //     })

        //     .catch(error => {
        //         console.log(error);
        //     })

        // },

        getUsers(){
            axios.get('/api/users').then(response => {
                this.users = response.data.results;
                console.log(response.data.results)
                console.log('aaaaaaaaaaaaa')
            })

            .catch(error => {
                console.log(error);
            })

        },

    },

    mounted() {
        // this.getSlug();
        this.getUsers();
    }
}
</script>

<style>

</style>
