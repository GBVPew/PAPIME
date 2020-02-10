<p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/raspberry" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 20</title>
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
<h1><br></br>Practica 20: Sistema de Alarma con sensor PIR
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic20.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Sensor PIR
1 Bocina 5V
1 Reley de 5V
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones                                                                                                        
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
En esta practica  vamos a trabajar con un sensor PIR (passive IR), que nos va a dar mucho juego a la hora de realizar proyectos donde necesitemos detectar movimiento de personas o animales. Los sensores PIR o sensores de infrarrojo pasivo, miden la luz infrarroja emitida por los objetos situados en el campo de visión del sensor.<br>

Estos sensores son muy utilizados en alarmas para la detección de intrusión en viviendas, pero también se están aplicando en instalaciones domóticas para por ejemplo encender la luz de las escaleras cuando alguien entra a un edificio o en los aseos de muchos restaurantes.
<br><br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
#define PIR 2 //Establece el pin 2 para el sensor PIR
#define rele 3 //Establece el pin 3 para el relé
 
int tiempo = 5000; //Tiempo que suena la alarma
boolean sensor; //Variable que almacena el estado del sensor (activado/desactivado)
 
void setup()
{
  pinMode(PIR,INPUT); //Establece el pin del sensor como entrada
  pinMode(rele,OUTPUT); //Establece el pin del relé como salida
}
 
void loop()
{
  sensor=digitalRead(PIR); //Guarda el estado del sensor en la variable
  if(sensor==HIGH) //Si el sensor es activado entra en el bucle
  {
    digitalWrite(rele,HIGH); //Activa la alarma
    delay(tiempo); //Espera el tiempo definido en la variable "tiempo"
    digitalWrite(rele,LOW); //Desconecta la alarma
  }
}                                                                                                                                
</p>
</pre>
</font>
</body>
</html>