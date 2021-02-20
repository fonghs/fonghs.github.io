<?php 
$head_title = "後台管理"; 
require("layout/head.php"); 
require("layout/nav_bar.php"); 

?>
<link rel='stylesheet' href='css/index/index.css'>
<div class="main_body">
    <div class=" container slider">
        <figure>
            <img>   
        </figure>
        <div class="figure_text">
            <h2>Hi, I am Header Media Title</h2>
            <p>I am description of header media. You can write short text to give me more info.</p>
            <div class="more_btn">
                <div>Read More</div>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
    </div>

    <div class="hot_items flex-space-between">
        <div class="control_blocks">
            <div class="title">人氣商品</div>
            <div class="description">店長精選人氣商品</div>
        </div>
        <div class="slider_blocks">
            <div class="blocks"></div>
            <div class="blocks"></div>
            <div class="blocks"></div>
            <div class="blocks"></div>
            <div class="blocks"></div>

        </div>
    </div>

    <div class="project_catogories container">
        <div class="description">
            <div class="title">專營項目</div>
            <div class="hr"></div>
            <div class="text">超過35年以上的花藝設計經驗，創造出時尚高雅的花藝設計風格。並有歐式花藝設計、花束包裝與花店專修班..等教學課程，與您共同享受這般溫馨、浪漫的動人氛圍</div>
        </div>
        <div class="masonry blocks">
            <div class="grid_block">
                <img src="https://cdn.pixabay.com/photo/2017/08/01/08/28/bouquet-2563485_1280.jpg">
                <div class="mask"></div>
                <p> 花藝設計教學 </p>

            </div>
            <div class="grid_block">
                <img src="https://cdn.pixabay.com/photo/2017/08/01/08/28/bouquet-2563485_1280.jpg">
                <div class="mask"></div>
                <p> 創意盆花 </p>

            </div>
            <div class="grid_block">
                <img src="https://cdn.pixabay.com/photo/2019/08/16/20/18/flower-4410990_1280.jpg">
                <div class="mask"></div>
                <p> 婚禮捧花</p>
            </div>
            <div class="grid_block">
                <img src="https://cdn.pixabay.com/photo/2017/08/01/08/28/bouquet-2563485_1280.jpg">
                <div class="mask"></div>
                <p> 主題花束 </p>

            </div>
            <div class="grid_block">
                <img src="https://cdn.pixabay.com/photo/2019/08/16/20/18/flower-4410990_1280.jpg">
                <div class="mask"></div>
                <p> 藝術花籃 </p>
                
            </div>
            <div class="grid_block">
                <img src="https://cdn.pixabay.com/photo/2017/08/01/08/28/bouquet-2563485_1280.jpg">
                <div class="mask"></div>
                <p> 會場怖置 </p>
            </div>
            <div class="grid_block">
                <img src="https://cdn.pixabay.com/photo/2017/08/01/08/28/bouquet-2563485_1280.jpg">
                <div class="mask"></div>
                <p> 禮車布置 </p>
            </div>
        </div>
    </div>
</div>



<?php 
require("layout/footer.php"); 
?>
<script src="js/index.js"></script>
