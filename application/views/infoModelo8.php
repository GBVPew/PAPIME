<p></p>
<div class="center">
      <a href="<?php echo base_url();?>modelos/dron" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 8</title>
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
<h1><br></br>Practica 8: Entrada Analógica
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic8.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
1 Sensor Ultrasonico HC-SR04
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones                                                                                                        
</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
Todas las conexiones se realizan con el Arduino Apagado (desconectado de la PC o de cualquier fuente externa).
<b><br></br>Descripción del ejercicio:</b><br></br>

En muchos de nuestros proyectos, tenemos la necesidad de sensar nuestro entorno, saber si en frente hay un obstáculo y a que distancia se encuentra, el sensor HC-SR04 nos permite hacer eso.La variable t, tiene el tiempo que dura en llegar el eco del ultrasonido, el siguiente paso  es calcular la distancia entre el sensor ultrasónico y el objeto. Donde usaremos la formul V= D/T.<br></br>
Donde  Velocidad es la velocidad del sonido 340m/s, pero usaremos las unidades en cm/us pues trabajaremos en centímetros y microsegundos, tiempo es el tiempo que demora en llegar el ultrasonido al objeto y regresar al sensor, y la distancia recorrida es dos veces la distancia hacia el objeto.<br></br>
Finalmente enviamos serialmente el valor de la distancia y terminamos poniendo una pausa de 100ms, que es superior a los 60ms  recomendado por los datos técnicos del sensor,conecte el Arduino Uno y cargue el programa.
<br></br>
Después de esto el Arduino y sensor ya deben estar trabajando, para poder visualizar los datos vaya a herramientas y habrá el monitor serial.
<br></br>
En el monitor serial le aparecerán los valores de la distancia que sensa el HC-SR04, ponga un objeto al frente y varíe su distancia respecto al sensor y verifique que la distancia mostrada en el monitor serial sea la correcta.



 
<br>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
const int Trigger = 2;   //Pin digital 2 para el Trigger del sensor
const int Echo = 3;   //Pin digital 3 para el Echo del sensor

void setup() {
  Serial.begin(9600);//iniciailzamos la comunicación
  pinMode(Trigger, OUTPUT); //pin como salida
  pinMode(Echo, INPUT);  //pin como entrada
  digitalWrite(Trigger, LOW);//Inicializamos el pin con 0
}

void loop()
{

  long t; //timepo que demora en llegar el eco
  long d; //distancia en centimetros

  digitalWrite(Trigger, HIGH);
  delayMicroseconds(10);          //Enviamos un pulso de 10us
  digitalWrite(Trigger, LOW);
  
  t = pulseIn(Echo, HIGH); //obtenemos el ancho del pulso
  d = t/59;             //escalamos el tiempo a una distancia en cm
  
  Serial.print("Distancia: ");
  Serial.print(d);      //Enviamos serialmente el valor de la distancia
  Serial.print("cm");
  Serial.println();
  delay(100);          //Hacemos una pausa de 100ms
}
                                                                                                                                   
</p>
</pre>
</font>
</body>
</html>