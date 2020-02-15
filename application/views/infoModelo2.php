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
     <p color="000000" size="10" face="Arial"> Secuencia Básica de 3 LEDs.</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic2.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  

            En esta practica  vamos a trabajar con un sensor PIR (passive IR), que nos va a dar mucho Se trata de encender y apagar 3 LEDs colocados en las salidas 6, 7 y 8 (PIN6, PIN7 y
            PIN8) con una cadencia de 200 ms. Las variables asignadas a cada led son ledPin1,
            ledPin2 y ledPin3.
<br><br>

            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>3 LEDs</li>
                      <li>3 Resistencias de 220Ω </li>
                      <li>1 Placa de pruebas (Protoboard)</li>
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
int ledPin1 = 6; // Define las sali das de los LED´s </br>
int ledPin2 = 7; </br>
int ledPin3 = 8; </br>
void setup() { // Configura las SALIDAS </br>
pinMode(ledPin1, OUTPUT); // declarar LEDs como SALIDAS </br>
pinMode(ledPin2, OUTPUT); </br>
pinMode(ledPin3, OUTPUT); </br>
digitalWrite(ledPin1, LOW); // Apaga los LEDs </br>
digitalWrite(ledPin2, LOW); </br>
digitalWrite(ledPin3, LOW); </br>
} </br>
void loop(){ //Bucle de Funcionamiento </br>
digitalWrite(ledPin1, HIGH); // Apaga y enciende los leds  </br>cada 200 ms </br>
delay(200); </br>
digitalWrite(ledPin1, LOW); </br>
digitalWrite(ledPin2, HIGH); </br>
delay(200); </br>
digitalWrite(ledPin2, LOW); </br>
digitalWrite(ledPin3, HIGH); </br>
delay(200); </br>
digitalWrite(ledPin3, LOW); </br>
                 }    </br>
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>