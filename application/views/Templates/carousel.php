<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!--START Carousel B4 funcional-->
<!--
<div class="container">
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/imgs/slide-01.jfif');?>" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h1>O que é Lorem Ipsum?</h1>
                    <p class="lead">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/imgs/slide-02.jpg');?>" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h1>Porque nós o usamos?</h1>
                    <p class="lead">É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/imgs/slide-03.jpg');?>" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-white">
                    <h1>Onde posso conseguí-lo?</h1>
                    <p class="lead">Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</div>-->
<div id="container_carousel" class="container">
    <div id="prev" class="divprev"> 
        <a href="#" class="prev"><span class="fas fa-angle-left"></span></a>
    </div>
    <div id="owl-umclick" class="owl.carousel">
        <div class="item">
            <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source srcset="<?php echo base_url('assets/imgs/slide-01-480.jpg');?>" media="(max-width: 480px)">
                <source srcset="<?php echo base_url('assets/imgs/slide-01-768.jpg');?>" media="(max-width: 768px)">
                <source srcset="<?php echo base_url('assets/imgs/slide-01.jpg');?>">
                <!--[if IE 9]></video><![endif]-->
                <img srcset="<?php echo base_url('assets/imgs/slide-01.jpg');?>" alt="">
            </picture>
        </div>

        <div class="item">

            <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source srcset="<?php echo base_url('assets/imgs/slide-01-480.jpg');?>" media="(max-width: 480px)">
                <source srcset="<?php echo base_url('assets/imgs/slide-01-768.jpg');?>" media="(max-width: 768px)">
                <source srcset="<?php echo base_url('assets/imgs/slide-01.jpg');?>">
                <!--[if IE 9]></video><![endif]-->
                <img srcset="<?php echo base_url('assets/imgs/slide-02.jpg');?>" alt="">
            </picture>
            
        </div>

        <div class="item">

            <picture id="carouselSite">
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source srcset="<?php echo base_url('assets/imgs/slide-01-480.jpg');?>" media="(max-width: 480px)">
                <source srcset="<?php echo base_url('assets/imgs/slide-01-768.jpg');?>" media="(max-width: 768px)">
                <source srcset="<?php echo base_url('assets/imgs/slide-01.jpg');?>">
                <!--[if IE 9]></video><![endif]-->
                <img srcset="<?php echo base_url('assets/imgs/slide-03.jpg');?>" alt="">  
            </picture>
            
        </div>
    </div>
    <div id="next" class="divnext"> 
        <a href="#" class="next"><span class="fas fa-angle-right"></span></a>
    </div>    
</div>