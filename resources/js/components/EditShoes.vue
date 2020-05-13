<template>
    <div class="container bodycontent">
        <br>
        <a class="btn btn-primary" href="/dashboard" role="button">Upload Shoes </a>
        <a class="btn btn-primary" href="/delShoes" role="button">Delete Shoes </a>

            <form action="/editShoes" method="get" class="form-horizontal" enctype="multipart/form-data">
                <br />
                <input type="hidden" :value="tokenValue" id="token" name="_token" />
                <br />

                <label for="fname">Name:</label>
                <br />
                <input type="hidden"  id="name" name="_name" />
                <br />

                <label for="lname">Price:</label>
                <br />
                <input type="text" id="lname" name="price" />
                <br />
                <br />

                <label for="lname">Stores:</label>
                <br />
                <input type="text" id="lname" name="stores" />
                <br />

                <label for="fname">Type:</label>
                <br />
                <input type="text" id="fname" name="type" />
                <br />
                <br />
                <input type="file" id="myFile" name="filename">
                <br />
                <br />
                <input type="submit" class="btn-btn-info" value="Update Shoes" />
            </form>

    </div>

</template>

<script>
export default {
  name: 'EditShoes',
  data: function() {
      return {
          tokenValue: this.getTokenValue()

      };
  },

  methods: {
      getTokenValue: function(){
        //   console.log($('meta[name="csrf-token"]').attr('content'))
          return $('meta[name="csrf-token"]').attr('content')
      }
  }


};

</script>


<style scoped>



form {
    margin-top: 20px;
    margin-left: 60px;
    margin-bottom: 20px;
}


.bodycontent {
    min-height: 80vh;
}


</style>
