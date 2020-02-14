<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <style>
    td{
      font-size: 15px;
      line-height: 20px;
      padding: 150px;
      text-align: justify;
      vertical-align: top;
      width: 50%;
  }
    }

 </style>
</head>

    <body>

      <center>
     <br></br><p color="000000" size="7" face="Arial">LUZ INTERMITENTE</p><br></br>
      <img class="responsive-img" src="<?php echo base_url('assetC:\xampp\htdocs\SUAC\A3.phps/img/arduino/practic1.png')?>"width="200"
     height="200">
      </center>
        <table>
            <tr>
                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>1 Diodo Led</li>
                      <li>1 Resistencia 220Ω</li>
                   </ol>                                   
                </td>
                <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            Un ejercicio básico que consiste en encender y apagar un led que conectamos en el PIN 13  y a el pin GND(Tierra) del Arduino . El tiempo de encendido y apagado es de 1 segundo. <br></br>           
                  
          
            Obsérvese que se ha colocado el diodo led sin resistencia en serie dado que el PIN13 de Arduino ya lleva incorporada una resistencia interior, en el caso de colocar el diodo LED en otra salida deberíamos colocar una resistencia de al entre 220 y 500 ohmios dependiendo del consumo de corriente del diodo.<br>
                <br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 

              </td>

            </tr>
        </table>
<center>
<div style="
            background : #ffffff;
            padding : 10px;
            width : 700px;
            height : 200px;
            overflow : auto; ">
<pre>
                <div align="center">
                <p color="000000" size="4" face="Arial">
                      int ledPin = 13; // Definición de la salida en el PIN 13
                      void setup() //Configuración
                      {
                      pinMode(ledPin, OUTPUT); // designa la salida digital al PIN 13
                      }
                      void loop() // bucle de funcionamiento
                      {
                      digitalWrite(ledPin, HIGH); // activa el LED
                      delay(1000); // espera 1 seg. (tiempo encendido)
                      digitalWrite(ledPin, LOW); // desactiva el LED
                      delay(1000); // espera 1 seg. (tiempo apagado)
                      }                                                                                                                              
                </p>
   </div>
 </pre>                                                                                              
</center>
       

    </body>

    <p></p>
  <div class="center">
      <a href="<?php echo base_url();?>modelos/bobina" class="waves-effect waves-light btn blue-grey lighten-2 center ">Ir a modelo</a>                   
  </div> 

<p></p>

</html>