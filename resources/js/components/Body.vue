<template>

        <div id="carouselExampleFade" class="carousel slide carousel-fade bodycontent" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/HOME5.jpg" class="d-block " alt />
            </div>
            <div class="carousel-item">
                <img src="image/HOME3.jpg" class="d-block " alt />
            </div>
            <div class="carousel-item">
                <img src="image/HOME1.jpg" class="d-block " alt />
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>


</template>

<script>
export default {};
</script>

<style scoped>

.bodycontent {
    min-height: 80vh;
}

#carouselExampleFade {
    margin-top: 50px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 100px;
}

.d-block {
    width: 95vw;
    height: 70vh;
}

</style>
