<p></p>
<div class="center">
      <a href="<?php echo base_url();?>modelos/celular" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 5</title>
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
<h1><br></br>Practica 5: Construcción de un indicador de nivel con
diodos LEDs
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic5.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
3 Leds
3 Resistencias de 220Ω
1 Potenciometro de 10KΩ
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones                                                                                                        
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Construir u indicador de nivel que sea capaz de medir el valor de una señal de
entrada generada por un potenciómetro desde una entrada analógica.
Se establecerán 3 diodos Led conectados a las salidas PIN6, PIN7 y PIN8. La entrada la
conectaremos en la entrada analógica PIN 1 (analog IN1)

<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
int ledPin1 = 8; // Selección de PIN para cada LED
int ledPin2 = 7;
int ledPin3 = 6;
int inPin= 1; // selecciona la entrada analógica 1 (potenciómetro)

void turn_off() { //Apaga los 3 LEDS
digitalWrite(ledPin1, LOW);
digitalWrite(ledPin2, LOW);
digitalWrite(ledPin3, LOW);
}
void setup() {
pinMode(ledPin1, OUTPUT); // declara LEDs como salidas
pinMode(ledPin2, OUTPUT);
pinMode(ledPin3, OUTPUT);
turn_off(); //
}
void loop(){
int val;
val= analogRead(inPin); // lee el valor de la señal analógica
turn_off();apaga los tres LED
// Si el valor de la señal medida es > 256 enciende LED del PIN8
if (val>= 256) digitalWrite(ledPin1, HIGH);
// Si el valor de la señal medida es > 512 enciende LED del PIN7
if (val>= 512) digitalWrite(ledPin2, HIGH);
// Si el valor de la señal medida es > 758 enciende LED del PIN6
if (val>= 768) digitalWrite(ledPin3, HIGH);
}                                                                                                                          
</p>
</pre>
</font>
</body>
</html>