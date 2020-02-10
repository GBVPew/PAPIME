<p></p>
<div class="center">
      <a href="<?php echo base_url();?>modelos/celdaSolar" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 4</title>
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
<h1><br></br>Practica 4: Entrada Analógica
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic4.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Potenciometro de 10KΩ
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones                                                                                                        
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Se trata de configurar un canal de entrada analógico pin 0 y enviar el valor leído al PC
para visualizarlo.
<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
/* Entrada Analógica */
int potPin = 0; // selecciona el pin de entrada para colocar el potenciómetro
int val = 0; // variable para almacenar el valor leído por la entrada analógica
void setup() {
 beginSerial(9600);
}
void loop() {
 val = analogRead(potPin); // lee el valor del canal de ENTRADA analógica
 printInteger(val); // Envía al PC el valor analógico leído y lo muestra en pantalla
 serialWrite(10);
 delay(100);
}                                                                                                                                         
</p>
</pre>
</font>
</body>
</html>