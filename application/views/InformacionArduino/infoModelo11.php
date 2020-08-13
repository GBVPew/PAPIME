<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/raspberry">Carro a control remoto con sensor de distancia</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Carro a control remoto con sensor de distancia</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic11.png')?>"
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
                            El proyecto trata de una construcción de un carro a control remoto programado en Arduino Uno empleando módulos en su base de construcción a través de una guía electrónica. El objetivo es la siguiente, este robot permite ser controlado mediante un dispositivo móvil a través de una conexión sin cables, permite controlar al usuario y también se puede controlar automáticamente por si sólo con el módulo sensor de distancia que le permite no chocar con alguno obstáculo que tenga en su camino.<br></br>    
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
                      <li type="circle">3 Sensores Ultrasonicos HC-SR04</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1 Alambre para conexiones</li>
                      <li type="circle">1 Bluetooth Low Energy (BLE) Module (Generic)</li>
                      <li type="circle">5 LEDs</li>
                      <li type="circle">2 LEDs</li>
                      <li type="circle">6 resistencias de 330Ω </li>
                      <li type="circle">1 Puente H</li>
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

                      
                                       /*
                  ARDUINO  L293D(Puente H) <br>    
                   5          10<br>
                   6          15<br>
                   9          7<br>
                   10         2<br>
                   5V         1, 9, 16<br>
                   GND        4, 5, 12, 13<br>
                   
                   El motor 1 se conecta a los pines 3 y 6 del Puente H<br>
                   El motor 2 se conecta a los pines 11 y 14 del Puente H<br>
                   
                   La fuente de alimentacion de los Motores se conecta a tierra y<br>
                   el positivo al pin 8 del puennte H. <br>
                   
                   Conexion del Modulo Bluetooth HC-06 y el Arduino<br>
                   ARDUINO    Bluetooth HC-06 <br>
                   0 (RX)       TX<br>
                   1 (TX)       RX<br>
                   5V           VCC<br>
                   GND          GND<br>
                   !!Cuidado!! Las conexiones de TX y RX al modulo Bluetooth deben estar desconectadas<br>
                   en el momento que se realiza la carga del codigo (Sketch) al Arduino.<br>
                   
                   Conexion Sensor Ultrasonido HC-SR04<br>
                   ARDUINO    Ultrasonido HC-SR04 <br>
                   2            Echo<br>
                   3            Trig<br>
                   5V           VCC<br>
                   GND          Gnd<br>
                   
                   Conexion de LED Rojo y Verde<br>
                   13           VCC<br>
                   14           GND<br>

                   */<br>
                  int izqA = 5; <br>
                  int izqB = 6; <br>
                  int derA = 9; <br>
                  int derB = 10; <br>
                  int vel = 255;            // Velocidad de los motores (0-255)<br>
                  int estado = 'g';         // inicia detenido<br>

                  int pecho = 2;            // define el pin 2 como (pecho) para el Ultrasonido<br>
                  int ptrig = 3;            // define el pin 3 como (ptrig) para el Ultrasonido<br>
                  int duracion, distancia;  // para Calcular distacia<br>

                  void setup()  { <br>
                    Serial.begin(9600);    // inicia el puerto serial para comunicacion con el Bluetooth<br>
                    pinMode(derA, OUTPUT);<br>
                    pinMode(derB, OUTPUT);<br>
                    pinMode(izqA, OUTPUT);<br>
                    pinMode(izqB, OUTPUT);<br>
                    
                    pinMode(pecho, INPUT);   // define el pin 2 como entrada (pecho) <br>
                    pinMode(ptrig,OUTPUT);   // define el pin 3 como salida  (ptrig) <br>
                    pinMode(13,OUTPUT);<br>
                  } <br>

                  void loop()  { <br>

                    if(Serial.available()>0){        // lee el bluetooth y almacena en estado<br>
                      estado = Serial.read();<br>
                    }<br>
                    if(estado=='a'){           // Boton desplazar al Frente<br>
                      analogWrite(derB, 0); <br>    
                      analogWrite(izqB, 0); <br>
                      analogWrite(derA, vel); <br> 
                      analogWrite(izqA, vel); <br>      
                    }<br>
                    if(estado=='b'){          // Boton IZQ <br>
                      analogWrite(derB, 0); <br>    
                      analogWrite(izqB, 0); <br>
                      analogWrite(derA, 0); <br> 
                      analogWrite(izqA, vel);<br>     
                    }<br>
                    if(estado=='c'){         // Boton Parar<br>
                      analogWrite(derB, 0);   <br>  
                      analogWrite(izqB, 0); <br>
                      analogWrite(derA, 0);  <br>  
                      analogWrite(izqA, 0); <br>
                    }<br>
                    if(estado=='d'){          // Boton DER<br>
                      analogWrite(derB, 0);     <br>
                      analogWrite(izqB, 0);<br>
                      analogWrite(izqA, 0);<br>
                      analogWrite(derA, vel);  <br>
                    } <br>

                    if(estado=='e'){          // Boton Reversa<br>
                      analogWrite(derA, 0);  <br>  
                      analogWrite(izqA, 0);<br>
                      analogWrite(derB, vel); <br> 
                      analogWrite(izqB, vel); <br>     
                    }<br>
                    
                    if (estado =='f'){          // Boton ON,  se mueve sensando distancia <br>
                    
                       digitalWrite(ptrig, HIGH);   // genera el pulso de trigger por 10us<br>
                       delay(0.01);<br>
                       digitalWrite(ptrig, LOW);<br>
                       
                       duracion = pulseIn(pecho, HIGH);              // Lee el tiempo del Echo<br>
                       distancia = (duracion/2) / 29;            // calcula la distancia en centimetros<br>
                       delay(10); <br>
                       
                       if (distancia <= 20 && distancia >=2){    // si la distancia es menor de 20cm<br>
                          digitalWrite(13,HIGH);                 // Enciende LED<br>
                          
                          analogWrite(derB, 0);                  // Parar los motores por 200 mili segundos<br>
                          analogWrite(izqB, 0); <br>
                          analogWrite(derA, 0);  <br>  
                          analogWrite(izqA, 0); <br>
                          delay (200);<br>
                          
                          analogWrite(derB, vel);               // Reversa durante 500 mili segundos<br>
                          analogWrite(izqB, vel); <br>
                          delay(500);           <br>
                          
                          analogWrite(derB, 0);                // Girar durante 1100 milisegundos <br>  
                          analogWrite(izqB, 0); <br>
                          analogWrite(derA, 0); <br> 
                          analogWrite(izqA, vel);<br>  
                          delay(1100);<br>
                          
                          digitalWrite(13,LOW);<br>
                       }<br>
                       else{                   // Si no hay obstaculos se desplaza al frente <br>
                           analogWrite(izqB, 0); <br>
                           analogWrite(derA, vel);  <br>
                           analogWrite(izqA, vel); <br>
                       }<br>
                    }<br>
                    if(estado=='g'){          // Boton OFF, detiene los motores no hace nada <br>
                       analogWrite(derB, 0);   <br>  
                       analogWrite(izqB, 0); <br>
                       analogWrite(derA, 0);   <br> 
                       analogWrite(izqA, 0);<br>
                    }<br>
                    
                  }   <br>
                                                              
                 <br/>                                                                           
              </p>
          </div>   
        </div>
    </div>
</div>
          <br>
             <br>

          <div class="center">
              <a href="<?php echo base_url();?>modelos/raspberry" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                <br>
        <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Carro a control remoto con sensor de distancia.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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