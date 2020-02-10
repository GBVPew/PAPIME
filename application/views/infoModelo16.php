<p></p>
<div class="center">
      <a href="<?php echo base_url();?>modelos/raspberry" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 16</title>
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
<h1><br></br>Practica 16: Control de LLenado
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic16.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
2 Resistencias de 220Ω
2 Resistencias de 1KΩ
2 Interruptores
1 Relay de 5v
1 Sensor de nivel de agua para arduino
1 Bomba de agua para arduino
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones                                                                                                        
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Utilizando un sensor de nivel de agua, una bomba, un relé, un par de botones y un par de LEDs realizamos un llenado controlado de un recipiente,pecera,algun sistema de agua.
<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
const int ledNivel = 10 ;
const int ledAuto = 11 ;
const int botonLlenadoManual = 6;
const int botonLlenadoAutomatico = 5;
const int bomba = 7;
const int sensor = 0;
const int limite = 380;

int encendido = 0;

void setup()
{   
	Serial.begin(9600);  
	pinMode( ledNivel, OUTPUT) ;
	pinMode( ledAuto, OUTPUT) ;
	pinMode( botonLlenadoManual  , INPUT) ;
	pinMode( botonLlenadoAutomatico  , INPUT) ;
	pinMode(bomba, OUTPUT);  
}

void loop()
{
	int valorSensor = analogRead(sensor); // obtenemos la medida del sensor
	Serial.println(valorSensor);
	if(valorSensor < limite){
		digitalWrite( ledNivel, HIGH);
	}else{
		digitalWrite( ledNivel, LOW) ;  
	}
	
	if(digitalRead(botonLlenadoManual) == HIGH){ // modo manual
		digitalWrite( bomba, HIGH) ;  
    }else{
		digitalWrite( bomba, LOW) ;  
		if(digitalRead(botonLlenadoAutomatico) == HIGH){
			encendido = !encendido;
		}
		digitalWrite( ledAuto, encendido) ;
		if(encendido == 1){
			if(valorSensor < limite){
				digitalWrite( bomba, HIGH) ;  
			}else{
				digitalWrite( bomba, LOW) ;  
			}
		}else{
			digitalWrite( bomba, LOW) ;  
		}
    }
	
    delay(500);
}                                                                                                                                   
</p>
</pre>
</font>
</body>
</html>