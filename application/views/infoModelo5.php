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
     <p color="000000" size="10" face="Arial">Construcción de un indicador de nivel con
diodos LEDs.</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic5.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            
Construir u indicador de nivel que sea capaz de medir el valor de una señal de
entrada generada por un potenciómetro desde una entrada analógica.
Se establecerán 3 diodos Led conectados a las salidas PIN6, PIN7 y PIN8. La entrada la
conectaremos en la entrada analógica PIN 1 (analog IN1)
</br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>3 Leds </li>
                      <li>3 Resistencias de 220Ω</li>
                      <li>1 Potenciometro de 10KΩ </li>
                      <li>1 Placa de pruebas (Protoboard)  </li>
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
int ledPin1 = 8; // Selección de PIN para cada LED</br>
int ledPin2 = 7;</br>
int ledPin3 = 6;</br>
int inPin= 1; // selecciona la entrada analógica 1 (potenciómetro)</br>
</br>
void turn_off() { //Apaga los 3 LEDS</br>
digitalWrite(ledPin1, LOW);</br>
digitalWrite(ledPin2, LOW);</br>
digitalWrite(ledPin3, LOW);</br>
}</br>
void setup() {</br>
pinMode(ledPin1, OUTPUT); // declara LEDs como salidas
pinMode(ledPin2, OUTPUT);</br>
pinMode(ledPin3, OUTPUT);</br>
turn_off(); //</br>
}</br>
void loop(){</br>
int val;</br>
val= analogRead(inPin); // lee el valor de la señal analógica</br>
turn_off();apaga los tres LED</br>
// Si el valor de la señal medida es > 256 enciende LED del PIN8</br>
if (val>= 256) digitalWrite(ledPin1, HIGH);</br>
// Si el valor de la señal medida es > 512 enciende LED del PIN7</br>
if (val>= 512) digitalWrite(ledPin2, HIGH);
// Si el valor de la señal medida es > 758 enciende LED del PIN6</br>
if (val>= 768) digitalWrite(ledPin3, HIGH);</br>
}                                                 </br>
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>