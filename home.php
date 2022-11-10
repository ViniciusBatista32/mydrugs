<?php
	require_once "header.php";
?>

<div class="home_carousel">
    <div class="carousel_background">
        <div class="frame" data-frame="1"></div>
        <div class="frame" data-frame="2"></div>
        <div class="frame" data-frame="3"></div>
        <div class="frame" data-frame="4"></div>
        <div class="frame" data-frame="5"></div>

        <div class="frame_brightness"></div>

        <div class="home_carousel_body">
            <div class="carousel_navigators">
                <div class="w-65 d-flex h-st-align v-ct-align fs-bg-4 text-white-secondary" id="carousel_previous">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>

                <div class="w-35 d-flex h-end-align v-ct-align fs-bg-4 text-white-secondary" id="carousel_next">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var current_frame = 1;

    $("#carousel_next").on("click", () => {
        if(!!$(".frame[data-frame='" + (current_frame + 1) + "'")[0])
        {
            var previous_frame = current_frame;
            current_frame++;
    
            $(".frame[data-frame='" + previous_frame + "'").animate({"width": ["0%", "easeInOutQuart"]}, 500);
            $(".frame[data-frame='" + current_frame + "'").animate({"width": ["65%", "easeInOutQuart"]}, 500);
            $(".frame[data-frame='" + (current_frame + 1) + "'").animate({"width": ["35%", "easeInOutQuart"]}, 500);
        }
    });

    $("#carousel_previous").on("click", () => {
        if(!!$(".frame[data-frame='" + (current_frame - 1) + "'")[0])
        {
            var previous_frame = current_frame;
            current_frame--;
    
            $(".frame[data-frame='" + previous_frame + "'").animate({"width": ["35%", "easeInOutQuart"]}, 500);
            $(".frame[data-frame='" + current_frame + "'").animate({"width": ["65%", "easeInOutQuart"]}, 500);
            $(".frame[data-frame='" + (previous_frame + 1) + "'").animate({"width": ["0%", "easeInOutQuart"]}, 500);
        }
    });
</script>

<?php
	require_once "footer.php";
?>