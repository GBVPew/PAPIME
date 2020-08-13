 <ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica17">Carro con control remoto Bluetooth</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Carro con control remoto Bluetooth</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic17.1.png')?>"
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
                            Un automóvil robot Arduino 4WD controlado por teléfono inteligente o un robot Bluetooth Arduino. Puede moverse hacia adelante y hacia atrás, hacia la izquierda y hacia la derecha, cambiar su velocidad, encender / apagar las luces delanteras y traseras y también puede sonar.<br>   
                            <b>Requisitos:</b><br>
                              Arduino Bluetooth RC Car(PlayStore)<br>
                              Soldador (genérico) 
                        <br>
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
                      <li type="circle">1 HC-06 Bluetooth Module</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1 Alambre para conexiones</li>
                      <li type="circle">1 4WD Smart Robot Car Chassis Kit</li>
                      <li type="circle">2 Spark Fun Dual H-Bridge motor driver (L298)</li>
                      <li type="circle">4 LEDs</li>
                      <li type="circle">1 Buzzer(Sumbador) </li>
                      <li type="circle">4 Resistencias de 221Ω</li>
                      <li type="circle">1 Pila de 9V</li>
                      <li type="circle">2 Arduino Switch</li>
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

                      #define light_FR  14    //LED Front Right   pin A0 for Arduino Uno<br>
                      #define light_FL  15    //LED Front Left    pin A1 for Arduino Uno<br>
                      #define light_BR  16    //LED Back Right    pin A2 for Arduino Uno<br>
                      #define light_BL  17    //LED Back Left     pin A3 for Arduino Uno<br>
                      #define horn_Buzz 18    //Horn Buzzer       pin A4 for Arduino Uno<br>

                      #define ENA_m1 5        // Enable/speed motor Front Right <br>
                      #define ENB_m1 6        // Enable/speed motor Back Right<br>
                      #define ENA_m2 10       // Enable/speed motor Front Left<br>
                      #define ENB_m2 11       // Enable/speed motor Back Left<br>

                      #define IN_11  2        // L298N #1 in 1 motor Front Right<br>
                      #define IN_12  3        // L298N #1 in 2 motor Front Right<br>
                      #define IN_13  4        // L298N #1 in 3 motor Back Right<br>
                      #define IN_14  7        // L298N #1 in 4 motor Back Right<br>

                      #define IN_21  8        // L298N #2 in 1 motor Front Left<br>
                      #define IN_22  9        // L298N #2 in 2 motor Front Left<br>
                      #define IN_23  12       // L298N #2 in 3 motor Back Left<br>
                      #define IN_24  13       // L298N #2 in 4 motor Back Left<br>

                      int command;            //Int to store app command state.<br>
                      int speedCar = 100;     // 50 - 255.<br>
                      int speed_Coeff = 4;<br>
                      boolean lightFront = false;<br>
                      boolean lightBack = false;<br>
                      boolean horn = false;<br>

                      void setup() { <br> 
                         
                          pinMode(light_FR, OUTPUT);<br>
                          pinMode(light_FL, OUTPUT);<br>
                          pinMode(light_BR, OUTPUT);<br>
                          pinMode(light_BL, OUTPUT);<br>
                          pinMode(horn_Buzz, OUTPUT);<br>
                          
                          pinMode(ENA_m1, OUTPUT);<br>
                          pinMode(ENB_m1, OUTPUT);<br>
                          pinMode(ENA_m2, OUTPUT);<br>
                          pinMode(ENB_m2, OUTPUT);<br>
                        
                          pinMode(IN_11, OUTPUT);<br>
                          pinMode(IN_12, OUTPUT);<br>
                          pinMode(IN_13, OUTPUT);<br>
                          pinMode(IN_14, OUTPUT);<br>
                          
                          pinMode(IN_21, OUTPUT);<br>
                          pinMode(IN_22, OUTPUT);<br>
                          pinMode(IN_23, OUTPUT);<br>
                          pinMode(IN_24, OUTPUT);<br>

                        Serial.begin(9600); <br>
<br>
                        } <br>

                      void goAhead(){ <br>

                            digitalWrite(IN_11, HIGH);<br>
                            digitalWrite(IN_12, LOW);<br>
                            analogWrite(ENA_m1, speedCar);<br>

                            digitalWrite(IN_13, LOW);<br>
                            digitalWrite(IN_14, HIGH);<br>
                            analogWrite(ENB_m1, speedCar);<br>


                            digitalWrite(IN_21, LOW);<br>
                            digitalWrite(IN_22, HIGH);<br>
                            analogWrite(ENA_m2, speedCar);<br>


                            digitalWrite(IN_23, HIGH);<br>
                            digitalWrite(IN_24, LOW);<br>
                            analogWrite(ENB_m2, speedCar);<br>

                        }<br>

                      void goBack(){ <br>

                            digitalWrite(IN_11, LOW);<br>
                            digitalWrite(IN_12, HIGH);<br>
                            analogWrite(ENA_m1, speedCar);<br>


                            digitalWrite(IN_13, HIGH);<br>
                            digitalWrite(IN_14, LOW);<br>
                            analogWrite(ENB_m1, speedCar);<br>


                            digitalWrite(IN_21, HIGH);<br>
                            digitalWrite(IN_22, LOW);<br>
                            analogWrite(ENA_m2, speedCar);<br>


                            digitalWrite(IN_23, LOW);<br>
                            digitalWrite(IN_24, HIGH);<br>
                            analogWrite(ENB_m2, speedCar);<br>

                        }<br>

                      void goRight(){ <br>

                            digitalWrite(IN_11, LOW);<br>
                            digitalWrite(IN_12, HIGH);<br>
                            analogWrite(ENA_m1, speedCar);<br>


                            digitalWrite(IN_13, HIGH);<br>
                            digitalWrite(IN_14, LOW);<br>
                            analogWrite(ENB_m1, speedCar);<br>


                            digitalWrite(IN_21, LOW);<br>
                            digitalWrite(IN_22, HIGH);<br>
                            analogWrite(ENA_m2, speedCar);<br>


                            digitalWrite(IN_23, HIGH);<br>
                            digitalWrite(IN_24, LOW);<br>
                            analogWrite(ENB_m2, speedCar);<br>


                        }<br>

                      void goLeft(){<br>

                            digitalWrite(IN_11, HIGH);<br>
                            digitalWrite(IN_12, LOW);<br>
                            analogWrite(ENA_m1, speedCar);<br>


                            digitalWrite(IN_13, LOW);<br>
                            digitalWrite(IN_14, HIGH);<br>
                            analogWrite(ENB_m1, speedCar);<br>

                              
                            digitalWrite(IN_21, HIGH);<br>
                            digitalWrite(IN_22, LOW);<br>
                            analogWrite(ENA_m2, speedCar);<br>


                            digitalWrite(IN_23, LOW);<br>
                            digitalWrite(IN_24, HIGH);<br>
                            analogWrite(ENB_m2, speedCar);<br>

                              
                        }<br>

                      void goAheadRight(){<br>
                            
                            digitalWrite(IN_11, HIGH);<br>
                            digitalWrite(IN_12, LOW);<br>
                            analogWrite(ENA_m1, speedCar/speed_Coeff);<br>

                            digitalWrite(IN_13, LOW);<br>
                            digitalWrite(IN_14, HIGH);<br>
                            analogWrite(ENB_m1, speedCar/speed_Coeff);<br>


                            digitalWrite(IN_21, LOW);<br>
                            digitalWrite(IN_22, HIGH);<br>
                            analogWrite(ENA_m2, speedCar);<br>


                            digitalWrite(IN_23, HIGH);<br>
                            digitalWrite(IN_24, LOW);<br>
                            analogWrite(ENB_m2, speedCar);<br>
                      
                        }<br>

                      void goAheadLeft(){<br>
                            
                            digitalWrite(IN_11, HIGH);<br>
                            digitalWrite(IN_12, LOW);<br>
                            analogWrite(ENA_m1, speedCar);<br>

                            digitalWrite(IN_13, LOW);<br>
                            digitalWrite(IN_14, HIGH);<br>
                            analogWrite(ENB_m1, speedCar);<br>


                            digitalWrite(IN_21, LOW);<br>
                            digitalWrite(IN_22, HIGH);<br>
                            analogWrite(ENA_m2, speedCar/speed_Coeff);<br>


                            digitalWrite(IN_23, HIGH);<br>
                            digitalWrite(IN_24, LOW);<br>
                            analogWrite(ENB_m2, speedCar/speed_Coeff);<br>
                       
                        }<br>

                      void goBackRight(){ <br>

                            digitalWrite(IN_11, LOW);<br>
                            digitalWrite(IN_12, HIGH);<br>
                            analogWrite(ENA_m1, speedCar/speed_Coeff);<br>


                            digitalWrite(IN_13, HIGH);<br>
                            digitalWrite(IN_14, LOW);<br>
                            analogWrite(ENB_m1, speedCar/speed_Coeff);<br>


                            digitalWrite(IN_21, HIGH);<br>
                            digitalWrite(IN_22, LOW);<br>
                            analogWrite(ENA_m2, speedCar);<br>


                            digitalWrite(IN_23, LOW);<br>
                            digitalWrite(IN_24, HIGH);<br>
                            analogWrite(ENB_m2, speedCar);<br>

                        }<br>

                      void goBackLeft(){ <br>

                            digitalWrite(IN_11, LOW);<br>
                            digitalWrite(IN_12, HIGH);<br>
                            analogWrite(ENA_m1, speedCar);<br>


                            digitalWrite(IN_13, HIGH);<br>
                            digitalWrite(IN_14, LOW);<br>
                            analogWrite(ENB_m1, speedCar);<br>


                            digitalWrite(IN_21, HIGH);<br>
                            digitalWrite(IN_22, LOW);<br>
                            analogWrite(ENA_m2, speedCar/speed_Coeff);<br>


                            digitalWrite(IN_23, LOW);<br>
                            digitalWrite(IN_24, HIGH);<br>
                            analogWrite(ENB_m2, speedCar/speed_Coeff);<br>

                        }<br>

                      void stopRobot(){  <br>

                            digitalWrite(IN_11, LOW);<br>
                            digitalWrite(IN_12, LOW);<br>
                            analogWrite(ENA_m1, speedCar);<br>


                            digitalWrite(IN_13, LOW);<br>
                            digitalWrite(IN_14, LOW);<br>
                            analogWrite(ENB_m1, speedCar);<br>

                        
                            digitalWrite(IN_21, LOW);<br>
                            digitalWrite(IN_22, LOW);<br>
                            analogWrite(ENA_m2, speedCar);<br>

                            
                            digitalWrite(IN_23, LOW);<br>
                            digitalWrite(IN_24, LOW);<br>
                            analogWrite(ENB_m2, speedCar);<br>
                        
                        }<br>
                        
                      void loop(){<br>
                        
                      if (Serial.available() > 0) {<br>
                        command = Serial.read();<br>
                        stopRobot();      //Initialize with motors stopped.<br>

                      if (lightFront) {digitalWrite(light_FR, HIGH); digitalWrite(light_FL, HIGH);}<br>
                      if (!lightFront) {digitalWrite(light_FR, LOW); digitalWrite(light_FL, LOW);}<br>
                      if (lightBack) {digitalWrite(light_BR, HIGH); digitalWrite(light_BL, HIGH);}<br>
                      if (!lightBack) {digitalWrite(light_BR, LOW); digitalWrite(light_BL, LOW);}<br>
                      if (horn) {digitalWrite(horn_Buzz, HIGH);}<br>
                      if (!horn) {digitalWrite(horn_Buzz, LOW);}<br>

                      switch (command) {<br>
                      case 'F':goAhead();break;<br>
                      case 'B':goBack();break;<br>
                      case 'L':goLeft();break;<br>
                      case 'R':goRight();break;<br>
                      case 'I':goAheadRight();break;<br>
                      case 'G':goAheadLeft();break;<br>
                      case 'J':goBackRight();break;<br>
                      case 'H':goBackLeft();break;<br>
                      case '0':speedCar = 100;break;<br>
                      case '1':speedCar = 115;break;<br>
                      case '2':speedCar = 130;break;<br>
                      case '3':speedCar = 145;break;<br>
                      case '4':speedCar = 160;break;<br>
                      case '5':speedCar = 175;break;<br>
                      case '6':speedCar = 190;break;<br>
                      case '7':speedCar = 205;break;<br>
                      case '8':speedCar = 220;break;<br>
                      case '9':speedCar = 235;break;<br>
                      case 'q':speedCar = 255;break;<br>
                      case 'W':lightFront = true;break;<br>
                      case 'w':lightFront = false;break;<br>
                      case 'U':lightBack = true;break;<br>
                      case 'u':lightBack = false;break;<br>
                      case 'V':horn = true;break;<br>
                      case 'v':horn = false;break;<br>

                      }<br>
                      }<br>
                      }<br>                                                                                                                                                                                                     
         
                                            
                 <br/>                                                                           
              </p>
          </div>   
        </div>
    </div>
</div>
 <br>
  <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica17" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
               <br>
        <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Carro con control remoto Bluetooth.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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