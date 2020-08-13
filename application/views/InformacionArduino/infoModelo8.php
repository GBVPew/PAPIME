<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/dron">Entrada Analógica</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Entrada Analógica</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic8.png')?>"
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
                          En muchos de nuestros proyectos, tenemos la necesidad de censar nuestro entorno, saber si en frente hay un obstáculo y a que distancia se encuentra, el sensor HC-SR04 nos permite hacer eso. La variable t, tiene el tiempo que dura en llegar el eco del ultrasonido, el siguiente paso es calcular la distancia entre el sensor ultrasónico y el objeto. Donde usaremos la formula V= D/T.<br></br>
                          Donde Velocidad es la velocidad del sonido 340m/s, pero usaremos las unidades en cm/us pues trabajaremos en centímetros y microsegundos, tiempo es el tiempo que demora en llegar el ultrasonido al objeto y regresar al sensor, y la distancia recorrida es dos veces la distancia hacia el objeto.<br></br>
                         Finalmente enviamos serial mente el valor de la distancia y terminamos poniendo una pausa de 100ms, que es superior a los 60ms recomendado por los datos técnicos del sensor, conecte el Arduino Uno y cargue el programa.
                          <br></br>
                          Después de esto el Arduino y sensor ya deben estar trabajando, para poder visualizar los datos vaya a herramientas y habrá el monitor serial.
                          <br></br>
                          En el monitor serial le aparecerán los valores de la distancia que censa el HC-SR04, ponga un objeto al frente y varíe su distancia respecto al sensor y verifique que la distancia mostrada en el monitor serial sea la correctas.<br></br></p>
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
                      <li type="circle">1  Sensor Ultrasónico HC-SR04</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1 Alambre para conexiones </li>
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

                     const int Trigger = 2;   //Pin digital 2 para el Trigger del sensor</br>
                      const int Echo = 3;   //Pin digital 3 para el Echo del sensor</br>

                      void setup() {</br>
                        Serial.begin(9600);//iniciailzamos la comunicación</br>
                        pinMode(Trigger, OUTPUT); //pin como salida</br>
                        pinMode(Echo, INPUT);  //pin como entrada</br>
                        digitalWrite(Trigger, LOW);//Inicializamos el pin con 0</br>
                      }</br>

                      void loop()</br>
                      {</br>

                        long t; //timepo que demora en llegar el eco</br>
                        long d; //distancia en centimetros</br>

                        digitalWrite(Trigger, HIGH);</br>
                        delayMicroseconds(10);          //Enviamos un pulso de 10us</br>
                        digitalWrite(Trigger, LOW);</br>
                        
                        t = pulseIn(Echo, HIGH); //obtenemos el ancho del pulso</br>
                        d = t/59;             //escalamos el tiempo a una </br>distancia en cm
                        
                        Serial.print("Distancia: ");</br>
                        Serial.print(d);      //Enviamos serialmente el valor de la distancia</br>
                        Serial.print("cm");</br>
                        Serial.println();</br>
                        delay(100);          //Hacemos una pausa de 100ms</br>
                      }                                                           
                             
                 <br/>                                                                           
              </p>
          </div>   
        </div>
    </div>
</div>
          <br>
             <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica8" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                 <br>
          <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Entrada Analógica2.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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