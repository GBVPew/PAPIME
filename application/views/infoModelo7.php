<p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/control2" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 7</title>
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
<h1><br></br>Practica 7: Sensor de Fuerza.
<br></br></h1><img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic7.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones 
1 Led
1 Zumbador                                                                                                      
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Convertiremos un zumbador piezoeléctrico en un sensor de presión o fuerza
utilizando este como sensor de entrada en uno de los pines de entrada analógica de
Arduino (PIN 2).

<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
int ledPin = 13;
int piezoPin = 2;
int THRESHOLD = 1; // Configura valor mínimo para que se encienda la salida
PIN13
int val = 0; // variable que almacena el valor leído por el sensor
int t = 0; // valor del intervalo de medida
void setup() {
 pinMode(ledPin, OUTPUT);
 Serial.begin(19200);
 Serial.println("ready"); // indicador de espera
}
void loop() {
 digitalWrite(ledPin,LOW); // indicador de reposo (esperando)
 val = analogRead(piezoPin); // lectura de valor del piezoeléctrico
 if( val > THRESHOLD ) { // si el valor leído es superior al mínimo establecido
 digitalWrite(ledPin, HIGH); // activa salida 13
 t = 0;
 while(analogRead(piezoPin) > THRESHOLD) {
 t++;
 } // wait for it to go LOW (espera con una pequeña histéresis)
 if(t>100) { // escribe en el puerto
 Serial.print("knock! ");
 //Serial.println(t);
 }
 }
}                                                                                                                                       
</p>
</pre>
</font>
</body>
</html>