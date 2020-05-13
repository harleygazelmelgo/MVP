<template>
   <div class="container bodycontent">
       <br>
        <a class="btn btn-primary" href="/editShoes" role="button">Edit Shoes </a>
        <a class="btn btn-primary" href="/delShoes" role="button">Delete Shoes </a>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <div class="card">
                    <form action="/uploadProducts" method="post" class="form-horizontal" enctype="multipart/form-data">

                        <input type="hidden" :value="tokenValue" id="token" name="_token" />
                        <br />
                        <label for="fname">Name:</label>
                        <br />
                        <input type="text" id="fname" name="name" style="width:200px"/>
                        <br />
                        <br />
                        <label for="lname">Price:</label>
                        <br />
                        <input type="text" id="lname" name="price" style="width:200px" />
                        <br />
                        <br />
                        <label for="lname">Stores:</label>
                        <br />

                        <input type="text" id="lname" name="stores" style="width:200px" />
                        <br />
                        <br />
                        <label for="fname">Type:</label>
                        <br />
                        <input type="text" id="fname" name="type" style="width:200px" />
                        <br />
                        <br />
                        <input type="file" id="myFile" name="filename">
                        <br />
                        <br />
                        <input type="submit" class="btn-btn-info" value="Submit" />

                    </form>

                 </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
  name: 'Dashboard',
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

a {

    margin-bottom: 20px;
}

</style>
