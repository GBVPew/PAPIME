 <ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica20">Sistema de Alarma con sensor PIR</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Sistema de Alarma con sensor PIR</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic20.png')?>"
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
                            En esta práctica  vamos a trabajar con un sensor PIR (passive IR), que nos va a dar mucho juego a la hora de realizar proyectos donde necesitemos detectar movimiento de personas o animales. Los sensores PIR o sensores de infrarrojo pasivo, miden la luz infrarroja emitida por los objetos situados en el campo de visión del sensor.<br>

                            Estos sensores son muy utilizados en alarmas para la detección de intrusión en viviendas, pero también se están aplicando en instalaciones domóticas para por ejemplo encender la luz de las escaleras cuando alguien entra a un edificio o en los aseos de muchos restaurantes.  
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
                      <li type="circle">1 Sensor PIR</li>
                      <li type="circle">1 Bocina 5V</li>
                      <li type="circle">1 Reley de 5V</li>
                      <li type="circle">1 Placa de pruebas (Protoboard)</li>
                      <li type="circle">1  Alambre para conexiones</li>
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
                    #define PIR 2 //Establece el pin 2 para el sensor PIR  </br>
                    #define rele 3 //Establece el pin 3 para el relé  </br>
                     
                    int tiempo = 5000; //Tiempo que suena la alarma  </br>
                    boolean sensor; //Variable que almacena el estado del sensor (activado/desactivado)  </br>
                     
                    void setup()  </br>
                    {  </br>
                      pinMode(PIR,INPUT); //Establece el pin del sensor como entrada  </br>
                      pinMode(rele,OUTPUT); //Establece el pin del relé como salida  </br>
                    }  </br>
                       </br>
                    void loop()  </br>  </br>
                    {  </br>
                      sensor=digitalRead(PIR); //Guarda el estado del sensor en la variable  </br>
                      if(sensor==HIGH) //Si el sensor es activado entra en el bucle  </br>
                      {  </br>
                        digitalWrite(rele,HIGH); //Activa la alarma  </br>
                        delay(tiempo); //Espera el tiempo definido en la variable "tiempo"  </br>
                        digitalWrite(rele,LOW); //Desconecta la alarma  </br>
                      }  </br>
                    }    </br>                                                                          
              </p>
          </div>   
        </div>
    </div>
</div>
<br>
 <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica20" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
               <br>
        <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Sistema de Alarma con sensor PIR.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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