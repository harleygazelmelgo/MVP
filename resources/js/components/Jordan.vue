<template>
<h1 id="page-title"> JORDAN Exclusives!
    <hr>
    <br>
    <div class="row row-cols-1 row-cols-md-3">

            <div v-for="shoe in shoes" :key="shoe.id">
                    <div class="col-md-12" >
                        <div class="card" >
                            <img :src="shoe.image" class="card-img-top" alt="">
                                <div class="card-content">
                                    <br>

                                    <h3> {{shoe.name}}</h3>
                                    <p> {{shoe.price}} </p>
                                    <a :href="shoe.stores"> {{shoe.stores}} </a>
                                </div>
                        </div>
                    </div>
            </div>
    </div>
</h1>


</template>


<script>
export default {
    name: 'Jordan',
    data: function() {
        return {
            shoes: []

        };
    },

    mounted: function() {
        this.getShoes()

    },

    methods:  {
        getShoes: function() {
            axios.post('/getShoes', {type:'Jordan'})

            .then(response => {
                this.shoes = response.data.shoes;
            })
            .catch(error => {
                console.log(error);

            });
        }
    },


}
</script>


<style scoped>

#page-title {

    color: black;
    font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 45px;
    padding: 20px;
    text-align: left;
}

.card {
    max-width: 100%;
    height: auto;
    padding: 10px;
    margin: 5px 10px 10px 10px;

}

img {
    vertical-align: middle;
    border-radius: 15px

}

.card-content {
    color: black;
    font-family: "Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 20px;
}

a {

    font-size: 1.0rem;
    display: contents;
}




</style>
