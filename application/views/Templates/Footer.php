<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
        <nav id="footer" class="navbar navbar-expand-lg nav">
            <div class="container">
                <div class="spacefooter mb-auto">
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                            <a href="">
                                <i class="fab fa-facebook-square"></i>
                            </a> 
                        </li>	
                        <li class="navbar-item">
                            <a href="">
                                <i class="fab fa-google-plus-square"></i> 
                            </a>
                        </li>
                        <li class="navbar-item">
                            <a href="">
                                <i class="fab fa-twitter-square"></i> 
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="spacefooter">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a id="nav-a" class="nav-link" href="<?php echo base_url();?>">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-a" class="nav-link" href="#"  data-toggle="modal" data-target="#appModal">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-a" class="nav-link" href="<?php echo base_url('Contato');?>">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <div class="justify-content-end">
                    <ul class="navbar-nav ">
                        <li class="text-right">
                            <p id="nav-a" class="nav-text">It is a long established</p>
                            <p id="nav-a" class="nav-text">Publishing packages and web</p>
                            <p id="nav-a" class="nav-text">injected humour and the like</p>
                        </li>
                    </ul>    
                </div>
            </div>    	
        </nav>
        <div class="container-fluid rodape">
            <div class="container">
                <p>Ao contrário do que se acredita.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorem Ipsum não é simplesmente um texto randômico.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistema desenvolvido por: Leonardo de Moraes</p>
            </div>  
        </div> 
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url('assets/jquery/dist/jquery.js');?>"></script>
        <script src="<?php echo base_url('assets/popper.js/dist/umd/popper.js');?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.js');?>"></script>
        <!-- Important Owl stylesheet -->
        <!--  jQuery 1.7+  -->
        <script src="<?php echo base_url('assets/owl-carousel/jquery-1.9.1.min.js');?>"></script>
        <!-- Include js plugin -->
        <script src="<?php echo base_url('assets/owl-carousel/owl.carousel.min.js');?>"></script>
        <script src="<?php echo base_url('assets/scripts/owl.carousel.exe.js');?>"></script>
        <script src="<?php echo base_url('assets/scripts/picturefill.min.js');?>"></script>  
    </body>
</html>