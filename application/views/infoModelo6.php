<p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/control1" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 6</title>
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
<h1><br></br>Practica 6: Sensor de Luz (LDR)
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic6.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones  
1 LDR (Fotoresistencia)
1 Resistencia de 5kΩ
1 LED

</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Un LDR es una resistencia variable, que varia su valor dependiendo de la cantidad de
luz que incide sobre su superficie. Cuanta mas intensidad de luz incide en la superficie
de la LDR menor será su resistencia y cuanto menos luz incide mayor será la
resistencia. Suelen ser utilizados como sensores de luz ambiental o como una fotocélula
que activa un determinado proceso en ausencia o presencia de luz. Un sensor de luz se compone de una LDR como parte de un divisor de tensión resistivo. <br><br>
El circuito consta de un divisor de tensión formado por la LDR y la resistencia de 5kΩ. 
</br>
</br>
<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
/* Sensor de Luz LDR
* ------------------
*
* Enciende y apaga un LED (light emitting diode) conectado al pin digital #13. 
* La cantidad de tiempo que el LED estará encendido y apagado depende del
* valor obtenido de analogRead().
* La salida del sensor de luz o divisor de tensión, está conectado
* a la entrada del pin 3, por lo que
* a más luz, el parpadeo del LED será menor y a menos luz el parpadeo del LED
mayor.
* (sensor de oscuridad)

int LightPin = 3; // selecciona el pin de entrada para el sensor de luz
int ledPin = 13; // selecciona el pin para el LED
int val = 0; // variable para almacenar el valor capturado desde el sensor
void setup() {
 pinMode(ledPin, OUTPUT); // declara el ledPin en modo salida
}
void loop() {
 val = analogRead(LightPin); //lee el valor del sensor
 digitalWrite(ledPin, HIGH); // enciende el LED
 delay(val); // detiene el programa por un tiempo
 digitalWrite(ledPin, LOW); // apaga el LED
 delay(val); // detiene el programa por un tiempo
}                            
</p>
</pre>
</font>
</body>
</html>