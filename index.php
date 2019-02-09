

<?php
require "componentes/header.php"
?>


<!--
        <div style='margin-top: 2%' class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Bienvenido al control de stock. <span class="text-muted">Adri Adri Te ROMPO TODOOOO.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500" src="Photos/tiza.jpg"></img>
            </div>
        </div>
-->

        <div class="row">
            <!-- INCREMENTAR -->
            <div class="col-lg-4">
                <a href="/fsdfsdf"><svg class='tamanoCirculos' aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-plus-circle fa-w-16 fa-6x"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z" class=""></path></svg></a>
                <h2>Incrementar</h2>
                <p>Registrar una entrada de mercaderia, esto aumentara el stock.</p>
            </div>
            <!-- REDUCIR -->
            <div class="col-lg-4">
                <a href="/fsdfsdf"><svg class='tamanoCirculos' aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-minus-circle fa-w-16 fa-7x"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zM124 296c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h264c6.6 0 12 5.4 12 12v56c0 6.6-5.4 12-12 12H124z" class=""></path></svg></a>
                <h2>Reducir</h2>
                <p>Entrega de mercaderia a usuario final, reducira el stock.</p>
            </div>
            <!-- CONSULTAR -->
            <div class="col-lg-4">
                <a href="/fsdfsdf"><svg class='tamanoCirculos' aria-hidden="true" focusable="false" data-prefix="far" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-edit fa-w-18 fa-7x"><path fill="currentColor" d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z" class=""></path></svg></a>
                <h2>Consultar</h2>
                <p>Cantidad de mercaderia en stock al momento de la consulta.</p>
            </div>
        </div>


<?php
require 'componentes/footer.php'
?>

