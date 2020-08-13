 <ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica16">Control de Llenado</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Control de Llenado</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic16.png')?>"
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
                             Utilizando un sensor de nivel de agua, una bomba, un relé, un par de botones y un par de LEDs realizamos un llenado controlado de un recipiente, pecera, algún sistema de agua.   
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
                      <li type="circle">2 Resistencias de 220Ω</li>
                      <li type="circle">2 Resistencias de 1KΩ</li>
                      <li type="circle">1 Relay de 5v</li>
                      <li type="circle">2 Interruptores</li>
                      <li type="circle">1 Alambre para conexiones  </li>
                      <li type="circle">1 Sensor de nivel de agua para arduino</li>
                      <li type="circle"> Bomba de agua para arduino</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
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

                      const int ledNivel = 10 ;<br>
                      const int ledAuto = 11 ;<br>
                      const int botonLlenadoManual = 6;<br>
                      const int botonLlenadoAutomatico = 5;<br>
                      const int bomba = 7;<br>
                      const int sensor = 0;<br>
                      const int limite = 380;<br>

                      int encendido = 0;<br>

                      void setup()<br>
                      {   <br>
                        Serial.begin(9600);  <br>
                        pinMode( ledNivel, OUTPUT) ;<br>
                        pinMode( ledAuto, OUTPUT) ;<br>
                        pinMode( botonLlenadoManual  , INPUT) ;<br>
                        pinMode( botonLlenadoAutomatico  , INPUT) ;<br>
                        pinMode(bomba, OUTPUT);  <br>
                      }<br>
<br>
                      void loop()<br>
                      {<br>
                        int valorSensor = analogRead(sensor); // obtenemos la medida del sensor<br>
                        Serial.println(valorSensor);<br>
                        if(valorSensor < limite){<br>
                          digitalWrite( ledNivel, HIGH);<br>
                        }else{<br>
                          digitalWrite( ledNivel, LOW) ;  <br>
                        }<br>
                        
                        if(digitalRead(botonLlenadoManual) == HIGH){ // modo manual<br>
                          digitalWrite( bomba, HIGH) ;  <br>
                          }else{<br>
                          digitalWrite( bomba, LOW) ;  <br>
                          if(digitalRead(botonLlenadoAutomatico) == HIGH){<br>
                            encendido = !encendido;<br>
                          }<br>
                          digitalWrite( ledAuto, encendido) ;<br>
                          if(encendido == 1){<br>
                            if(valorSensor < limite){<br>
                              digitalWrite( bomba, HIGH) ;  <br>
                            }else{<br>
                              digitalWrite( bomba, LOW) ;  <br>
                            }<br>
                          }else{<br>
                            digitalWrite( bomba, LOW) ;  <br>
                          }<br>
                          }<br>
                        
                          delay(500);<br>
                      }       <br>                                                                                                                       
                 <br/>                                                                           
              </p>
          </div>   
        </div>
    </div>
</div>
 <br>
  <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica16" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
               <br>
         <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Control de Llenado.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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