<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/Capacitor">Cometa con LEDs</a></li>
</ul>

<div style="padding:0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Cometa con LEDs</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic3.png')?>"
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

                        Este ejercicio muestra cómo realizar un rayo de luz, o más poéticamente, una estrella
                        fugaz, moviéndose a través de una línea de LED-s. Podremos configurar tanto la
                        velocidad de de la estrella, así como la longitud de la cola. No es muy elegante porque
                        la cola brilla con la misma intensidad que la estrella, y al final, parecerá como si un rayo
                        sólido cruzase la línea de LED-s. <br>

                        Hay que conectar 11 LED-s a los pines digitales de la placa a través de resistencias de
                        220 Ohmios tal y como se muestra en la imagen superior. El programa comienza encendiendo LED-s hasta que llegue al número de LED-s
                        establecido para la cola. En ese momento seguirá encendiendo LED-s hacia la izquierda
                        (si se monta tal y como se muestra en la fotografía inferior), para mantener el
                        movimiento de la estrella, al mismo tiempo que apaga LED-s por la derecha, para
                        asegurarnos de que vemos la cola. De otra forma seguiría encendiendo LED-s hasta
                        encenderlos todos. Esto ocurre cuando el tamaño de la cola es igual o mayor que el
                        número de LED-s.
                        El tamaño de la cola debería ser relativamente pequeño en comparación con el número
                        de LED-s de forma que podamos ver la estrella. </br>
                  </br>

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
                      <li type="circle">11 LEDs</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">11 Resistencias de 220Ω</li>
                      <li type="circle">1  Alambre para conexiones</li>
                                  </ol>    
                                </div>
                              </div>
                            </div>
                          </div>
         <!--Materiales-->
                     </div>
        <!--Botones-->       
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
            <h3 face="Arial" size="4"> El codigo que usaremos sera el siguiente</h3>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>

           <div align="left">
                <p color="000000" size="4" face="Arial" LINE-HEIGHT S=5px>

                 int pinArray [] = { 2,3,4,5,6,7,8,9,10,11,12 }; </br>
                 int controlLed = 13; // LED de control </br>
                 int waitNextLed = 100; // Tiempo antes de encender el siguiente LED </br>
                 // Número de LED-s que permanecen encendidos antes de empezar a apagarlos para </br>
                 //formar la cola </br>
                 int tailLength = 4; </br>
                 // Número de LED-s conectados (que es también el tamaño del array) </br>
                 int lineSize = 11; </br>
                void setup() // Configuración de los PIN-es como salida digital </br>
                 { </br>
                 int i; </br>
                 pinMode (controlLed, OUTPUT); </br>
                 for (i=0; i< lineSize; i++) </br>
                 { </br>
                 pinMode(pinArray[i], OUTPUT); </br>
                 } </br>
                 } </br>

                void loop() </br>
                 { </br>
                 int i; </br>
                 // Se establece la longitud de la cola en un contador </br>
                 int tailCounter = tailLength; </br>
                 // Se enciende el LED de control para indicar el inicio del loop </br>
                 digitalWrite(controlLed, HIGH); </br>
                 for (i=0; i<(lineSize); i++) </br>
                 { </br>
                 digitalWrite(pinArray[i],HIGH); // Se encienden consecutivamente los LED </br>
                 // Esta variable de tiempo controla la velocidad a la que se mueve la estrella </br>
                 delay(waitNextLed); </br>
                 if (tailCounter == 0) </br>
                 { </br>
                 // Se apagan los LED-s en función de la longitud de la cola. </br>
                 digitalWrite(pinArray[i-tailLength],LOW); </br>
                 } </br>
                 else </br>
                 if (tailCounter > 0) </br>
                 tailCounter--; </br>
                 } </br>
                 for (i=(lineSize-tailLength); i<(lineSize); i++) </br>
                 { </br>
                 digitalWrite(pinArray[i],LOW); // Se apagan los LED </br>
                // Esta variable de tiempo controla la velocidad a la que se mueve la estrella </br>
                 delay(waitNextLed); </br>
                 } </br>
                }                      </br>                           
                                                                                      
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
                      <a href="<?php echo base_url();?>modelos/capacitor" class="waves-effect waves-light btn blue-grey lighten-2 center ">Modelo</a>  
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
                    <a href="<?php echo base_url();?>assets/ArduinoPDF/Cometa con LEDs.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
                </div>
              </div>
            </div>
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