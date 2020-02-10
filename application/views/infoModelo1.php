<p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/arduino" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir al Modelo</a>                   
  </div>

  <!DOCTYPE html>
<html>
<head>
	<title> Practica 1 </title>
<style>
	
p.ex1 {
 
  padding: 0px 150px 0px;
}
p.ex2 {
  border: 7px solid rgba(177, 220, 251, 1); 
  padding: 0px 150px 0px;
}

</style>
</head>
<body >
<font color="#b1dcfb"face="Arial">
<center>
<h1><br></br>Practica 1: Luz intermitente <br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic1.png')?>">
</center>
<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Diodo Led
1 Resistencia 220Ω
                                                                                                          
</p>
</pre>

<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>	
Un ejercicio básico que consiste en encender y apagar un led que conectamos en el PIN 13  y a el pin GND(Tierra) del Arduino . El tiempo de encendido y apagado es de 1 segundo.
</p>
      
<p class="ex1">
Obsérvese que se ha colocado el diodo led sin resistencia en serie dado que el PIN13 de Arduino ya lleva incorporada una resistencia interior, en el caso de colocar el diodo LED en otra salida deberíamos colocar una resistencia de al entre 220 y 500 ohmios dependiendo del consumo de corriente del diodo.<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>

</p>

<pre>

<p class="ex2"><font color="#000000" size="4" face="Arial">
int ledPin = 13; // Definición de la salida en el PIN 13
void setup() //Configuración
{
pinMode(ledPin, OUTPUT); // designa la salida digital al PIN 13
}
void loop() // bucle de funcionamiento
{
digitalWrite(ledPin, HIGH); // activa el LED
delay(1000); // espera 1 seg. (tiempo encendido)
digitalWrite(ledPin, LOW); // desactiva el LED
delay(1000); // espera 1 seg. (tiempo apagado)
}                                                                                                                              
</p>
</pre>


</body>
</html>