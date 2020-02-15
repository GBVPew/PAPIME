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
     <p color="000000" size="10" face="Arial">LUZ Alarma led con sensor ultrasonico</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic9.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
           
            Para crear una alarma indicadora de distancia con el sensor hc-sr04. No obstante, 
            ustedes pueden cambiar la salida por un buzzer o bocina así que por este motivo la 
            actividad se puede modificar a su antojo.<br>
                <br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>1 1 Placa de pruebas (Protoboard)</li>
                      <li>Alambre para conexiones </li>
                      <li>1 LED </li>
                      <li>1Resistencia de 220Ω </li>
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
long dis; </br>
long tiem;</br>
int led1 = 11;</br>
void setup( ){</br>
Serial.begin(9600);
pinMode(10, OUTPUT); //salida del pulso generado por el sensor ultrasónico</br>
pinMode(9, INPUT);//entrada del pulso generado por el sensor ultrasónico</br>
pinMode(11, INPUT);//alarma de la distancia(encenderá el led)</br>
}</br>
void loop(){</br>
digitalWrite(10,LOW);//recibimiento del pulso.</br>
delayMicroseconds(5);</br>
digitalWrite(10, HIGH);//envió del pulso.</br>
delayMicroseconds(10);</br>
tiem=pulseIn(9, HIGH);//fórmula para medir el pulso entrante.</br>
dis= long(0.017*tiem);//fórmula para calcular la distancia del sensor ultrasónico.</br>
if(dis>10){ //comparativo para la alarma se ingresa la distancia en la que encenderá o apagara.</br>
digitalWrite(11, HIGH);</br>
}</br>
else</br>
{</br>
digitalWrite(11,LOW);</br>
}</br>
Serial.println("LA DISTANCIA MEDIDA ES:");</br>
Serial.println(dis);</br>
Serial.println("cm");</br>
delay(500);       </br>                                                             
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>