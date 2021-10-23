<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel Vue Datatables Component Example - CodeCheef</div>

                    <div class="card-body">
                        <datatable :columns="columns" :data="rows"></datatable>
                        <datatable-pager v-model="page" type="abbreviated" :per-page="per_page"></datatable-pager>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
           return {
               columns: [{
                       label: 'id',
                       field: 'id'
                   },
                   {
                       label: 'Title',
                       field: 'title'
                       //field: 'translations.0.title'
                   }
               ],
               rows: [],
               page: 1,
               filter:  '',
               per_page: 5,
           }
       },
        methods:{
            getPosts: function() {
                axios.get('posts-index').then(function(response){
                    this.rows = response.data;
                }.bind(this));
            }
        },
        mounted: function(){
            this.getPosts()
        }
    }
</script>
