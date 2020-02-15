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
     <p color="000000" size="10" face="Arial">Sensor de Luz.</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic6.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
          <b>Descripción del ejercicio:</b><br></br>
Un LDR es una resistencia variable, que varia su valor dependiendo de la cantidad de
luz que incide sobre su superficie. Cuanta mas intensidad de luz incide en la superficie
de la LDR menor será su resistencia y cuanto menos luz incide mayor será la
resistencia. Suelen ser utilizados como sensores de luz ambiental o como una fotocélula
que activa un determinado proceso en ausencia o presencia de luz. Un sensor de luz se compone de una LDR como parte de un divisor de tensión resistivo. <br><br>
El circuito consta de un divisor de tensión formado por la LDR y la resistencia de 5kΩ. 
</br>
</br>

            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>1 Placa de pruebas (Protoboard)  </li>
                      <li>1 Alambre para conexiones </li>
                      <li>1 LDR (Fotoresistencia)</li>
                      <li>1 Resistencia de 5kΩ</li>
                      <li>1 LED</li>
                      
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
/* Sensor de Luz LDR</br>
* ------------------</br>
*</br>
* Enciende y apaga un LED (light emitting diode) conectado al pin digital #13.</br> 
* La cantidad de tiempo que el LED estará encendido y apagado depende del</br>
* valor obtenido de analogRead().</br>
* La salida del sensor de luz o divisor de tensión, está conectado</br>
* a la entrada del pin 3, por lo que</br>
* a más luz, el parpadeo del LED será menor y a menos luz el parpadeo del LED</br>
mayor.</br>
* (sensor de oscuridad)</br>

int LightPin = 3; // selecciona el pin de entrada para el sensor de luz</br>
int ledPin = 13; // selecciona el pin para el LED</br>
int val = 0; // variable para almacenar el valor capturado desde el sensor</br>
void setup() {</br>
 pinMode(ledPin, OUTPUT); // declara el ledPin en modo salida</br>
}</br>
void loop() {</br>
 val = analogRead(LightPin); //lee el valor del sensor</br>
 digitalWrite(ledPin, HIGH); // enciende el LED</br>
 delay(val); // detiene el programa por un tiempo</br>
 digitalWrite(ledPin, LOW); // apaga el LED</br>
 delay(val); // detiene el programa por un tiempo</br>
}                   </br>                                          
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>