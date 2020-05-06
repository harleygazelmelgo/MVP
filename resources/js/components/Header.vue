<template>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
        <img class="d-inline-block align-top" src="image/logo1.png" style="width:100px height: 50px" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" >
        <!-- <li class="nav-item" >
          <a class="nav-link" href="/" >
            Home
            <span class="sr-only"></span>
          </a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="/aboutUs" >About Us</a>
           <span class="sr-only"></span>
        </li>

        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdownMenuLink"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >Products</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/basketball">Basketball Shoes</a>

            <a class="dropdown-item" href="/jordan">Jordan Exclusives!</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
    name: 'Header',
}

</script>


<style scoped>

a {
    color: #DFDFDF;
    font-family: 'Avenir, Helvetica, Arial, sans-serif';
}


</style>
