<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica13">Notas musicales con un potenciómetro</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">

<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Notas musicales con un potenciómetro</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic13.png')?>"
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
                              Al girar el potenciómetro, el arduino procesara las señales de entrada proporcionadas por este, para que la bocina, reproduzca las notas. De antemano, se programan las frecuencias de cada una de las notas, según la octava, en la cual se encuentren escritas en el pentagrama.      
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
                      <li type="circle">1 Alambre para conexiones </li>
                      <li type="circle">3 Resistencias de 220Ω</li>
                      <li type="circle">1 Bocina de 8 Ω a 1W </li>
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

                        int altavoz = 9;<br>
                        const int DO  = 262;<br>
                        const int RE  = 294;<br>
                        const int MI  = 330;<br>
                        const int FA  = 349;<br>
                        const int SOL = 392;<br>
                        const int LA  = 440;<br>
                        const int SI  = 494;<br>

                        void setup() {<br>

                          Serial.begin(9600);<br>

                        }<br>

                        void loop() {<br>
                        int valor = analogRead(A0);<br>
                        int frecuencia;<br>
                        int duracion;<br>

                         Serial.print("Valor del potenciometro: ");<br>
                          Serial.print(valor);<br>
                          Serial.print("\n");<br>
                          delay(100);<br>

                        if (valor>=10 && valor<=20){<br>
                        frecuencia = DO;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("DO");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>20 && valor<=30){<br>
                        frecuencia = RE;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("RE");<br>
                          Serial.print("\n");<br>
                        delay(100); <br> 
                        }<br>

                        if (valor>30 && valor<=40){<br>
                        frecuencia = MI;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("MI");<br>
                          Serial.print("\n");<br>
                        delay(1000);  <br>
                        }<br>

                        if (valor>40 && valor<=50){<br>
                        frecuencia = FA;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("FA");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>50 && valor<=60){<br>
                        frecuencia = SOL;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("SOL");<br>
                          Serial.print("\n");<br>
                        delay(100);<br>  
                        }<br>

                        if (valor>60 && valor<=70){<br>
                        frecuencia = LA;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("LA");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>70 && valor<=80){<br>
                        frecuencia = SI;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("SI");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>=80 && valor<=90){<br>
                        frecuencia = DO;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("DO");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>90 && valor<=100){<br>
                        frecuencia = RE;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("RE");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>=100 && valor<=200){<br>
                        frecuencia = MI;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("MI");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>200 && valor<=300){<br>
                        frecuencia = FA;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("FA");<br>
                          Serial.print("\n");<br>
                        delay(100); <br> 
                        }<br>

                        if (valor>300 && valor<=400){<br>
                        frecuencia = SOL;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("SOL");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>400 && valor<=500){<br>
                        frecuencia = LA;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("LA");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>500 && valor<=600){<br>
                        frecuencia = SI;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("SI");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>600 && valor<=700){<br>
                        frecuencia = DO;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("DO");<br>
                          Serial.print("\n");<br>
                        delay(100);<br>  
                        }<br>

                        if (valor>700&& valor<=800){<br>
                        frecuencia = RE;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("RE");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>=800 && valor<=900){<br>
                        frecuencia = MI;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("MI");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                        }<br>

                        if (valor>900 && valor<=1023){<br>
                        frecuencia = FA;<br>
                        duracion=1000;<br>
                        tone (altavoz, frecuencia, duracion);<br>
                        Serial.print("FA");<br>
                          Serial.print("\n");<br>
                        delay(100);  <br>
                         }<br>
                        }  <br>
                                            
                 <br/>                                                                           
              </p>
          </div>   
        </div>
    </div>
</div>
          <br>
             <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/bobina" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>
                <br>
          <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Notas musicales con un potenciómetro.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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