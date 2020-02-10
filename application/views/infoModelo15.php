<p></p>
<div class="center">
      <a href="<?php echo base_url();?>modelos/raspberry" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 15</title>
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
<h1><br></br>Practica 15: Sensor de temperaturacon sensor NTC
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic15.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Placa de pruebas (Protoboard)                                                                  
1 NTC sensor de temperatura
1 Resistencia 1kΩ
1 Alambre para conectar

</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
En este ejemplo se trata de medir la temperatura desde el PIN3 de entrada analógica y
ver si este valor supera un valor dado de 500 (medida absoluta) si supera este valor
activará la salida digital PIN13 y si no la apagara. Además queremos que se muestre en
el monitor de salida del IDE Arduino el valor leído. D sensor utilizaremos un sensor del
tipo NTC.<br></br>
Un NTC o termistor NTC es una resistencia variable, que varia su valor dependiendo de
la temperatura ambiente. Cuanta mas temperatura menor será su resistencia y cuanto
menos temperatura mayor será la resistencia. Suelen ser utilizados en alarmas. 
<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
int led=13;
int ntc=3;
int medida=0; 
//variable que guarda el límite de temperatura al que se activa el ventilador
int nivel=500;
void setup(){
 pinMode(led,OUTPUT);
 pinMode(motor,OUTPUT);
 beginSerial(9600);
}
//procedimiento que envía al puerto serie, para ser leído en el monitor,
void monitoriza(){
 printInteger(medida); //el valor de la señal de la NTC en la entrada analógica
 printString(" ");
 delay(100); //para evitar saturar el puerto serie
}
void loop(){
 medida=analogRead(ntc);
 monitoriza();
 if(medida>nivel){ //si la señal del sensor supera el nivel marcado:
 digitalWrite(led,HIGH); //se enciende un aviso luminoso

 }
 else{ // si la señal está por debajo del nivel marcado
 digitalWrite(led,LOW);
 }
}                                                                                                                   
</p>
</pre>
</font>
</body>
</html>