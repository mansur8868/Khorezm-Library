<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3><?=$countbooktype?> штук </h3>

                <p>различние книги</p>
            </div>
            <div class="icon">
                <i class="fa fa-paperclip"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?=$countbookinn?> штук </h3>

                <p>книги</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?=$counthistory?> штук </h3>

                <p>книга использована</p>
            </div>
            <div class="icon">
                <i class="fa fa-address-book"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?=$countuser?> штук </h3>

                <p>читатель</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="<?=base_url()?>resources/css/w3.css">
<style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
</style>




<div class="w3-content w3-display-container" style="max-width:100%; ">
    <img class="mySlides" src="/resources/slider/1.jpg" style="width:100%; height: 500px;">
    <img class="mySlides" src="/resources/slider/2.jpg" style="width:100%; height: 500px;">
    <img class="mySlides" src="/resources/slider/3.jpg" style="width:100%; height: 500px;">
    <img class="mySlides" src="/resources/slider/4.jpg" style="width:100%; height: 500px;">
    <img class="mySlides" src="/resources/slider/5.jpg" style="width:100%; height: 500px;">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    </div>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);
    setInterval(function(){plusDivs(1);},4000);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-white";
    }
</script>
