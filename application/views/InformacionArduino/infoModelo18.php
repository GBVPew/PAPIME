 <ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica18">Sistema de Alarma con un sensor Ultrasónico</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Sistema de Alarma con un sensor Ultrasónico</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic18.png')?>"
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
                           Pequeño ejercicio sobre hacer un sistema de alarma con un sensor Ultrasónico ya que este detecta quien se acerca esto es muy práctico y fácil de hacer.   
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
                      <li type="circle">4 Resistencias de 220Ω</li>
                      <li type="circle"> 1 Zumbador</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">3 LEDs</li>
                      <li type="circle">1 Sensor Ultrasónico HC-SR04</li>
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

                     #define trigPin 2 <br>
                    #define echoPin 3<br>
                    #define LEDlampRed 4<br>
                    #define LEDlampYellow 5<br>
                    #define LEDlampGreen 6<br>
                    #define soundbuzzer 7<br>
                    int sound = 500;<br>
<br>
                    void setup() {<br>
                    Serial.begin (9600);<br>
                    pinMode(trigPin, OUTPUT);<br>
                    pinMode(echoPin, INPUT);<br>
                    pinMode(LEDlampRed, OUTPUT);<br>
                    pinMode(LEDlampYellow, OUTPUT);<br>
                    pinMode(LEDlampGreen, OUTPUT);<br>
                    pinMode(soundbuzzer, OUTPUT);<br>
                    }<br>
                    void loop() {<br>
                    long durationindigit, distanceincm;<br>
                    digitalWrite(trigPin, LOW);<br>
                    delayMicroseconds(2);<br>
                    digitalWrite(trigPin, HIGH);<br>
                    delayMicroseconds(10);<br>
                    digitalWrite(trigPin, LOW);<br>
                    durationindigit = pulseIn(echoPin, HIGH);<br>
                    distanceincm = (durationindigit/5) / 29.1;<br>
<br>
                    if (distanceincm < 50) {<br>
                    digitalWrite(LEDlampGreen, HIGH);<br>
                    }<br>
                    else {<br>
                    digitalWrite(LEDlampGreen, LOW);<br>
                    }<br>
<br>
                    if (distanceincm < 20) {<br>
                    digitalWrite(LEDlampYellow, HIGH);<br>
                    }<br>
                    else {<br>
                    digitalWrite(LEDlampYellow,LOW);<br>
                    }<br>
                    if (distanceincm < 5) {<br>
                    digitalWrite(LEDlampRed, HIGH);<br>
                    sound = 1000;<br>
                    }<br>
                    else {<br>
                    digitalWrite(LEDlampRed,LOW);<br>
                    }<br>
<br>
                    if (distanceincm > 5 || distanceincm <= 0){<br>
                    Serial.println("Outside the permissible range of distances");<br>
                    noTone(soundbuzzer);<br>
                    }<br>
                    else {<br>
                    Serial.print(distanceincm);<br>
                    Serial.println(" cm");<br>
                    tone(soundbuzzer, sound);<br>
                    }<br>
<br>
                    delay(300);<br>
                    }<br>                                                            
              </p>
          </div>   
        </div>
    </div>
</div>
 <br>
  <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica18" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
               <br>
          <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Sistema de Alarma con un sensor Ultrasónico.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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