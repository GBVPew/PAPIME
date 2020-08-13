<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/microprocesador">Luz Alarma led con sensor ultrasónico</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Luz Alarma led con sensor ultrasónico</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic9.png')?>"
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
                           Para crear una alarma indicadora de distancia con el sensor hc-sr04. No obstante, 
                            ustedes pueden cambiar la salida por un buzzer o bocina así que por este motivo la 
                            actividad se puede modificar a su antojo.<br>
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
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">Alambre para conexiones</li>
                      <li type="circle">1 LED</li>
                      <li type="circle">1 Resistencia de 220Ω</li>
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

                      ilong dis; </br>
                      long tiem;</br>
                      int led1 = 11;</br>
                      void setup( ){</br>
                      Serial.begin(9600);
                      pinMode(10, OUTPUT); //salida del pulso generado por el sensor ultrasónico</br>
                      pinMode(9, INPUT);//entrada del pulso generado por el sensor ultrasónico</br>
                      pinMode(11, INPUT);//alarma de la distancia(encenderá el led)</br>
                      }</br>
                      void loop(){</br>
                      digitalWrite(10,LOW);//recibimiento del pulso.</br>
                      delayMicroseconds(5);</br>
                      digitalWrite(10, HIGH);//envió del pulso.</br>
                      delayMicroseconds(10);</br>
                      tiem=pulseIn(9, HIGH);//fórmula para medir el pulso entrante.</br>
                      dis= long(0.017*tiem);//fórmula para calcular la distancia del sensor ultrasónico.</br>
                      if(dis>10){ //comparativo para la alarma se ingresa la distancia en la que encenderá o apagara.</br>
                      digitalWrite(11, HIGH);</br>
                      }</br>
                      else</br>
                      {</br>
                      digitalWrite(11,LOW);</br>
                      }</br>
                      Serial.println("LA DISTANCIA MEDIDA ES:");</br>
                      Serial.println(dis);</br>
                      Serial.println("cm");</br>
                      delay(500);       </br>                                                                          
              </p>
          </div>   
        </div>
    </div>
</div>
          <br>
             <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica9" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                 <br>
         <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Luz Alarma led con sensor ultrasónico.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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