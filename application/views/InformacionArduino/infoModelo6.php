<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/control1">Sensor de Luz</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Sensor de Luz</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic6.png')?>"
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
                          Un LDR es una resistencia variable, que varía su valor dependiendo de la cantidad de luz que incide sobre su superficie. Cuanta más intensidad de luz incide en la superficie de la LDR menor será su resistencia y cuanta menos luz incide mayor será la resistencia. Suelen ser utilizados como sensores de luz ambiental o como una fotocélula que activa un determinado proceso en ausencia o presencia de luz. Un sensor de luz se compone de una LDR como parte de un divisor de tensión resistivo. <br>
                          El circuito consta de un divisor de tensión formado por la LDR y la resistencia de 5kΩ. </p>
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
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1 Alambre para conexiones</li>
                      <li type="circle">1 LDR (Fotorresistencia)</li>
                      <li type="circle">1 Resistencia de 5kΩ</li>
                      <li type="circle">1 LED</li>

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
                  /* Sensor de Luz LDR</br>
                  * ------------------</br>
                  *</br>
                  * Enciende y apaga un LED (light emitting diode) conectado al pin digital #13.</br> 
                  * La cantidad de tiempo que el LED estará encendido y apagado depende del</br>
                  * valor obtenido de analogRead().</br>
                  * La salida del sensor de luz o divisor de tensión, está conectado</br>
                  * a la entrada del pin 3, por lo que</br>
                  * a más luz, el parpadeo del LED será menor y a menos luz el parpadeo del LED</br>
                  mayor.</br>
                  * (sensor de oscuridad)</br>

                  int LightPin = 3; // selecciona el pin de entrada para el sensor de luz</br>
                  int ledPin = 13; // selecciona el pin para el LED</br>
                  int val = 0; // variable para almacenar el valor capturado desde el sensor</br>
                  void setup() {</br>
                   pinMode(ledPin, OUTPUT); // declara el ledPin en modo salida</br>
                  }</br>
                  void loop() {</br>
                   val = analogRead(LightPin); //lee el valor del sensor</br>
                   digitalWrite(ledPin, HIGH); // enciende el LED</br>
                   delay(val); // detiene el programa por un tiempo</br>
                   digitalWrite(ledPin, LOW); // apaga el LED</br>
                   delay(val); // detiene el programa por un tiempo</br>
                  }                   </br>                                          
                                  </p>
                             </div>              
                        </div>
                                                                                                
              </p>
          </div>   
        </div>
        <br>
          <br>
           <div class="center">
              <a href="<?php echo base_url();?>modelos/control1" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                 <br>
        <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Sensor de Luz.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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