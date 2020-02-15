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
     <p color="000000" size="10" face="Arial">Entrada Analógica</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic8.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
          
En muchos de nuestros proyectos, tenemos la necesidad de sensar nuestro entorno, saber si en frente hay un obstáculo y a que distancia se encuentra, el sensor HC-SR04 nos permite hacer eso.La variable t, tiene el tiempo que dura en llegar el eco del ultrasonido, el siguiente paso  es calcular la distancia entre el sensor ultrasónico y el objeto. Donde usaremos la formul V= D/T.<br></br>
Donde  Velocidad es la velocidad del sonido 340m/s, pero usaremos las unidades en cm/us pues trabajaremos en centímetros y microsegundos, tiempo es el tiempo que demora en llegar el ultrasonido al objeto y regresar al sensor, y la distancia recorrida es dos veces la distancia hacia el objeto.<br></br>
Finalmente enviamos serialmente el valor de la distancia y terminamos poniendo una pausa de 100ms, que es superior a los 60ms  recomendado por los datos técnicos del sensor,conecte el Arduino Uno y cargue el programa.
<br></br>
Después de esto el Arduino y sensor ya deben estar trabajando, para poder visualizar los datos vaya a herramientas y habrá el monitor serial.
<br></br>
En el monitor serial le aparecerán los valores de la distancia que sensa el HC-SR04, ponga un objeto al frente y varíe su distancia respecto al sensor y verifique que la distancia mostrada en el monitor serial sea la correctas.<br></br>

            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>1  Sensor Ultrasonico HC-SR04</li>
                      <li>1 Placa de pruebas (Protoboard)</li>
                      <li>1 Alambre para conexiones </li>
                      
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
face="Arial"> </br>
const int Trigger = 2;   //Pin digital 2 para el Trigger del sensor</br>
const int Echo = 3;   //Pin digital 3 para el Echo del sensor</br>

void setup() {</br>
  Serial.begin(9600);//iniciailzamos la comunicación</br>
  pinMode(Trigger, OUTPUT); //pin como salida</br>
  pinMode(Echo, INPUT);  //pin como entrada</br>
  digitalWrite(Trigger, LOW);//Inicializamos el pin con 0</br>
}</br>

void loop()</br>
{</br>

  long t; //timepo que demora en llegar el eco</br>
  long d; //distancia en centimetros</br>

  digitalWrite(Trigger, HIGH);</br>
  delayMicroseconds(10);          //Enviamos un pulso de 10us</br>
  digitalWrite(Trigger, LOW);</br>
  
  t = pulseIn(Echo, HIGH); //obtenemos el ancho del pulso</br>
  d = t/59;             //escalamos el tiempo a una </br>distancia en cm
  
  Serial.print("Distancia: ");</br>
  Serial.print(d);      //Enviamos serialmente el valor de la distancia</br>
  Serial.print("cm");</br>
  Serial.println();</br>
  delay(100);          //Hacemos una pausa de 100ms</br>
}                                                           
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>