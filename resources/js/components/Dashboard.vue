<template>
  <form action="/dashboarb" method="get" class="form-horizontal">
    <br />
    <label for="fname">Name:</label>
    <br />
    <input type="text" id="fname" name="fname" />
    <br />
    <label for="lname">Price:</label>
    <br />
    <input type="text" id="lname" name="lname" />
    <br />
    <br />
    <label for="lname">Stores:</label>
    <br />
    <input type="text" id="lname" name="lname" />
    <br />
    <input type="file" id="myFile" name="filename">
    <br />
    <br />
    <input type="submit" class="btn-btn-info" value="Submit" />
  </form>
</template>

<script>
export default {
  name: "Dashboard"

};

</script>


<style scoped>
</style>
