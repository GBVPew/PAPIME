<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica15">Sensor de temperatura con sensor NTC</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Sensor de temperatura con sensor NTC</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic15.png')?>"
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
                            En este ejemplo se trata de medir la temperatura desde el PIN3 de entrada analógica y
                            ver si este valor supera un valor dado de 500 (medida absoluta) si supera este valor
                            activará la salida digital PIN13 y si no la apagara. Además, queremos que se muestre en
                            el monitor de salida del IDE Arduino el valor leído. D sensor utilizaremos un sensor del
                            tipo NTC. <br></br>     
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
                      <li type="circle">1 NTC sensor de temperatura</li>
                      <li type="circle">1 Resistencia 1kΩ</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1 Alambre para conectar</li>
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

                     int led=13;<br>
                      int ntc=3;<br>
                      int medida=0; <br>
                      //variable que guarda el límite de temperatura al que se activa el ventilador<br>
                      int nivel=500;<br>
                      void setup(){<br>
                       pinMode(led,OUTPUT);<br>
                       pinMode(motor,OUTPUT);<br>
                       beginSerial(9600);<br>
                      }<br>
                      //procedimiento que envía al puerto serie, para ser leído en el monitor,<br>
                      void monitoriza(){<br>
                       printInteger(medida); //el valor de la señal de la NTC en la entrada analógica<br>
                       printString(" ");<br>
                       delay(100); //para evitar saturar el puerto serie<br>
                      }<br>
                      void loop(){<br>
                       medida=analogRead(ntc);<br>
                       monitoriza();<br>
                       if(medida>nivel){ //si la señal del sensor supera el nivel marcado:<br>
                       digitalWrite(led,HIGH); //se enciende un aviso luminoso<br>

                       }<br>
                       else{ // si la señal está por debajo del nivel marcado<br>
                       digitalWrite(led,LOW);<br>
                       }<br>
                      }  <br>                                                                             
              </p>
          </div>   
        </div>
    </div>
</div>
          <br>
             <br>

          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica15" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                <br>
              <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Sensor de temperatura con sensor NTC.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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