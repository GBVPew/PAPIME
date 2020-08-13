<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/Arduino">Luz Intermitente</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Luz Intermitente</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic1.png')?>"
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
                           Un ejercicio básico que consiste en encender y apagar un led que conectamos en el PIN 13 y a el pin GND(Tierra) del Arduino . El tiempo de encendido y apagado es de 1 segundo. 

                            Obsérvese que se ha colocado el diodo led sin resistencia en serie dado que el PIN13 de Arduino ya lleva incorporada una resistencia interior, en el caso de colocar el diodo LED en otra salida deberíamos colocar una resistencia de al entre 220 y 500 ohmios dependiendo del consumo de corriente del diodo.<br>
                                <br></p>
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
                      <li type="circle">1 Diodo Led</li>
                      <li type="circle">1 Resistencia 220Ω</li>
                                  </ol>    
                                </div>
                              </div>
                            </div>
                          </div>
          <!--Botones-->
        <div class="row">
            <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text center">
                     <a class="waves-effect waves-light btn blue-grey lighten-2 center" href="#modal-overflow" uk-toggle >Ver Codigo</a>
  <!--Codigo-->
            <div id="modal-overflow" uk-modal>
                <div class="uk-modal-dialog">

                    <button class="uk-modal-close-default" type="button" uk-close></button>

                    <div class="uk-modal-header">
                        <h3 face="Arial" size="4"> El código que usaremos será el siguiente </h3>
                    </div>

                    <div class="uk-modal-body" uk-overflow-auto>

                       <div align="left">
                            <p color="000000" size="4" face="Arial" LINE-HEIGHT S=5px>

                                  int ledPin = 13; // Definición de la salida en el PIN 13<br/>
                                  void setup() //Configuración <br/>
                                  {<br/>
                                  pinMode(ledPin, OUTPUT); // designa la salida digital al PIN 13<br/>
                                  }<br/>
                                  void loop() // bucle de funcionamiento<br/>
                                  {<br/>
                                  digitalWrite(ledPin, HIGH); // activa el LED<br/>
                                  delay(1000); // espera 1 seg. (tiempo encendido)<br/>
                                  digitalWrite(ledPin, LOW); // desactiva el LED<br/>
                                  delay(1000); // espera 1 seg. (tiempo apagado)<br/>
                                   }                          
                                       <br/>                                                                           
                                    </p>
                                </div>   
                              </div>
                          </div>
                      </div>
                                </div>
                              </div>
                            </div>
          <!--Codigo-->
            <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text left-align">
                   <!--Modelo-->
          <div class="center">
            <a href="<?php echo base_url();?>modelos/arduino" class="waves-effect waves-light btn blue-grey lighten-2 center "  >Modelo</a>  
               <p></p>           
                   </div>
                <!--Modelo-->
                                </div>
                              </div>
                            </div>
           <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text center">
                  <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Luz Intermitente.pdf" class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
                  <!--PDF-->
                     
                                </div>
                              </div>
                            </div>
                 <!--Botones-->
                          </div>
         <!--Materiales-->
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