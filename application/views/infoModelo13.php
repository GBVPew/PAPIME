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
     <p color="000000" size="10" face="Arial">Notas musicales con un potenciometro</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic13.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            Al girar el potenciómetro, el arduino procesara las señales de entrada proporcionadas por este, para que la bocina, reproduzca las notas. De antemano, se programan las frecuencias de cada una de las notas, según la octava, en la cual se encuentren escritas en el pentagrama.
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
                      <li>1 Potenciometro de 100KΩ
                      </li>
                      <li>1 Placa de pruebas (Protoboard)  
                      </li>
                      <li>1 Alambre para conexiones    
                      </li>
                      <li>1 Bocina de 8 Ω a 1W      
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

                     int altavoz = 9;
const int DO  = 262;
const int RE  = 294;
const int MI  = 330;
const int FA  = 349;
const int SOL = 392;
const int LA  = 440;
const int SI  = 494;

void setup() {

  Serial.begin(9600);

}

void loop() {
int valor = analogRead(A0);
int frecuencia;
int duracion;

 Serial.print("Valor del potenciometro: ");
  Serial.print(valor);
  Serial.print("\n");
  delay(100);

if (valor>=10 && valor<=20){
frecuencia = DO;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("DO");
  Serial.print("\n");
delay(100);  
}

if (valor>20 && valor<=30){
frecuencia = RE;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("RE");
  Serial.print("\n");
delay(100);  
}

if (valor>30 && valor<=40){
frecuencia = MI;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("MI");
  Serial.print("\n");
delay(1000);  
}

if (valor>40 && valor<=50){
frecuencia = FA;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("FA");
  Serial.print("\n");
delay(100);  
}

if (valor>50 && valor<=60){
frecuencia = SOL;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("SOL");
  Serial.print("\n");
delay(100);  
}

if (valor>60 && valor<=70){
frecuencia = LA;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("LA");
  Serial.print("\n");
delay(100);  
}

if (valor>70 && valor<=80){
frecuencia = SI;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("SI");
  Serial.print("\n");
delay(100);  
}

if (valor>=80 && valor<=90){
frecuencia = DO;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("DO");
  Serial.print("\n");
delay(100);  
}

if (valor>90 && valor<=100){
frecuencia = RE;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("RE");
  Serial.print("\n");
delay(100);  
}

if (valor>=100 && valor<=200){
frecuencia = MI;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("MI");
  Serial.print("\n");
delay(100);  
}

if (valor>200 && valor<=300){
frecuencia = FA;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("FA");
  Serial.print("\n");
delay(100);  
}

if (valor>300 && valor<=400){
frecuencia = SOL;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("SOL");
  Serial.print("\n");
delay(100);  
}

if (valor>400 && valor<=500){
frecuencia = LA;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("LA");
  Serial.print("\n");
delay(100);  
}

if (valor>500 && valor<=600){
frecuencia = SI;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("SI");
  Serial.print("\n");
delay(100);  
}

if (valor>600 && valor<=700){
frecuencia = DO;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("DO");
  Serial.print("\n");
delay(100);  
}

if (valor>700&& valor<=800){
frecuencia = RE;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("RE");
  Serial.print("\n");
delay(100);  
}

if (valor>=800 && valor<=900){
frecuencia = MI;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("MI");
  Serial.print("\n");
delay(100);  
}

if (valor>900 && valor<=1023){
frecuencia = FA;
duracion=1000;
tone (altavoz, frecuencia, duracion);
Serial.print("FA");
  Serial.print("\n");
delay(100);  
}

}                       
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>