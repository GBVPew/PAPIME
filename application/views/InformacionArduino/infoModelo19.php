 <ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica19">Bote de Basura Inteligente</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Bote de Basura Inteligente</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic19.png')?>"
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
                             Con un sensor Ultrasónico y un Servomotor podemos hacer algo tan sencillo como un bote de basura inteligente. Automatizando un poco nuestro hogar o oficina.   
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
                      <li type="circle"> 1 Placa de pruebas (Protoboard)  </li>
                      <li type="circle"> 1 Alambre para conexiones</li>
                      <li type="circle">1 Sensor Ultrasónico HC-SR04</li>
                      <li type="circle">1 Servomotor</li>
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

                      #include<Servo.h> <br>
                      Servo servo;<br>
                      int const trigPin = 6; //pin trig del sensor<br>
                      int const echoPin = 5; //pin echo del sensor<br>
                      void setup()<br>
                      {<br>
                      pinMode(trigPin, OUTPUT);<br>
                      pinMode(echoPin, INPUT);<br>
                          servo.attach(3);<br>
                      }<br>
                      void loop()<br>
                      {       int duration, distance;<br>
                      digitalWrite(trigPin, HIGH);<br>
                      delay(1);<br>
                      digitalWrite(trigPin, LOW);<br>
                      // Medir la entrada de pulsos en el pin de echo.<br>
                      duration = pulseIn(echoPin, HIGH);<br>
                      // La distancia es la mitad de la duración dividida por 29.1 (de la hoja de datos)<br>
                      distance = (duration/2) / 29.1;<br>
                      // si la distancia es inferior a 20 cm y más de 0<br>
                      if (distance <= 20 && distance >= 0) {<br>
                        servo.write(10);<br>
                          delay(3000);<br>
                      } else {<br>
                      servo.write(100);<br>
                      }<br>
                      // esperar 60 milisegundos para cerrar el bote automáticamente<br>
                      delay(60);<br>
                      }      <br>                                                              
              </p>
          </div>   
        </div>
    </div>
</div>
 <br>
  <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica19" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
               <br>
        <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Bote de Basura Inteligente.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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