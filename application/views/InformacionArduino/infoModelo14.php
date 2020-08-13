<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica14">Luces Audioritmicas</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Luces Audioritmicas</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic14.png')?>"
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
                           Aprenderemos a instalar un sistema audioritmico basico con leds, para conocer el comportamiento del audio con los datos arrojados para encender los LEDs a el ritmo de nuestra música. 
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
                      <li type="circle">8 LEDs</li>
                      <li type="circle">1 Cable de audio (micro jack)</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
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

                      
                      //Declaramos los leds<br> 
                      int LED1 = 3;<br> 
                      int LED2 = 4;<br> 
                      int LED3 = 5;<br> 
                      int LED4 = 6;<br> 
                      int LED5 = 7;<br> 
                      int LED6 = 8;<br> 
                      int LED7 = 9;<br> 
                      int LED8 = 10;<br> 
                      //Las variables que usaremos para el silencio<br> 
                      int Valor;<br> 
                      int Valor1;<br> 
                      int Valor2;<br> 
                      int Valor3;<br> 
                      int Valor4;<br> 
                      //Configuramos los pines y el serial para poder visualizar la entrada analogica<br> 
                      void setup (){<br> 
                      Serial.begin(9600);<br> 
                      pinMode(LED1,OUTPUT);<br> 
                      pinMode(LED2,OUTPUT);<br> 
                      pinMode(LED3,OUTPUT);<br> 
                      pinMode(LED4,OUTPUT);<br> 
                      pinMode(LED5,OUTPUT);<br> 
                      pinMode(LED6,OUTPUT);<br> 
                      pinMode(LED7,OUTPUT);<br> 
                      pinMode(LED8,OUTPUT);<br> 
                      }<br> 
                      void loop (){<br> 
                      //Leemos el valor<br> 
                      Valor = analogRead(A0);<br> 
                      //Transferimos los valores para saber cual era el estado anterior<br> 
                      Valor4 = Valor3;<br> 
                      Valor3 = Valor2;<br> 
                      Valor2 = Valor1;<br> 
                      Valor1 = Valor;<br> 
                      //Visualizamos los valores en Serial Monitor<br> 
                      Serial.print("Valor: ");<br> 
                      Serial.print(Valor);<br> 
                      Serial.print("\t Valor1: ");<br> 
                      Serial.print(Valor1);<br> 
                      Serial.print("\t Valor2: ");<br> 
                      Serial.print(Valor2);<br> 
                      Serial.print("\t Valor3: ");<br> 
                      Serial.print(Valor3);<br> 
                      Serial.print("\t Valor4: ");<br> 
                      Serial.println(Valor4);<br> 
                      //Condicionamos que si el programa lee 4 veces seguidas
                      0 que se apagen los leds, si no ponemos esto los leds parpadearan mucho
                      if (Valor1+Valor2+Valor3+Valor4==0){<br> 
                      digitalWrite(LED1,LOW);<br> 
                      digitalWrite(LED2,LOW);<br> 
                      digitalWrite(LED3,LOW);<br> 
                      digitalWrite(LED4,LOW);<br> 
                      digitalWrite(LED5,LOW);<br> 
                      digitalWrite(LED6,LOW);<br> 
                      digitalWrite(LED7,LOW);<br> 
                      digitalWrite(LED8,LOW);<br> 
                      }<br> 
                      //Encendemos los leds segun el valor de entrada.
                      En este caso la salida de mi pc como mucho me llega a 400 asi que lo dividimos entre ocho leds.
                      else{<br> 
                      if (Valor>0){<br> 
                      digitalWrite(LED1, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED1, LOW);<br> 
                      }<br> 
                      if (Valor>50){<br> 
                      digitalWrite(LED2, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED2, LOW);<br> 
                      }<br> 
                      if (Valor>100){<br> 
                      digitalWrite(LED3, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED3, LOW);<br> 
                      }<br> 
                      if (Valor>150){<br> 
                      digitalWrite(LED4, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED4, LOW);<br> 
                      }<br> 
                      if (Valor>200){<br> 
                      digitalWrite(LED5, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED5, LOW);<br> 
                      }<br> 
                      if (Valor>250){<br> 
                      digitalWrite(LED6, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED6, LOW);<br> 
                      }<br> 
                      if (Valor>300){<br> 
                      digitalWrite(LED7, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED7, LOW);<br> 
                      }<br> 
                      if (Valor>350){<br> 
                      digitalWrite(LED8, HIGH);<br> 
                      }<br> 
                      else{<br> 
                      digitalWrite(LED8, LOW);<br> 
                      }<br> 
                      }<br> 
                      } <br>                                                                         
              </p>
          </div>   
        </div>
    </div>
</div>
          <br>
             <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica14" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                <br>
         <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Luces Audioritmicas.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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