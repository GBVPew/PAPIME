<p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/bobina" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 2</title>
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
<h1><br></br>Practica 2: Secuencia Básica de 3 LEDs <br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic2.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
3 LEDs
3 Resistencias de 220Ω
1 Placa de pruebas (Protoboard)                                                                                                          
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Se trata de encender y apagar 3 LEDs colocados en las salidas 6, 7 y 8 (PIN6, PIN7 y
PIN8) con una cadencia de 200 ms. Las variables asignadas a cada led son ledPin1,
ledPin2 y ledPin3.<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
 
int ledPin1 = 6; // Define las salidas de los LED´s
int ledPin2 = 7;
int ledPin3 = 8;
void setup() { // Configura las SALIDAS
pinMode(ledPin1, OUTPUT); // declarar LEDs como SALIDAS
pinMode(ledPin2, OUTPUT);
pinMode(ledPin3, OUTPUT);
digitalWrite(ledPin1, LOW); // Apaga los LEDs
digitalWrite(ledPin2, LOW);
digitalWrite(ledPin3, LOW);
}
void loop(){ //Bucle de Funcionamiento
digitalWrite(ledPin1, HIGH); // Apaga y enciende los leds cada 200 ms
delay(200);
digitalWrite(ledPin1, LOW);
digitalWrite(ledPin2, HIGH);
delay(200);
digitalWrite(ledPin2, LOW);
digitalWrite(ledPin3, HIGH);
delay(200);
digitalWrite(ledPin3, LOW);
                 }                                                                                                                                                 
</p>
</pre>
</font>
</body>
</html>