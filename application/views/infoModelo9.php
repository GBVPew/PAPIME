<p></p>s
<div class="center">
      <a href="<?php echo base_url();?>modelos/microprocesador" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 9</title>
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
<h1><br></br>Practica 9: Alarma led con sensor ultrasonico
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic9.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones 
1 LED
1Resistencia de 220Ω                                                                                                       
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Para crear una alarma indicadora de distancia con el sensor hc-sr04. No obstante, ustedes pueden cambiar la salida por un buzzer o bocina así que por este motivo la actividad se puede modificar a su antojo.
<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
long dis;
long tiem;
int led1 = 11;
void setup( ){
Serial.begin(9600);
pinMode(10, OUTPUT); //salida del pulso generado por el sensor ultrasónico
pinMode(9, INPUT);//entrada del pulso generado por el sensor ultrasónico
pinMode(11, INPUT);//alarma de la distancia(encenderá el led)
}
void loop(){
digitalWrite(10,LOW);//recibimiento del pulso.
delayMicroseconds(5);
digitalWrite(10, HIGH);//envió del pulso.
delayMicroseconds(10);
tiem=pulseIn(9, HIGH);//fórmula para medir el pulso entrante.
dis= long(0.017*tiem);//fórmula para calcular la distancia del sensor ultrasónico.
if(dis>10){ //comparativo para la alarma se ingresa la distancia en la que encenderá o apagara.
digitalWrite(11, HIGH);
}
else
{
digitalWrite(11,LOW);
}
Serial.println("LA DISTANCIA MEDIDA ES:");
Serial.println(dis);
Serial.println("cm");
delay(500);                                                                                                                                       
</p>
</pre>
</font>
</body>
</html>