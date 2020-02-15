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
     <p color="000000" size="10" face="Arial">Sensor de temperaturacon sensor NTC</p>
      <img class="responsive-img" src="<?php echo base_url('assets/img/arduino/practic15.png')?>"
      width="300"
      height="300"
      style="padding-bottom: 30px" >
      </center>
        <table>
            <tr>
              <td>                    
            <b>Descripción del ejercicio:</b><br></br>  
            En este ejemplo se trata de medir la temperatura desde el PIN3 de entrada analógica y
ver si este valor supera un valor dado de 500 (medida absoluta) si supera este valor
activará la salida digital PIN13 y si no la apagara. Además queremos que se muestre en
el monitor de salida del IDE Arduino el valor leído. D sensor utilizaremos un sensor del
tipo NTC. <br></br>           
                  
          
            Un NTC o termistor NTC es una resistencia variable, que varia su valor dependiendo de
la temperatura ambiente. Cuanta mas temperatura menor será su resistencia y cuanto
menos temperatura mayor será la resistencia. Suelen ser utilizados en alarmas.<br>
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
                      <li>1 Placa de pruebas (Protoboard)
                      </li>
                      <li>1 NTC sensor de temperatura
                      </li>
                      <li>1 Resistencia 1kΩ
                      </li>
                      <li>1 Alambre para conectar
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

                     int led=13;
int ntc=3;
int medida=0; 
//variable que guarda el límite de temperatura al que se activa el ventilador
int nivel=500;
void setup(){
 pinMode(led,OUTPUT);
 pinMode(motor,OUTPUT);
 beginSerial(9600);
}
//procedimiento que envía al puerto serie, para ser leído en el monitor,
void monitoriza(){
 printInteger(medida); //el valor de la señal de la NTC en la entrada analógica
 printString(" ");
 delay(100); //para evitar saturar el puerto serie
}
void loop(){
 medida=analogRead(ntc);
 monitoriza();
 if(medida>nivel){ //si la señal del sensor supera el nivel marcado:
 digitalWrite(led,HIGH); //se enciende un aviso luminoso

 }
 else{ // si la señal está por debajo del nivel marcado
 digitalWrite(led,LOW);
 }
}                                                                                                       
                </p>
           </div>                                              
</div>
 
</center>
       

    </body>

   

<p></p>

</html>