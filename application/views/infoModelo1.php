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
     <p color="000000" size="10" face="Arial">LUZ INTERMITENTE</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic1.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            Un ejercicio básico que consiste en encender y apagar un led que conectamos en el PIN 13  y a el pin GND(Tierra) del Arduino . El tiempo de encendido y apagado es de 1 segundo. <br></br>           
                  
          
            Obsérvese que se ha colocado el diodo led sin resistencia en serie dado que el PIN13 de Arduino ya lleva incorporada una resistencia interior, en el caso de colocar el diodo LED en otra salida deberíamos colocar una resistencia de al entre 220 y 500 ohmios dependiendo del consumo de corriente del diodo.<br>
                <br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>1 Diodo Led</li>
                      <li>1 Resistencia 220Ω</li>
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

                      int ledPin = 13; // Definición de la salida en el PIN 13<br/>
                      void setup() //Configuración <br/>
                      {<br/>
                      pinMode(ledPin, OUTPUT); // designa la salida digital al PIN 13<br/>
                      }<br/>
                      void loop() // bucle de funcionamiento<br/>
                      {<br/>
                      digitalWrite(ledPin, HIGH); // activa el LED<br/>
                      delay(1000); // espera 1 seg. (tiempo encendido)<br/>
                      digitalWrite(ledPin, LOW); // desactiva el LED<br/>
                      delay(1000); // espera 1 seg. (tiempo apagado)<br/>
                      }                                                  <br/>                                                                            
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>