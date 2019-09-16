<?php $this->load->view('Templates/header'); ?>
<div class="container-fluid rota">
    <div class="container">
        <div class="col-md-12">
            <a href="#home">Home/</a>
        </div>
    </div>
</div>
<?php $this->load->view('Templates/carousel'); ?>    
<div class="container-fluid containercardhome ">
    <div class="container mb-2">
        <div class="row card-estilo">
            <div class="col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                            <i class="fas fa-images"></i>
                            <h3 class="card-title">Typesetting</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <button class="btn btn-primary">Lead-in</button>  
                    </div>
                </div>
            </div>  
        
            <div class="col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-map-marked-alt"></i>
                            <h3 class="card-title">Standard </h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <button class="btn btn-primary">Established</button>  
                    </div>
                </div>
            </div>  
            
            <div class="col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-cloud-upload-alt"></i>
                            <h3 class="card-title">Extremes</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <button class="btn btn-primary">Supporting</button>  
                    </div>
                </div>
            </div> 
            <div class="col-xl-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-city"></i>
                            <h3 class="card-title">Lorem Ipsum</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <button class="btn btn-primary">injected</button>  
                    </div>
                </div>
            </div>      
        </div>
    </div>  
</div>
<?php $this->load->view('modal'); ?>   
<?php $this->load->view('Templates/footer'); ?>
