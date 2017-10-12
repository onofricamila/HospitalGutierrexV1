<div class=" col s8 offset-s2">
    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card hovercard">
                <div class="card-background">
                    
                </div>
                <div class="useravatar">
                    <img alt="" src="../../public/imgs/patient.png">
                </div>
                <div class="card-info"> <span class="card-title"><?php echo $paciente->nombre;?> </span> </div>
            </div>
            <div>
                    <ul id="tabs-swipe-demo" class="tabs">
                            <li class="tab col s6"><a class="active" href="#test-swipe-1">Info personal</a></li>
                            <li class="tab col s6"><a href="#test-swipe-2">Datos demograficos</a></li>
                        </ul>
                        <div id="test-swipe-1" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">Fecha de nacimiento: <?php echo $paciente->nombre;?> </li>
                                    <li class="collection-item">Género:<?php echo $paciente->nombre;?> </li>
                                    <li class="collection-item">Tipo de doc.:<?php echo $paciente->nombre;?> </li>
                                    <li class="collection-item">DNI:<?php echo $paciente->nombre;?> </li>
                                    <li class="collection-item">Domicilio:<?php echo $paciente->nombre;?> </li>
                                    <li class="collection-item">Tel/Cel:<?php echo $paciente->nombre;?> </li>
                                    <li class="collection-item">Obra social:<?php echo $paciente->nombre;?> </li>
                                </ul>
                        </div>
                        <div id="test-swipe-2" class="col s12">
                            <ul class="collection">
                                <li class="collection-item">Heladera?<?php echo $paciente->nombre;?> </li>
                                <li class="collection-item">Electricidad?<?php echo $paciente->nombre;?> </li>
                                <li class="collection-item">Mascota(s)?<?php echo $paciente->nombre;?> </li>
                                <li class="collection-item">Tipo de vivienda?<?php echo $paciente->nombre;?> </li>
                                <li class="collection-item">Tipo de calefaccion?<?php echo $paciente->nombre;?> </li>
                                <li class="collection-item">Tipo de agua?<?php echo $paciente->nombre;?> </li>
                            </ul>
                        </div>
            </div>
        </div>
</div>
</div>           
    <style>
        /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


    </style>


<script type="text/javascript" src="/public/js/pacientes.js"></script>