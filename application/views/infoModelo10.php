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
     <p color="000000" size="10" face="Arial">Control de motores 5v con L293D(Puente H)</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic10.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            Obtendremos conocimiento sobre  como controlar velocidad y sentido de giro de motores CC utilizando una placa Arduino y un puente H (L293D).
             <br></br>           
                  
          
            ARDUINO   L293D(Puente H)  <br>      
  5          10<br>
  6          15<br>
  9          7<br>
  10         2<br>
  5V         1, 9, 16<br>
  GND        4, 5, 12, 13<br>
  
  El motor LEFT se conecta a los pines 3 y 6 del Puente H<br>
  El motor RIGHT se conecta a los pines 11 y 14 del Puente H<br>
  
  La fuente de alimentacion de los Motores se conecta a tierra y<br>
  el positivo al pin 8 del puente H. 
  <br>
                <br>

            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO</li>
                      <li>2 Motores de 5v</li>
                      <li>1 Placa de pruebas (Protoboard)</li>
                      <li>1 1 Alambre para conexiones</li>
                      <li>1 Puente H(L293D)</li>
                      <li>4 baterias AA</li>
                      <li>1 conector de baterias AA</li>
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

                      
                      */
//LEFT MOTOR<br>
int leftA = 9; <br>
int leftB = 10;<br>
//RIGHT MOTOR <br>
int rightA = 5; <br>
int rightB = 6; <br>

int vel = 255; // Velocidad de los motores (0-255)<br>

void setup()  { <br>
  pinMode(rightA, OUTPUT); <br>
  pinMode(rightB, OUTPUT); <br>
  pinMode(leftA, OUTPUT); <br>
  pinMode(leftB, OUTPUT); <br>
  Serial.begin(9600); <br>
  analogWrite(rightA, 0); <br>
  analogWrite(rightB, 0);<br>
  analogWrite(leftA, 0); <br>
  analogWrite(leftB, 0);<br>
 } <br>
 
void loop()<br>  { 
    if (Serial.available()) { <br>
    char  a = Serial.read();<br>
      // STOP  <br>
          if (a =='X'||a =='x'){ <br>    
             Serial.println("STOP");<br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, 0);   <br>
          }    <br>
      //MOTOR left FORWARDS <br>
          if (a =='W'||a =='w'){<br>
            Serial.println("MOTOR left FORWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, vel); <br>
              analogWrite(leftB, 0);<br>
          }<br>
      //MOTOR left BACKWARDS <br>
          if (a =='A'||a =='a'){ <br>
            Serial.println("MOTOR left BACKWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, vel);<br>
          } <br>
      //MOTOR right FORWARDS <br>
          if (a =='E'||a =='e'){<br>
            Serial.println("MOTOR right FORWARDS"); <br>
              analogWrite(rightA, vel); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, 0); <br>
          }<br>
             
      //MOTOR right BACKWARDS <br>
          if (a =='S'||a =='s'){ <br>
            Serial.println("MOTOR right BACKWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, vel);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, 0); <br>
          }<br>
      
      //MOTOR left & right FORWARDS <br>
          if (a =='T'||a =='t'){<br>
            Serial.println("MOTOR left & right FORWARDS"); <br>
              analogWrite(rightA, vel); <br>
              analogWrite(rightB, 0);<br>
              analogWrite(leftA, vel); <br>
              analogWrite(leftB, 0); <br>
          }<br>
      //MOTOR left & right BACKWARDS <br>
          if (a =='F'||a =='f'){<br>
            Serial.println("MOTOR left & right BACKWARDS"); <br>
              analogWrite(rightA, 0); <br>
              analogWrite(rightB, vel);<br>
              analogWrite(leftA, 0); <br>
              analogWrite(leftB, vel); <br>
          }<br>
    }<br>
  }      <br>                                                                                   
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>