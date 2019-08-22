<?php
    include('header_admin.php');
?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script> 
<body> 
    
    <div class="container">
        <br>
    <h1 class="mt-5">Administrador</h1>
        <div class="row mt-5 col-">
            <p>Si no estás registrado para hacer uso de esta sección comunicate con el administrador de la Web.</p>
            <p class="autor">- Ecology Computer -</p>
            <div class="col-6">
                <a href="../index.php" class="button">Regresar</a>
            </div>
                <div class="col-6">
                    <a href="../inicio_admin.php" class="button">Inicia Sesión</a>
                </div>
        </div>
    </div>
   
    <script src="/js/jquery.js"></script>
    <script src="/js/library.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/retina.js"></script>
</body>
</html>