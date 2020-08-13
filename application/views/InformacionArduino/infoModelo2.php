 <ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/bobina">Secuencia Básica de 3 LEDs</a></li>
</ul>

<div style="padding:  0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Secuencia Básica de 3 LEDs</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic2.png')?>"
                width="300"
                height="300"
                style="padding:20px 0px 20px 0px">
                <!--Relleno--> 
                      <div class="col s12 m12" style="padding: 0px 0px 20px 0px">
                        <div class="card indigo lighten-3">
                          <div class="card-content white-text">
                       <!--Informacion-->      
               <div class="row">
                <div class="col s12 m8">
                  <div class="card indigo lighten-2">
                    <div class="card-content white-text left-align">
                      <span class="card-title">Descripción del ejercicio:</span>
                       <p style="text-align: justify;" style="padding: 0px 100px 0px 50px">
                            En esta práctica  vamos a trabajar con un sensor PIR (passive IR), que nos va a dar mucho Se trata de encender y apagar 3 LEDs colocados en las salidas 6, 7 y 8 (PIN6, PIN7 y
                            PIN8) con una cadencia de 200 ms. Las variables asignadas a cada led son ledPin1,
                            ledPin2 y ledPin3.   
                        </p>
                    </div>
                  </div>
                </div>
    <!--Infromacion-->           
     <!--Materiales-->  
            <div class="row">
            <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text left-align">
                  <span class="card-title">Materiales:</span>
                  <ol type=”A”>
                      <li type="circle">1 Arduino UNO</li>
                      <li type="circle">3 LEDs</li>
                      <li type="circle">3 Resistencias de 220Ω</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                                  </ol>    
                                </div>
                              </div>
                            </div>
                          </div>
         <!--Materiales-->
                     </div>
           
           <div class="row">
            <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text center">
                  <!--Codigo-->
                    <a class="waves-effect waves-light btn blue-grey lighten-2 center" href="#modal-overflow" uk-toggle>Ver Codigo</a>
        <div id="modal-overflow" uk-modal>
            <div class="uk-modal-dialog">

                <button class="uk-modal-close-default" type="button" uk-close></button>

              <div class="uk-modal-header">
               <h3 face="Arial" size="4">El código  que usaremos sera el siguiente</h3>
                </div>

                <div class="uk-modal-body" uk-overflow-auto>

                   <div align="left">
                        <p color="000000" size="4" face="Arial" LINE-HEIGHT S=5px>

                              int ledPin1 = 6; // Define las sali das de los LED´s </br>
                              int ledPin2 = 7; </br>
                              int ledPin3 = 8; </br>
                              void setup() { // Configura las SALIDAS </br>
                              pinMode(ledPin1, OUTPUT); // declarar LEDs como SALIDAS </br>
                              pinMode(ledPin2, OUTPUT); </br>
                              pinMode(ledPin3, OUTPUT); </br>
                              digitalWrite(ledPin1, LOW); // Apaga los LEDs </br>
                              digitalWrite(ledPin2, LOW); </br>
                              digitalWrite(ledPin3, LOW); </br>
                              } </br>
                              void loop(){ //Bucle de Funcionamiento </br>
                              digitalWrite(ledPin1, HIGH); // Apaga y enciende los leds  </br>cada 200 ms </br>
                              delay(200); </br>
                              digitalWrite(ledPin1, LOW); </br>
                              digitalWrite(ledPin2, HIGH); </br>
                              delay(200); </br>
                              digitalWrite(ledPin2, LOW); </br>
                              digitalWrite(ledPin3, HIGH); </br>
                              delay(200); </br>
                              digitalWrite(ledPin3, LOW); </br>
                                               }    </br>
                                                    
                         <br/>                                                                           
                      </p>
                  </div>   
                </div>
            </div>
        </div>
                  <!--Codigo-->
                   </div>
                  </div>
                 </div> 
                  <!--Modelo-->
                 <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text center">
            <div class="center">
              <a href="<?php echo base_url();?>modelos/bobina" class="waves-effect waves-light btn blue-grey lighten-2 center ">Modelo</a>  
              <p></p>           
              </div>
                   </div>
                  </div>
                 </div> 
                <!--Modelo-->
                 <!--PDF-->
                 <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text center">
                  <a href="<?php echo base_url();?>assets/ArduinoPDF/Secuencia Basica de 3 LEDs.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
                   </div>
                  </div>
                 </div> 
                   <!--PDF-->
              <!--Botones-->
                </div> 
      <!--Fondo--> 
                  </div>
                </div>
              </div>
            </div>
    <!--Relleno-->                 
        </div> 
      </div>
    </div>
  </div>
</div>