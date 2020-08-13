<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/osciloscopio">Control de motores 5v con L293D(Puente H)</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Control de motores 5v con L293D(Puente H)</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic10.png')?>"
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
                          Obtendremos conocimiento sobre cómo controlar velocidad y sentido de giro de motores CC utilizando una placa Arduino y un puente H (L293D).
                                       <br></br>

            ARDUINO   L293D(Puente H)  <br>
             
                  5          10<br>
                  6          15<br>
                  9          7<br>
                  10         2<br>
                  5V         1, 9, 16<br>
                  GND        4, 5, 12, 13<br>
                  
                  El motor LEFT se conecta a los pines 3 y 6 del Puente H<br>
                  El motor RIGHT se conecta a los pines 11 y 14 del Puente H<br>
                  
                  La fuente de alimentación de los Motores se conecta a tierra y<br>
                  el positivo al pin 8 del puente H. 
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
                      <li type="circle">2 Motores de 5v</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1 Alambre para conexiones</li>
                      <li type="circle">1 Puente H(L293D)</li>
                      <li type="circle">4 baterias AA</li>
                      <li type="circle">1 conector de baterias AA</li>

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
                    */
          //LEFT MOTOR<br>
          int leftA = 9; <br>
          int leftB = 10;<br>
          //RIGHT MOTOR <br>
          int rightA = 5; <br>
          int rightB = 6; <br>

          int vel = 255; // Velocidad de los motores (0-255)<br>

          void setup()  { <br>
            pinMode(rightA, OUTPUT); <br>
            pinMode(rightB, OUTPUT); <br>
            pinMode(leftA, OUTPUT); <br>
            pinMode(leftB, OUTPUT); <br>
            Serial.begin(9600); <br>
            analogWrite(rightA, 0); <br>
            analogWrite(rightB, 0);<br>
            analogWrite(leftA, 0); <br>
            analogWrite(leftB, 0);<br>
           } <br>
           
          void loop()<br>  { 
              if (Serial.available()) { <br>
              char  a = Serial.read();<br>
          // STOP  <br>
              if (a =='X'||a =='x'){ <br>    
             Serial.println("STOP");<br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, 0);   <br>
          }    <br>
      //MOTOR left FORWARDS <br>
          if (a =='W'||a =='w'){<br>
            Serial.println("MOTOR left FORWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, vel); <br>
              analogWrite(leftB, 0);<br>
          }<br>
      //MOTOR left BACKWARDS <br>
          if (a =='A'||a =='a'){ <br>
            Serial.println("MOTOR left BACKWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, vel);<br>
          } <br>
      //MOTOR right FORWARDS <br>
          if (a =='E'||a =='e'){<br>
            Serial.println("MOTOR right FORWARDS"); <br>
              analogWrite(rightA, vel); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, 0); <br>
          }<br>
             
      //MOTOR right BACKWARDS <br>
          if (a =='S'||a =='s'){ <br>
            Serial.println("MOTOR right BACKWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, vel);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, 0); <br>
          }<br>
      
      //MOTOR left & right FORWARDS <br>
          if (a =='T'||a =='t'){<br>
            Serial.println("MOTOR left & right FORWARDS"); <br>
              analogWrite(rightA, vel); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, vel); <br>
              analogWrite(leftB, 0); <br>
          }<br>
      //MOTOR left & right BACKWARDS <br>
          if (a =='F'||a =='f'){<br>
            Serial.println("MOTOR left & right BACKWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, vel);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, vel); <br>
          }<br>
    }<br>
  }      <br>                                          
                                  </p>
                             </div>              
                        </div>
                                                                                                
              </p>
          </div>   
        </div>
           <br>
             <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/osciloscopio" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                 <br>
          <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Control de motores 5v con L293D(Puente H).pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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