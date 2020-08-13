<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/celdasolar">Entrada Analógica</a></li>
</ul>

<div style="padding:0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Entrada Analógica</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic4.png')?>"
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
                           </br>  

                          Se trata de configurar un canal de entrada analógico pin 0 y enviar el valor leído al PC
                          para visualizarlo.  </br>

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
                      <li type="circle">1 Potenciómetro de 10KΩ</li>
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
          <div class="row">
            <div class="col s12 m4" >
              <div class="card indigo lighten-2">
                <div class="card-content white-text center">
               <!--Codigo--> 
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
                                /* Entrada Analógica */   </br>
                                int potPin = 0; // selecciona el pin de entrada para    </br>colocar el potenciómetro   </br>
                                int val = 0; // variable para almacenar el valor leído por    </br>la entrada analógica   </br>
                                void setup() {   </br>
                                 beginSerial(9600);   </br>
                                }   </br>
                                void loop() {   </br>
                                 val = analogRead(potPin); // lee el valor del canal de    </br>ENTRADA analógica   </br>
                                 printInteger(val); // Envía al PC el valor analógico leído    </br>y lo muestra en pantalla   </br>
                                 serialWrite(10);   </br>
                                 delay(100);   </br>
                                }                                  </br>                                                               
                          </p>
                      </div>   
                    </div>
                </div>
            </div>
                <!--Codigo-->
                </div>
              </div>
            </div>
             <!--Modelo--> 
             <div class="col s12 m4" >
                  <div class="card indigo lighten-2">
                   <div class="card-content white-text center">
                     <div class="center">
                      <a href="<?php echo base_url();?>modelos/APractica4" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                </div>
              </div>
            </div>
                <!--Modelo-->
                <!--PDF--> 
                <div class="col s12 m4" >
                  <div class="card indigo lighten-2">
                   <div class="card-content white-text center">
                    <a href="<?php echo base_url();?>assets/ArduinoPDF/Entrada Analogica1.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
                </div>
              </div>
            </div>
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