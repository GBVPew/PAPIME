<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <style>


    td{
      font-size: 15px;
      line-height: 20px;
      padding: 30px 100px 30px 100px;
      text-align: justify;
      vertical-align: top;
      width: 50%;
  }
  

 

 </style>
</head>

    <body>

      <center style="font-size: 30px ">
     <p color="000000" size="10" face="Arial">Cometa con LEDs.</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic3.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  

            Este ejercicio muestra como realizar un rayo de luz, o más poéticamente, una estrella
			fugaz, moviéndose a través de una línea de LED-s. Podremos configurar tanto la
			velocidad de de la estrella, así como la longitud de la cola. No es muy elegante porque
			la cola brilla con la misma intensidad que la estrella, y al final, parecerá como si un rayo
			sólido cruzase la línea de LED-s. <br>

			</p>
			Hay que conectar 11 LED-s a los pines digitales de la placa a través de resistencias de
			220 Ohmios tal y como se muestra en la imagen superior.El programa comienza encendiendo LED-s hasta que llegue al número de LED-s
			establecido para la cola. En ese momento seguirá encendiendo LED-s hacia la izquierda
			(si se monta tal y como se muestra en la fotografía inferior), para mantener el
			movimiento de la estrella, al mismo tiempo que apaga LED-s por la derecha, para
			asegurarnos de que vemos la cola. De otra forma seguiría encendiendo LED-s hasta
			encenderlos todos. Esto ocurre cuando el tamaño de la cola es igual o mayor que el
			número de LED-s.
			El tamaño de la cola debería ser relativamente pequeño en comparación con el número
			de LED-s de forma que podamos ver la estrella. </br>
</br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>11 LEDs</li>
                      
                      <li>1 Placa de pruebas (Protoboard)  </li>
                      <li>11 Resistencias de 220Ω </li>
                      <li>1  Alambre para conexiones  </li>
                   </ol>                                   
                </td>
                
            </tr>
        </table>
<center>


<html lang="es">
<head>
    <meta charset="utf-8">
    <style>
    #scroll{
       padding-top: 20px ;
        height:200px;
        width:600px;
        overflow-y:scroll;
        overflow-x:hidden;
    }
    </style>
</head>
 
<body>
   <p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/bobina" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
      <p></p>                 
  </div> 
 <div id="scroll">
  <div align="left">
                <p color="000000" size="4" face="Arial" LINE-HEIGHT S=5px>
int pinArray [] = { 2,3,4,5,6,7,8,9,10,11,12 }; </br>
 int controlLed = 13; // LED de control </br>
 int waitNextLed = 100; // Tiempo antes de encender el siguiente LED </br>
 // Número de LED-s que permanecen encendidos antes de empezar a apagarlos para </br>
 //formar la cola </br>
 int tailLength = 4; </br>
 // Número de LED-s conectados (que es también el tamaño del array) </br>
 int lineSize = 11; </br>
void setup() // Configuración de los PIN-es como salida digital </br>
 { </br>
 int i; </br>
 pinMode (controlLed, OUTPUT); </br>
 for (i=0; i< lineSize; i++) </br>
 { </br>
 pinMode(pinArray[i], OUTPUT); </br>
 } </br>
 } </br>

void loop() </br>
 { </br>
 int i; </br>
 // Se establece la longitud de la cola en un contador </br>
 int tailCounter = tailLength; </br>
 // Se enciende el LED de control para indicar el inicio del loop </br>
 digitalWrite(controlLed, HIGH); </br>
 for (i=0; i<(lineSize); i++) </br>
 { </br>
 digitalWrite(pinArray[i],HIGH); // Se encienden consecutivamente los LED </br>
 // Esta variable de tiempo controla la velocidad a la que se mueve la estrella </br>
 delay(waitNextLed); </br>
 if (tailCounter == 0) </br>
 { </br>
 // Se apagan los LED-s en función de la longitud de la cola. </br>
 digitalWrite(pinArray[i-tailLength],LOW); </br>
 } </br>
 else </br>
 if (tailCounter > 0) </br>
 tailCounter--; </br>
 } </br>
 for (i=(lineSize-tailLength); i<(lineSize); i++) </br>
 { </br>
 digitalWrite(pinArray[i],LOW); // Se apagan los LED </br>
// Esta variable de tiempo controla la velocidad a la que se mueve la estrella </br>
 delay(waitNextLed); </br>
 } </br>
}                      </br>
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>