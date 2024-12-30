<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Chỉ báo cho các slide trong carousel -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> <!-- Chỉ báo cho slide đầu tiên -->
        <li data-target="#carousel-example-generic" data-slide-to="1"></li> <!-- Chỉ báo cho slide thứ hai -->
        <li data-target="#carousel-example-generic" data-slide-to="2"></li> <!-- Chỉ báo cho slide thứ ba -->
        <li data-target="#carousel-example-generic" data-slide-to="3"></li> <!-- Chỉ báo cho slide thứ tư -->
        <li data-target="#carousel-example-generic" data-slide-to="4"></li> <!-- Chỉ báo cho slide thứ năm -->
        <li data-target="#carousel-example-generic" data-slide-to="5"></li> <!-- Chỉ báo cho slide thứ sáu -->
        <li data-target="#carousel-example-generic" data-slide-to="6"></li> <!-- Chỉ báo cho slide thứ bảy -->
        <li data-target="#carousel-example-generic" data-slide-to="7"></li> <!-- Chỉ báo cho slide thứ tám -->
        <li data-target="#carousel-example-generic" data-slide-to="8"></li> <!-- Chỉ báo cho slide thứ chín -->
    </ol>
    
    <div class="carousel-inner">
        <?php get_active_slide(); ?> <!-- Gọi hàm để hiển thị slide hiện tại -->
        <?php get_slides(); ?> <!-- Gọi hàm để hiển thị tất cả các slide khác -->
    </div>

    <!-- Nút điều khiển sang trái -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span> <!-- Biểu tượng mũi tên sang trái -->
    </a>

    <!-- Nút điều khiển sang phải -->
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span> <!-- Biểu tượng mũi tên sang phải -->
    </a>
</div>
