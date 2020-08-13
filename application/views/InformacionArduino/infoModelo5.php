<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/celular">Construcción de un indicador de nivel con
diodos LEDs</a></li>
</ul>

<div style="padding:0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Construcción de un indicador de nivel con diodos LEDs</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic5.png')?>"
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
                          Construir u indicador de nivel que sea capaz de medir el valor de una señal de
                          entrada generada por un potenciómetro desde una entrada analógica.
                          Se establecerán 3 diodos Led conectados a las salidas PIN6, PIN7 y PIN8. La entrada la
                          conectaremos en la entrada analógica PIN 1 (analog IN1).
                          </br></p>
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
                      <li type="circle">3 Leds</li>
                      <li type="circle">3 Resistencias de 220Ω</li>
                      <li type="circle">1 Potenciómetro de 10KΩ </li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1 Alambre para conexiones</li>
                                  </ol>    
                                </div>
                              </div>
                            </div>
                          </div>
         <!--Materiales-->
                     </div>
               <!--Botones-->
<div class="uk-column-1-1" style="padding:0px 0px 20px 0px">
  
  <center>
        <a class="waves-effect waves-light btn blue-grey lighten-2 center" href="#modal-overflow" uk-toggle>Ver Codigo</a>

<div id="modal-overflow" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
            <h3 face="Arial" size="4"> El codigo que usaremos sera el siguiente</h3>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>

           <div align="left">
                <p color="000000" size="4" face="Arial" LINE-HEIGHT S=5px>

                int ledPin1 = 8; // Selección de PIN para cada LED</br>
                int ledPin2 = 7;</br>
                int ledPin3 = 6;</br>
                int inPin= 1; // selecciona la entrada analógica 1 (potenciómetro)</br>
                </br>
                void turn_off() { //Apaga los 3 LEDS</br>
                digitalWrite(ledPin1, LOW);</br>
                digitalWrite(ledPin2, LOW);</br>
                digitalWrite(ledPin3, LOW);</br>
                }</br>
                void setup() {</br>
                pinMode(ledPin1, OUTPUT); // declara LEDs como salidas
                pinMode(ledPin2, OUTPUT);</br>
                pinMode(ledPin3, OUTPUT);</br>
                turn_off(); //</br>
                }</br>
                void loop(){</br>
                int val;</br>
                val= analogRead(inPin); // lee el valor de la señal analógica</br>
                turn_off();apaga los tres LED</br>
                // Si el valor de la señal medida es > 256 enciende LED del PIN8</br>
                if (val>= 256) digitalWrite(ledPin1, HIGH);</br>
                // Si el valor de la señal medida es > 512 enciende LED del PIN7</br>
                if (val>= 512) digitalWrite(ledPin2, HIGH);
                // Si el valor de la señal medida es > 758 enciende LED del PIN6</br>
                if (val>= 768) digitalWrite(ledPin3, HIGH);</br>
                }                                                 </br>
                                </p>
                           </div>                                              
                     </div>
                      
                 <br/>                                                                           
              </p>
          </div>   
        </div>
         <br>
             <br>
            <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica5" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
              <br>
         <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Construcción de un indicador de nivel con diodos LEDs.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
         <!--PDF-->

             </div>
            <!--Botones-->

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