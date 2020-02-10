<p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/capacitor" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 3</title>
<style>
	
p.ex1 {
 
  padding: 0px 150px 0px;
}
p.ex2 {
  border: 7px solid green; 
  padding: 0px 150px 0px;
}

</style>
</head>
<body >
<font color="#000000"face="Arial">
<center>
<h1><br></br>Practica 3: Cometa con LEDs <br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic3.png')?>">
</center>
<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1  Arduino UNO
11 LEDs
11 Resistencias de 220Ω
1  Placa protoboard
1  Alambre para conexiones                                                                                        
</p>
</pre>        
<p class="ex1">
<b>Descripción del ejercicio:</b><br></br>
Este ejercicio muestra como realizar un rayo de luz, o más poéticamente, una estrella
fugaz, moviéndose a través de una línea de LED-s. Podremos configurar tanto la
velocidad de de la estrella, así como la longitud de la cola. No es muy elegante porque
la cola brilla con la misma intensidad que la estrella, y al final, parecerá como si un rayo
sólido cruzase la línea de LED-s. <br>

</p>
<p class="ex1">
Hay que conectar 11 LED-s a los pines digitales de la placa a través de resistencias de
220 Ohmios tal y como se muestra en la imagen superior.El programa comienza encendiendo LED-s hasta que llegue al número de LED-s
establecido para la cola. En ese momento seguirá encendiendo LED-s hacia la izquierda
(si se monta tal y como se muestra en la fotografía inferior), para mantener el
movimiento de la estrella, al mismo tiempo que apaga LED-s por la derecha, para
asegurarnos de que vemos la cola. De otra forma seguiría encendiendo LED-s hasta
encenderlos todos. Esto ocurre cuando el tamaño de la cola es igual o mayor que el
número de LED-s.
El tamaño de la cola debería ser relativamente pequeño en comparación con el número
de LED-s de forma que podamos ver la estrella.  
<br><br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>

<p class="ex2"><font color="#000000" size="4" face="Arial">
int pinArray [] = { 2,3,4,5,6,7,8,9,10,11,12 };
 int controlLed = 13; // LED de control
 int waitNextLed = 100; // Tiempo antes de encender el siguiente LED
 // Número de LED-s que permanecen encendidos antes de empezar a apagarlos para
 //formar la cola
 int tailLength = 4;
 // Número de LED-s conectados (que es también el tamaño del array)
 int lineSize = 11;
void setup() // Configuración de los PIN-es como salida digital
 {
 int i;
 pinMode (controlLed, OUTPUT);
 for (i=0; i< lineSize; i++)
 {
 pinMode(pinArray[i], OUTPUT);
 }
 }

void loop()
 {
 int i;
 // Se establece la longitud de la cola en un contador
 int tailCounter = tailLength;
 // Se enciende el LED de control para indicar el inicio del loop
 digitalWrite(controlLed, HIGH);
 for (i=0; i<(lineSize); i++)
 {
 digitalWrite(pinArray[i],HIGH); // Se encienden consecutivamente los LED
 // Esta variable de tiempo controla la velocidad a la que se mueve la estrella
 delay(waitNextLed);
 if (tailCounter == 0)
 {
 // Se apagan los LED-s en función de la longitud de la cola.
 digitalWrite(pinArray[i-tailLength],LOW);
 }
 else
 if (tailCounter > 0)
 tailCounter--;
 }
 for (i=(lineSize-tailLength); i<(lineSize); i++)
 {
 digitalWrite(pinArray[i],LOW); // Se apagan los LED
// Esta variable de tiempo controla la velocidad a la que se mueve la estrella
 delay(waitNextLed);
 }
} 

</p>
</pre>


</body>
</html>