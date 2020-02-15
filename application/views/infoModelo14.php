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
     <p color="000000" size="10" face="Arial">Luces Audioritmicas</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic14.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            Aprenderemos a instalar un sistema audioritmico basico con leds, para conocer el comportamiento del audio con los datos arrojados para encender los LEDs a el ritmo de nuestra musica.
			<br></br>           
                  
          
           <br>
                <br>
            El codigo que usaremos sera el siguiente:
    </br>
  </br>
 
             </td>

                <td>
                   <b>Materiales:</b>
                   <ol type=”A”>
                      <li>1 Arduino UNO
                      </li>
                      <li>8 LEDs
                      </li>
                      <li>1 Cable de audio (micro jack)
                      </li>
                      <li>1 Placa de pruebas (Protoboard) 
                      </li>
                      <li>1 Alambre para conexiones
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

                      //Declaramos los leds
int LED1 = 3;
int LED2 = 4;
int LED3 = 5;
int LED4 = 6;
int LED5 = 7;
int LED6 = 8;
int LED7 = 9;
int LED8 = 10;
//Las variables que usaremos para el silencio
int Valor;
int Valor1;
int Valor2;
int Valor3;
int Valor4;
//Configuramos los pines y el serial para poder visualizar la entrada analogica
void setup (){
Serial.begin(9600);
pinMode(LED1,OUTPUT);
pinMode(LED2,OUTPUT);
pinMode(LED3,OUTPUT);
pinMode(LED4,OUTPUT);
pinMode(LED5,OUTPUT);
pinMode(LED6,OUTPUT);
pinMode(LED7,OUTPUT);
pinMode(LED8,OUTPUT);
}
void loop (){
//Leemos el valor
Valor = analogRead(A0);
//Transferimos los valores para saber cual era el estado anterior
Valor4 = Valor3;
Valor3 = Valor2;
Valor2 = Valor1;
Valor1 = Valor;
//Visualizamos los valores en Serial Monitor
Serial.print("Valor: ");
Serial.print(Valor);
Serial.print("\t Valor1: ");
Serial.print(Valor1);
Serial.print("\t Valor2: ");
Serial.print(Valor2);
Serial.print("\t Valor3: ");
Serial.print(Valor3);
Serial.print("\t Valor4: ");
Serial.println(Valor4);
//Condicionamos que si el programa lee 4 veces seguidas
0 que se apagen los leds, si no ponemos esto los leds parpadearan mucho
if (Valor1+Valor2+Valor3+Valor4==0){
digitalWrite(LED1,LOW);
digitalWrite(LED2,LOW);
digitalWrite(LED3,LOW);
digitalWrite(LED4,LOW);
digitalWrite(LED5,LOW);
digitalWrite(LED6,LOW);
digitalWrite(LED7,LOW);
digitalWrite(LED8,LOW);
}
//Encendemos los leds segun el valor de entrada.
En este caso la salida de mi pc como mucho me llega a 400 asi que lo dividimos entre ocho leds.
else{
if (Valor>0){
digitalWrite(LED1, HIGH);
}
else{
digitalWrite(LED1, LOW);
}
if (Valor>50){
digitalWrite(LED2, HIGH);
}
else{
digitalWrite(LED2, LOW);
}
if (Valor>100){
digitalWrite(LED3, HIGH);
}
else{
digitalWrite(LED3, LOW);
}
if (Valor>150){
digitalWrite(LED4, HIGH);
}
else{
digitalWrite(LED4, LOW);
}
if (Valor>200){
digitalWrite(LED5, HIGH);
}
else{
digitalWrite(LED5, LOW);
}
if (Valor>250){
digitalWrite(LED6, HIGH);
}
else{
digitalWrite(LED6, LOW);
}
if (Valor>300){
digitalWrite(LED7, HIGH);
}
else{
digitalWrite(LED7, LOW);
}
if (Valor>350){
digitalWrite(LED8, HIGH);
}
else{
digitalWrite(LED8, LOW);
}
}
}                                                                              
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>