<p></p>
<div class="center">
      <a href="<?php echo base_url();?>modelos/raspberry" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 18</title>
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
<h1><br></br>Practica 18: Sistema de Alarma con un sensor Ultrasonico
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic18.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Placa de pruebas (Protoboard) 
4 Resistensias de 220Ω
1 Zumbador
3 LEDs
1 Sensor Ultrasonico HC-SR04
1 Alambre para conexiones

                                                                                                  
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Pequeño ejercicio sobre hacer un sistema de alarma con un sensor Ultrasonico ya que este detecta quien se acerca esto es muy practico y facil de hacer.

<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
  
#define trigPin 2
#define echoPin 3
#define LEDlampRed 4
#define LEDlampYellow 5
#define LEDlampGreen 6
#define soundbuzzer 7
int sound = 500;

void setup() {
Serial.begin (9600);
pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
pinMode(LEDlampRed, OUTPUT);
pinMode(LEDlampYellow, OUTPUT);
pinMode(LEDlampGreen, OUTPUT);
pinMode(soundbuzzer, OUTPUT);
}
void loop() {
long durationindigit, distanceincm;
digitalWrite(trigPin, LOW);
delayMicroseconds(2);
digitalWrite(trigPin, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin, LOW);
durationindigit = pulseIn(echoPin, HIGH);
distanceincm = (durationindigit/5) / 29.1;

if (distanceincm < 50) {
digitalWrite(LEDlampGreen, HIGH);
}
else {
digitalWrite(LEDlampGreen, LOW);
}

if (distanceincm < 20) {
digitalWrite(LEDlampYellow, HIGH);
}
else {
digitalWrite(LEDlampYellow,LOW);
}
if (distanceincm < 5) {
digitalWrite(LEDlampRed, HIGH);
sound = 1000;
}
else {
digitalWrite(LEDlampRed,LOW);
}

if (distanceincm > 5 || distanceincm <= 0){
Serial.println("Outside the permissible range of distances");
noTone(soundbuzzer);
}
else {
Serial.print(distanceincm);
Serial.println(" cm");
tone(soundbuzzer, sound);
}

delay(300);
}
                                                                                                          
</p>
</pre>
</font>
</body>
</html>