<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <style>


    td{
      font-size: 15px;
      line-height: 20px;
      padding: 30px 100px 30px 100px;
      text-align: justify;
      vertical-align: top;
      width: 50%;
  }
  

 

 </style>
</head>

    <body>

      <center style="font-size: 30px ">
     <p color="000000" size="10" face="Arial">Bote de Basura Inteligente</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic19.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            Con un sensor Ultrasonico y un Servomotor podemos hacer algo tan sencillo como un bote de basura inteligente. Automatizando un poco nuestro hogar o oficina.
                <br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li> 1 Arduino UNO
                      </li>
                      <li> 1 Placa de pruebas (Protoboard)  
                      </li>
                      <li> 1 Alambre para conexiones   
                      </li>
                      <li> 1 Sensor Ultrasonico HC-SR04 
                      </li>
                      <li> 1 Servomotor
                      </li>
                   </ol>                                   
                </td>
                
            </tr>
        </table>
<center>


<html lang="es">
<head>
    <meta charset="utf-8">
    <style>
    #scroll{
       padding-top: 20px ;
        height:200px;
        width:600px;
        overflow-y:scroll;
        overflow-x:hidden;
    }
    </style>
</head>
 
<body>
   <p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/bobina" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>  
      <p></p>                 
  </div> 
 <div id="scroll">
  <div align="left">
                <p color="000000" size="4" face="Arial" LINE-HEIGHT S=5px>
#include<Servo.h>
Servo servo;
int const trigPin = 6; //pin trig del sensor
int const echoPin = 5; //pin echo del sensor
void setup()
{
pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
    servo.attach(3);
}
void loop()
{       int duration, distance;
digitalWrite(trigPin, HIGH);
delay(1);
digitalWrite(trigPin, LOW);
// Medir la entrada de pulsos en el pin de echo.
duration = pulseIn(echoPin, HIGH);
// La distancia es la mitad de la duración dividida por 29.1 (de la hoja de datos)
distance = (duration/2) / 29.1;
// si la distancia es inferior a 20 cm y más de 0
if (distance <= 20 && distance >= 0) {
  servo.write(10);
    delay(3000);
} else {
servo.write(100);
}
// esperar 60 milisegundos para cerrar el bote automáticamente
delay(60);
}                                                                              
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>