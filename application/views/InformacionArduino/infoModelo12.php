<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <li><a href="<?php echo base_url();?>Inicio">Inicio</a></li>
    <li><a href="<?php echo base_url();?>Catalogo">Catalogo Arduino</a></li>
    <li><a href="<?php echo base_url();?>Informacion/practica12">Juego Snake con Matriz Led 8x8</a></li>
</ul>

<div style="padding: 0px 20px 20px 20px">
<!--Fondo--> 

  <div class="row">
    <div class="col s12 m12">
      <div class="card whith">
        <div class="card-content center-align">
          <span class="card-title"><h2 style="color:#000000">Juego Snake con Matriz Led 8x8</h2></span>
             <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic12.png')?>"
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
                            Este esta práctica crearemos el juego de serpiente portátil(snake), para esto aprenderemos a conectar los componentes más importantes la matriz LED y el control de mando(joystick).       
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
                      <li type="circle">1 Módulo de joystick</li>
                      <li type="circle">1 Matriz Led 8x8</li>
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

                      #include "LedControlMS.h"

                       <br> 
                      #define NBR_MTX 2  <br> 
                      LedControl lc=LedControl(13,12,11, NBR_MTX); <br> 

                      String digits= "1234567890"; <br> 
                      int digitCounter=0; <br> 
                      /* we always wait a bit between updates of the display */ <br> 
                      unsigned long delaytime=300; <br> 

                      const int SW_pin = 2; // digital pin connected to switch output <br> 
                      const int X_pin = 0; // analog pin connected to X output <br> 
                      const int Y_pin = 1; // analog pin connected to Y output <br> 

                      int foodX = 4; <br> 
                      int foodY = 5; <br> 
                      int snakeX[100]; <br> 
                      int snakeY [100]; <br> 
                      int dir = 0; <br> 
                      int len = 1; <br> 
                      int length1 = 0; <br> 
                      int length2 = 0; <br> 
                      boolean play = false; <br> 

                      void setup() { <br> 
                        /*
                         The MAX72XX is in power-saving mode on startup,
                         we have to do a wakeup call
                         */
                        Serial.begin (9600); <br> 
                        pinMode(SW_pin, INPUT); <br> 
                        digitalWrite(SW_pin, HIGH); <br> 
                        digitCounter=0; <br> 
                        for (int i=0; i< NBR_MTX; i++){ <br> 
                          lc.shutdown(i,false); <br> 
                        /* Set the brightness to a medium values */ <br> 
                          lc.setIntensity(i,8); <br> 
                        /* and clear the display */ <br> 
                          lc.clearDisplay(i); <br> 
                        } <br> 

                        snakeX[0] = 4; <br> 
                        snakeY[0] = 2; <br> 
                        snakeX[1] = 4; <br> 
                        snakeY[1] = 1; <br> 
                        
                        lc.setLed(0,foodX,foodY,true); <br> 
                        lc.setLed(0,snakeX[0],snakeY[0],true); <br> 
                        delay(1000); <br> 
                       
                      } <br> 


                      void loop() {  <br> 
                        if (digitalRead(SW_pin)==0){ <br> 
                          play = true; <br> 
                        } <br> 
                        if (play == true) { <br> 
                          
                        lc.clearAll(); <br> 
                        for (int i=len; i>0; i--) { <br> 
                          snakeX[i]=snakeX[i-1]; <br> 
                          snakeY[i]=snakeY[i-1]; <br> 
                        }
                        if (dir == 0) { <br> 
                          if (analogRead(X_pin)>800) { <br> 
                            dir += 1; <br> 
                            snakeX[0] += 1; <br> 
                          } else if (analogRead(X_pin)<200) { <br> 
                            dir = 3; <br> 
                            snakeX[0] -= 1; <br> 
                          } else snakeY[0] += 1; <br> 
                        } else if (dir == 1) { <br> 
                          if (analogRead(Y_pin)>800) { <br> 
                            dir += 1; <br> 
                            snakeY[0] -= 1; <br> 
                          } else if (analogRead(Y_pin)<200) { <br> 
                            dir -= 1; <br> 
                            snakeY[0] += 1; <br> 
                          } else snakeX[0] += 1; <br> 
                        } else if (dir == 2) { <br> 
                          if (analogRead(X_pin)>800) { <br> 
                            dir -= 1; <br> 
                            snakeX[0] += 1; <br> 
                          } else if (analogRead(X_pin)<200) { <br> 
                            dir += 1; <br> 
                            snakeX[0] -= 1; <br> 
                          } else snakeY[0] -= 1; <br> 
                        } else if (dir == 3) { <br> 
                          if (analogRead(Y_pin)>800) { <br> 
                            dir -= 1; <br> 
                            snakeY[0] -= 1; <br> 
                          } else if (analogRead(Y_pin)<200) { <br> 
                            dir = 0; <br> 
                            snakeY[0] += 1; <br> 
                          } else snakeX[0] -= 1; <br> 
                        } <br> 
                        if (snakeX[0]>7){ <br> 
                          snakeX[0] = 0; <br> 
                        } <br> 
                        if (snakeX[0]<0){ <br> 
                          snakeX[0] = 7; <br> 
                        } <br> 
                        if (snakeY[0]>7){ <br> 
                          snakeY[0] = 0; <br> 
                        } <br> 
                        if (snakeY[0]<0){ <br> 
                          snakeY[0] = 7; <br> 
                        } <br> 
                        if (snakeX[0] == foodX and snakeY[0] == foodY) { <br> 
                          foodX=random(8); <br> 
                          foodY=random(8); <br> 
                          len+=1; <br> 
                          length1+=1; <br> 
                        } <br> 
                        if (length1==10){ <br> 
                          length1=0; <br> 
                          length2+=1; <br> 
                        } <br> 
                        for (int i = 1; i< len; i++){ <br> 
                          if(snakeX[0]==snakeX[i] and snakeY[0]==snakeY[i]){ <br> 
                            gameOver(); <br> 
                          } <br> 
                        } <br> 
                        lc.setLed(0,foodX,foodY,true); <br> 
                        for (int i = 0; i< len; i++){ <br> 
                          lc.setLed(0,snakeX[i],snakeY[i],true); <br> 
                        } <br> 
                        delay(500); <br> 
                        
                        } <br> 
                      } <br> 

                      void gameOver(){
                        lc.writeString(0,"Game Over"); <br> 
                        delay(1000); <br> 
                        lc.writeString(0,"Score"); <br> 
                        delay(1000); <br> 
                        lc.displayChar(0,length2); <br> 
                        delay(500); <br> 
                        lc.clearDisplay(0); <br> 
                        delay(200); <br> 
                        lc.displayChar(0,length1); <br> 
                        delay(1000); <br> 
                        softwareReset(); <br> 
                      } <br> 

                      void softwareReset() { <br> 
                        foodX = 4; <br> 
                        foodY = 5; <br> 
                        dir = 0; <br> 
                        len = 1;  <br> 
                        length1 = 0; <br> 
                        length2 = 0; <br> 
                        play = false; <br> 
                        snakeX[0] = 4; <br> 
                        snakeY[0] = 2; <br> 
                        snakeX[1] = 4; <br> 
                        snakeY[1] = 1; <br> 
                        
                        lc.clearDisplay(0); <br> 
                        Serial.println("LED0: foodX foodY"); <br> 
                        lc.setLed(0,foodX,foodY,true); <br> 
                        Serial.println("LED0: snakeX, snakeY"); <br> 
                        lc.setLed(0,snakeX[0],snakeY[0],true); <br> 
                        delay(1000); <br> 
                      } <br> 

                      void scrollLeft(char ch){ <br> 
                        int pos =lc.getCharArrayPosition(ch); <br> 
                        for (int scroll =0; scroll<6; scroll++) { <br> 
                           for (int i=scroll; i<6;i++) { <br> 
                              lc.setRow(0,i-scroll, alphabetBitmap[pos][i]); <br> 
                          }  <br> 
                          delay(300); <br> 
                          lc.clearDisplay(0); <br> 
                        } <br> 
                      } <br> 

                      void scrollRight(char ch){ <br> 
                        int pos =lc.getCharArrayPosition(ch); <br> 
                        for (int scroll =0; scroll<8; scroll++) { <br> 
                           for (int i=0; i<6;i++) { <br> 
                              if (scroll+i<8) lc.setRow(0, scroll+i, alphabetBitmap[pos][i]); <br> 
                          }  <br> 
                          delay(300); <br> 
                          lc.clearDisplay(0); <br> 
                        } <br> 
                      }     <br>         

              </p>
          </div>   
        </div>
    </div>
</div>
          <br>
             <br>
          <div class="center">
              <a href="<?php echo base_url();?>modelos/APractica12" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
              <p></p>           
              </div>  
              <br>
         <!--PDF-->
             <a href="<?php echo base_url();?>assets/ArduinoPDF/Juego Snake con Matriz Led 8x8.pdf"  class="waves-effect waves-light btn blue-grey lighten-2 center" target="_blanck">PDF Practica</a>
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