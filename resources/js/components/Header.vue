<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img class="logo" src="image/logogamay.png" />
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
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            Home
            <span class="sr-only"></span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/aboutUs">About Us</a>
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
            <a class="dropdown-item" href="/basketball">Basketball</a>
            <a class="dropdown-item" href="/jordan">Jordan</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {};
</script>


<style scoped>
.navbar-nav ul {
  float: right;
  margin-right: 100px;
}

.nav-item {
  list-style: none;
  margin: 0 8px;
  display: inline-block;
  line-height: 30px;
}
</style>
