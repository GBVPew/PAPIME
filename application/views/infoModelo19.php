<p></p>
<div class="center">
      <a href="<?php echo base_url();?>modelos/raspberry" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 19</title>
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
<body>
<font color="#000000"face="Arial">
<center>
<h1><br></br>Practica 19: Bote de Basura Inteligente
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic19.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones   
1 Sensor Ultrasonico HC-SR04   
1 Servomotor                                                                                                  
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Con un sensor Ultrasonico y un Servomotor podemos hacer algo tan sencillo como un bote de basura inteligente. Automatizando un poco nuestro hogar o oficina.

<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">

#include<Servo.h>
Servo servo;
int const trigPin = 6; //pin trig del sensor
int const echoPin = 5; //pin echo del sensor
void setup()
{
pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
    servo.attach(3);
}
void loop()
{       int duration, distance;
digitalWrite(trigPin, HIGH);
delay(1);
digitalWrite(trigPin, LOW);
// Medir la entrada de pulsos en el pin de echo.
duration = pulseIn(echoPin, HIGH);
// La distancia es la mitad de la duración dividida por 29.1 (de la hoja de datos)
distance = (duration/2) / 29.1;
// si la distancia es inferior a 20 cm y más de 0
if (distance <= 20 && distance >= 0) {
  servo.write(10);
    delay(3000);
} else {
servo.write(100);
}
// esperar 60 milisegundos para cerrar el bote automáticamente
delay(60);
}                                                                                                       
</p>
</pre>
</font>
</body>
</html>