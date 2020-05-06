<template>
<div class="block">
    <img src="image/hm.jpg" style="margin-top: 10px; background-size: cover; background-position: center top; width: 100%; height:100%; opacity: 1">

    <hr>
        <div id="about" class="cms-page-static">
            <div class="col-lg-12 page-title">ABOUT US</div>
            <div class="col-lg-12 block-wrapper">
                <div class="col-xs-12 col-sm-6 col-lg-6 block-content">
                    Hoops Academy is the first and only basketball specialty concept store in the Calgary. Founded in 2019, Our lifelong passion for the game inspired us to give life to our basketball dreams. This is our hoop sanctuary. It’s a safe haven for those who live and breathe basketball. To the ones who obsess about the game as much as we do, this is home court. Our promise is to bring the best basketball products in the world and the most inspiring stories we can tell. To give everyone the power of choice. From sold out arenas to high school tournaments to rundown gyms and unsung street courts, the spirit of the game is the same. We all do it for the love
                </div>

                <div class="about-follow-container">
                    <div class="follow-section">FOLLOW @HOOPS_ACADEMY</div>
                    <div class="social-container">
                        <span class="social-icon-spacing">
                            <a class="view-facebook" href="https://wwww.facebook.com" > <img src="image/fb.png" /></a>

                        </span>

                        <span class="social-icon-spacing">
                            <a class="view-twitter" href="https://www.twitter.com" ><img src="image/twit.png" /></a>

                        </span>
                    </div>
                </div>
            </div>
        </div>

</div>
</template>


<script>
export default {
    name: 'AboutUs',

}
</script>


<style scoped>

.cms-page-static {
    border: 2px solid black;
    display: table;
    height: 80%;
    margin: 50px auto 200px;
    position: relative;
    text-align: justify;
    width: 90%;

}

.cms-page-static .page-title {
    background-color: black;
    color: white;
    font-family: 'Avenir, Helvetica, Arial, sans-serif';
    font-size: 35px;
    padding: 20px;
    text-align: left;
    text-transform: uppercase;

}

.cms-page-static .block-wrapper {
    display: block;
    position: relative;
    min-height: 1px;
    padding: 25px;
    float: left;
    text-align: justify;

}

.cms-page-static .block-wrapper .block-content{
    padding: 15px 0;
    font-size: 25px;
    text-align: justify;

}

.about-follow-container {
    display: block;
    padding-bottom: 5%;
    padding-top: 12%;
}

.follow-section {
    font-family: 'Avenir, Helvetica, Arial, sans-serif';
    font-size: 20px;
    letter-spacing: 2px;

}

.social-container {
   margin-top: 20px;
}

.social-container span:nth-child(1) {
   margin-right: 10px;
}


a {
 background-color: transparent;
}

</style>

