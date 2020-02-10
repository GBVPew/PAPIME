<p></p>s
<div class="center">
      <a href="<?php echo base_url();?>modelos/osciloscopio" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 
  <!DOCTYPE html>
<html>
<head>
	<title>Practica 10</title>
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
<h1><br></br>Practica 10: Control de motores 5v con L293D(Puente H)
<br></br></h1>
<img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic10.png')?>">
</center>




<pre>
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Materiales:</b>

1 Arduino UNO
2 Motores de 5v
1 Placa de pruebas (Protoboard)  
1 Alambre para conexiones   
1 Puente H(L293D)
4 baterias AA
1 conector de baterias AA

</p>
</pre>

    
<p class="ex1"><font color="#000000" size="4" face="Arial">
<b>Descripción del ejercicio:</b><br></br>
Obtendremos conocimiento sobre  como controlar velocidad y sentido de giro de motores CC utilizando una placa Arduino y un puente H (L293D).
<br>
<br>
<center>
<img src="imagenes/arduino/practic10.1.png">
</center>
<br>
El codigo que usaremos sera el siguiente:
</br>
</br>
</p>

<pre>
<p class="ex2"><font color="#000000" size="4" face="Arial">
/*

ARDUINO   L293D(Puente H)        
  5          10
  6          15
  9          7
  10         2
  5V         1, 9, 16
  GND        4, 5, 12, 13
  
  El motor LEFT se conecta a los pines 3 y 6 del Puente H
  El motor RIGHT se conecta a los pines 11 y 14 del Puente H
  
  La fuente de alimentacion de los Motores se conecta a tierra y
  el positivo al pin 8 del puente H.  

*/
//LEFT MOTOR
int leftA = 9; 
int leftB = 10;
//RIGHT MOTOR 
int rightA = 5; 
int rightB = 6; 

int vel = 255; // Velocidad de los motores (0-255)

void setup()  { 
  pinMode(rightA, OUTPUT);
  pinMode(rightB, OUTPUT);
  pinMode(leftA, OUTPUT);
  pinMode(leftB, OUTPUT);
  Serial.begin(9600);
  analogWrite(rightA, 0); 
  analogWrite(rightB, 0);
  analogWrite(leftA, 0); 
  analogWrite(leftB, 0);
 } 
 
void loop()  { 
    if (Serial.available()) {
    char  a = Serial.read();
      // STOP  
          if (a =='X'||a =='x'){    
             Serial.println("STOP");
              analogWrite(rightA, 0); 
              analogWrite(rightB, 0);
              analogWrite(leftA, 0); 
              analogWrite(leftB, 0);   
          }    
      //MOTOR left FORWARDS
          if (a =='W'||a =='w'){
            Serial.println("MOTOR left FORWARDS");
              analogWrite(rightA, 0); 
              analogWrite(rightB, 0);
              analogWrite(leftA, vel); 
              analogWrite(leftB, 0);
          }
      //MOTOR left BACKWARDS
          if (a =='A'||a =='a'){
            Serial.println("MOTOR left BACKWARDS");
              analogWrite(rightA, 0); 
              analogWrite(rightB, 0);
              analogWrite(leftA, 0); 
              analogWrite(leftB, vel);
          } 
      //MOTOR right FORWARDS
          if (a =='E'||a =='e'){
            Serial.println("MOTOR right FORWARDS");
              analogWrite(rightA, vel); 
              analogWrite(rightB, 0);
              analogWrite(leftA, 0); 
              analogWrite(leftB, 0); 
          }
            
      //MOTOR right BACKWARDS
          if (a =='S'||a =='s'){
            Serial.println("MOTOR right BACKWARDS");
              analogWrite(rightA, 0); 
              analogWrite(rightB, vel);
              analogWrite(leftA, 0); 
              analogWrite(leftB, 0); 
          }
      
      //MOTOR left & right FORWARDS
          if (a =='T'||a =='t'){
            Serial.println("MOTOR left & right FORWARDS");
              analogWrite(rightA, vel); 
              analogWrite(rightB, 0);
              analogWrite(leftA, vel); 
              analogWrite(leftB, 0); 
          }
      //MOTOR left & right BACKWARDS
          if (a =='F'||a =='f'){
            Serial.println("MOTOR left & right BACKWARDS");
              analogWrite(rightA, 0); 
              analogWrite(rightB, vel);
              analogWrite(leftA, 0); 
              analogWrite(leftB, vel); 
          }
    }
  }                                
</p>
</pre>
</font>
</body>
</html>